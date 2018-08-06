<?php

// DB::update('users', ['first_name'=> 'Emmanu', 'last_name'=>'Popo'], 'ss', 'WHERE 1');
// DB::delete('users', 'WHERE 1');
// DB::select('users', ['*', 'columns2'] , 'WHERE 1');
// DB::insert('users', ['first_name' => 'Emmanuel', 'last_name'=>'Popoola'], 'ss');
    class DB{

        public function connect(){
            $cleardb_url = parse_url('mysql://b0f64272c12ba0:d3099c0b@us-cdbr-iron-east-04.cleardb.net/heroku_60c441c74647baf?reconnect=true');
            $cleardb_server   = $cleardb_url["host"];
            $cleardb_username = $cleardb_url["user"];
            $cleardb_password = $cleardb_url["pass"];
            $cleardb_db       = substr($cleardb_url["path"],1);
            $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                return $conn;
            }
        }
        
        

        public function insert($table, $data, $type = "", $constraints = ""){
            $link = DB::connect();
            $count = count($data); 
            $values = array(); 
            // $type = str_repeat('s', count($data));
            $response = array();

            $query = "INSERT INTO ".$table."(";

            $i = 0;
            foreach ($data as $key => $value) {
                if ($i>0) {$query.= ",`".$key."`";} else {$query.= "`".$key."`";}
                array_push($values, $value);
                $i++;
            }
            
            $query .= ') VALUES(';
            $i = 0;
            foreach ($values as $key => $value) {
                if ($i>0) {$query.= ", ?";} else {$query.= "?";}
                $i++;
            }     
            $query .= ') ';       
            $query .= $constraints;
            array_push($response, ['query' => $query]);

            if (count($data) > 0 && !empty($query) && !empty($type))
            {
                if($stmt = mysqli_prepare($link, $query)){
                    mysqli_stmt_bind_param($stmt, $type, ...$data);
                    if(mysqli_stmt_execute($stmt)){
                        $id = mysqli_stmt_insert_id($stmt);
                        array_push($response, ['insert_id' => $id]);
                    }
                    else{
                        array_push($response, ['error' => 'Error inserting to the database.']);
                    }
                }
                else{
                    array_push($response, ['error' => 'Error inserting to the database.']);
                }
            }
            else{
                array_push($response, ['error' => 'Error: Number of elements in type definition string doesn\'t match number of bind variables']);
            }

            return $response;
        }
        public function update($table, $data, $type = '', $constraints = 'WHERE 1'){
            $link = DB::connect();
            $query = 'UPDATE '.$table;
            $values = array(); 
            // $type = str_repeat('s', count($data));
            $response = array();

            $query .= " SET ";

            $i = 0;
            foreach ($data as $key => $value) {
                
                if ($i>0) {$query.= ",`".$key."` = ? ";} else {$query.= "`".$key."` = ?";}
                array_push($values, $value);
                $i++;
            }

            $query .= $constraints;
            array_push($response, ['query' => $query]);

            if (count($data) > 0 && !empty($table) && !empty($type))
            {
                if($stmt = mysqli_prepare($link, $query)){
                    mysqli_stmt_bind_param($stmt, $type, ...$values);
                    if(mysqli_stmt_execute($stmt)){
                        $rows = mysqli_stmt_affected_rows ($stmt);
                        array_push($response, ['success' => true, 'affected_rows' => $rows]);
                    }
                    else{
                        array_push($response, ['error' => 'Error updating the database.']);
                    }
                }
                else{
                    array_push($response, ['error' => 'Unable to prepare MySQL query.']);
                }
            }
            else{
                array_push($response, ['error' => 'Error: Number of elements in type definition string doesn\'t match number of bind variables']);
            }

            return $response; 
        }
        public function delete($table, $constraints = 'WHERE 1'){
            $link = DB::connect();
            $query = 'DELETE FROM '.$table;
            $response = array();

            $query .= " ";

            $query .= $constraints;
            array_push($response, ['query' => $query]);

            if (!empty($table))
            {
                if($stmt = mysqli_prepare($link, $query)){
                    if(mysqli_stmt_execute($stmt)){
                        $rows = mysqli_stmt_affected_rows ($stmt);
                        array_push($response, ['success' => true, 'affected_rows' => $rows]);
                    }
                    else{
                        array_push($response, ['error' => 'Error deleting from the database.']);
                    }
                }
                else{
                    array_push($response, ['error' => 'Unable to prepare MySQL query.']);
                }
            }
            else{
                array_push($response, ['error' => 'Error: Expected table_name not given']);
            }

            return $response; 
        }
        public function select($table, $data, $constraints){
            $link = DB::connect();
            $response = array();
            if (empty($table)) {
                array_push($response, ['error' => 'Error: Expected table_name not given']);
            }
            elseif(empty($data)){
                array_push($response, ['error' => 'Error: Table columns to fetch']);
            }
            else{
                $count = count($data); 
                $values = array(); 
                $query = "SELECT ";

                for ($i=0; $i < $count; $i++) { 
                    if ($i>0) {
                        $query.= ", `".$data[$i]."`";
                    } else {
                        if(in_array('*', str_split($data[$i]))){
                            
                            $query.= $data[$i];
                        }
                        else{
                            $query.= "`".$data[$i]."`";
                        }
                    }
                }     


                $query .= " FROM `".$table."` ".$constraints;
                array_push($response, ['query' => $query]);

                if($stmt = mysqli_prepare($link, $query)){
                    if(mysqli_stmt_execute($stmt)){
                        $result = mysqli_stmt_get_result($stmt);
                        return $result;
                    }
                    else{
                        array_push($response, ['error' => 'Error deleting from the database.']);
                    }
                }
                else{
                    array_push($response, ['error' => 'Unable to prepare MySQL query.']);
                }
                return $response;      
                
                
            }
        }
    }
?>