<?
$login=name;
$password=pass;
if ($login=="" || $password==""){
	print("Empty login or password");
	redirect("http://localhost/views/sign_up.php",false)
} 

if ($login!==name || $password!==pass){
 	print("Wrong login or password");
 	redirect("http://localhost/views/sign_up.php",false)
}


if ($_POST["login"] || $_POST["password"]) {
	redirect('../index.php',false);
}

$fp=fopen('text.txt','w');
fwrite($fp,'TEXT');
fclose($fp);


function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

?>