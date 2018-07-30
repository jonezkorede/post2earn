<?php
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
        
        

        public function insert($query, $data, $type = "", $constraints = ""){
            $link = DB::connect();
            $count = count($data); 
            // $type = str_repeat('s', count($data));
            $response = array();

            $SetValues = " values (";
            for($i = 0; $i < $count; ++$i) {    
                // array_push($type, 's');
                if ($i>0) {$SetValues.=",?";} else {$SetValues.="?";}
            }

            $SetValues.=")";
            $query .= $SetValues. $constraints;
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
        public function update($table, $data, $type = '', $constraints = ''){
            $link = DB::connect();
            $query = 'UPDATE '.$table;
            $values = array(); 
            // $type = str_repeat('s', count($data));
            $response = array();

            $query .= " SET ";

            foreach ($data as $key => $value) {
                if ($i>0) {$query.= ",`".$key."` = ? ";} else {$query.= "`".$key."` = ?";}
                array_push($values, $value);
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
                    array_push($response, ['error' => 'Error updating the database.']);
                }
            }
            else{
                array_push($response, ['error' => 'Error: Number of elements in type definition string doesn\'t match number of bind variables']);
            }

            return $response; 
        }
        public function delete($query){
            // 
        }
        public function select($query){
            // 
        }
    }
?>