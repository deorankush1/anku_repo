	<?php
Class Message_Manager
{
	require Message;
	require DOA;
	require Curl;
	require Show_Message;

	$servername = "localhost";
	$username = "root";
	$password = "MyNewPass";

	try
	{
		$conn = new PDO("mysql:host = $servername; dbname = Data",$username,$password);
		// set the PDO error mode to exception
		$conn -> setattribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "connected successfully";
	}
	catch(PDOEXCEPTION $e)
	{
		echo " Connection failed" . $e -> getmessage();
	}

	// connection
	/*$conn = new mysqli($servername, $username, $password);
	if ($conn -> connect_error)
	{
		die("connection failed" . $conn -> connect_error);
	}
	echo "connected successfully";
	
	*/

}
?>