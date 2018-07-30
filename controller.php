<?php
    session_start();
    require __DIR__ . '/vendor/autoload.php';
    use Abraham\TwitterOAuth\TwitterOAuth;

    define("SITE_URL", $_SERVER['HTTP_HOST']);
    define("ALLOWED_HOSTS", "localhost, 127.0.0.1, post2earn.herokuapp.com, post2earn.com, www.post2earn.com");

    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->addWarning('Foo');

    function fb(){
        $fb = new Facebook\Facebook([
            'app_id' => '194169717836257',
            'app_secret' => '9907c3f051e704023243396f37f709e5',
            'default_graph_version' => 'v2.10',
            ]);
        return $fb;
    }
    function twitter(){
        return [
            //
            'consumer_key'      => 'EPKXCv3tUsq9DoxwZy616Cy1o',
            'consumer_secret'   => 'UXnAeXkCZFIOnLVQCS4LFR7GsCTrOiU77OGSFL3dUoYZiTxU8x',
         
            //
            'url_login'         => 'http://localhost/twitter_login.php',
            'url_callback'      => 'http://localhost/twitter_callback.php',
        ];
    }
    function connectDB(){
        // $cleardb_url = parse_url('mysql://b0f64272c12ba0:d3099c0b@us-cdbr-iron-east-04.cleardb.net/heroku_60c441c74647baf?reconnect=true');
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
       
        // $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        $conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else{
			return $conn;
		}
    }

    function loginURL($type = 'facebook'){
        switch ($type) {
            case 'facebook':
                $fb = fb();
                $helper = $fb->getRedirectLoginHelper();
                $permissions = ['email']; // Optional permissions
                $loginUrl = $helper->getLoginUrl('http://'.SITE_URL.'/fb-callback.php', $permissions);
                return $loginUrl;
                break;
            
            default:
                # code...
                break;
        }

    }

    function requireData($type= 'GET'){
        if(($type == 'GET' && (empty($_GET))) || (type == 'POST' && empty($_POST))) {
            header('HTTP/1.1 403 Data Required');
		    // header('WWW-Authenticate: Basic realm="Access denied"');
        }
    }

    requireData('GET');
?>