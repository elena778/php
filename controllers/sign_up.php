<?
$login=name;
$password=pass;
if ($login=="" || $password==""){
	print("Wrong login or password");
	redirect();
} 

if ($login!==name || $password!==pass) print("Wrong login or password");

$fp=fopen('text.txt','w');
fwrite($fp,'TEXT');
fclose($fp);


function redirect($url, $statusCode=303)
{
	header('location:', $url, true, statusCode);
	die();
}
?>