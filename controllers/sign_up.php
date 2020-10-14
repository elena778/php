<?
$login=name;
$password=pass;
if ($login=="" || $password==""){
	print("Empty login or password");
} 

if ($login!==name || $password!==pass) print("Wrong login or password");


if ($_POST["login"] || $_POST["password"]) {
	redirect();
}

$fp=fopen('text.txt','w');
fwrite($fp,'TEXT');
fclose($fp);


function redirect($url, $statusCode=303)
{
	header('location:', $url, true, statusCode);
	die();
}
redirect('localhost',false);
?>