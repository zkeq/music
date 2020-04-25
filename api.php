<?php
require_once("./conn/conn.php");
require_once("./conn/ip.php");
require_once("./conn/time.php");
session_start();
?>

<?php
header('Content-Type:application/json; charset=utf-8');
$code=$_GET['code'];
if($code=="login"){
	$ip=addslashes(@$onlineip);
	@$username=addslashes($_POST["username"]);
	@$password=md5(addslashes($_POST["password"]));
	$sql="select * from yiqi_chat_user where username='".$username."' and password='".$password."'";
	$zxsql = mysql_query($sql);
	$hqsql=mysql_fetch_assoc($zxsql);
	if($hqsql){
		 $_SESSION['user']=$hqsql['username'];
		 $_SESSION['vip']=$hqsql['vip'];
		 $_SESSION['header']=$hqsql['headerImg'];
		echo '{"success":true,"msg":"登录成功"}';
	}else{
		echo '{"success":false,"msg":"密码错误"}';
	}
}else if($code=="reg"){
	@$username=addslashes($_POST["username"]);
	@$password=md5(addslashes($_POST["password"]));
	@$email=addslashes($_POST["email"]);
	$sql="select * from yiqi_chat_user where username='".$username."'";
	$zxsql = mysql_query($sql);
	$hqsql=mysql_fetch_assoc($zxsql);
	if($hqsql){
		echo '{"success":false,"msg":"账号已经注册"}';
	}else{
		$sql="insert into yiqi_chat_user(username,password,email) value('$username','$password','$email')";
		$zxsql = mysql_query($sql);
		echo '{"success":true,"msg":"注册成功"}';
	}
}





?>