<?php
    session_start();

    function connectDB(){
        // $cleardb_url = parse_url('mysql://b8e9d5169be014:5bea91cc@us-cdbr-iron-east-04.cleardb.net/heroku_05fc96b3b05d7cb?reconnect=true');
        // //cleardb server
        // $cleardb_server   = $cleardb_url["host"];
        // $cleardb_username = $cleardb_url["user"];
        // $cleardb_password = $cleardb_url["pass"];
        // $cleardb_db       = substr($cleardb_url["path"],1);
        //local server
		$servername = "localhost";
		$username = "dr_hemm";
		$password = "olaayo10";
        $dbname = "post2earn";
       
        $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        // $conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else{
			return $conn;
		}
    }
?>