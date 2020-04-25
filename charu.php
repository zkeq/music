<?php
require_once("./conn/conn.php");
require_once("./conn/ip.php");
require_once("./conn/time.php");
require_once("tihuan.php");
session_start();
?>

<?php
header('Content-Type:application/json; charset=utf-8');
$ip=addslashes(@$onlineip);
@$neirong=addslashes($_POST["content"]);
@$name=addslashes($_SESSION['name']);
@$user=$_SESSION['user'];
@$xname=addslashes($_POST['xname']);
@$newtime=addslashes($_POST['time']);
@$touxiang=addslashes($_POST['touxiang']);
$neirong=imgreplace($neirong);

$gltime =checkDateTime($newtime);
if($gltime){
	if(empty($user)){
		@$_SESSION['name']='匿名';
		if (!isset($neirong) || empty($neirong)){
			echo '{"success":false,"msg":"参数错误，参数不完全"}';
			return;
		}else{

				$sql="insert into yiqi_chat_content(name,time,content,ip,togroup,touxiang) values('$name','$newtime','$neirong','$ip','1','$touxiang')";
				$zxsql = mysql_query($sql);
				echo $sql;
		}
	}else{
		if (!isset($neirong) || empty($neirong)){
			echo '{"success":false,"msg":"参数错误，参数不完全"}';
			return;
		}else{
				$sql="select * from yiqi_chat_user where username='".$user."'";
				$zxsql = mysql_query($sql);
				$hqsql=mysql_fetch_assoc($zxsql);
				if($hqsql){
					$us=$hqsql['username'];
					$vip=$hqsql['vip'];
					$head=$hqsql['headerImg'];
					if($head=="" || $head==null){
						$head=$touxiang;
					}
					$sql="insert into yiqi_chat_content(username,time,content,ip,togroup,touxiangurl,isVip) values('$us','$newtime','$neirong','$ip','1','$head','$vip')";
					$zxsql = mysql_query($sql);
					
					$data=[
						"username"=>$us,
						"content"=>$neirong,
						"isVip"=>$vip,
						"header"=>$head
					];
					$arr=[
						"success"=>true,
						"msg"=>"发送成功",
						"data"=>$data
					];
					echo json_encode($arr,true);
				}else{
					echo '{"success":false,"msg":"密码错误"}';
				}
				
		}
	}
}else{
	var_dump($gltime);
}




?>