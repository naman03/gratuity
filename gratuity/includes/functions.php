<?php
ob_start();
function redirect($destination)
{
    		//ob_start();
	
	if (preg_match("/^https?:\/\//", $destination))
	{
		header("Location: " . $destination);
	}

	
	else if (preg_match("/^\//", $destination))
	{
		$protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
		$host = $_SERVER["HTTP_HOST"];
		header("Location: $protocol://$host$destination");
	}

	
	else
	{
		
		$protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
		$host = $_SERVER["HTTP_HOST"];
		$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
		header("Location: $protocol://$host$path/$destination");
	}

	
	exit;
}

function query($q){
//$connection = mysqli_connect("127.7.139.130:3306","admindvZG3BI","MtrkvpRkRVsH","e");
	//$connection = mysqli_connect("localhost","root","hamburger","g");
	$connection = mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b822159450f28e","d2895993","ad_a324ffdadb6f960");
	//$connection = mysqli_connect("127.7.139.130:3306","admindvZG3BI","MtrkvpRkRVsH","g");
	$result=mysqli_query($connection, $q);
	return $result;
	mysqli_close();
}



function random_string($length) {
	$key = '';
	$keys = array_merge(range(0, 9));

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $key;
}
function random_string2($length) {
	$key = '';
	$keys = array_merge(range(0, 9), range('a', 'z'));

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $key;
}
function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            //require("/templates/header.php");
		
            // render template
	//	if(!(($template=="login_form.php")))
      //      	{require("../templates/tab.php");}
		require("templates/$template");
            // render footer
		require("/templates/howitworks.php");
            require("/templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }


if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

?>