<!doctype html>
<?php require_once('./conn/conn.php');
session_start();
@$username=$_SESSION['user'];
@$vip=$_SESSION['vip'];

if($username=="" || empty($username)){
	
	return 0;
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="./style/reset.css" rel="stylesheet" />
	<link href="./style/chat.css" rel="stylesheet" />
</head>
<script type="text/JavaScript" src="./js/jQuery.min.js"></script>
<script type="text/JavaScript" src="./js/yiqi.js"></script>
<style>
	body{ overflow:hidden; }
</style>
<body id="Body">
	<div class="chat-left">
		<div class="chat-left-ul">
			<ul>
				<li>
					<div class="search">
						<input type="text" value="">
					</div>
				</li>
				<li class="change">
					<div class="chat-left-li-img">
						<img src="./images/icon/qun.png">
					</div>
					<div class="chat-left-li-right">
						<h3>大厅</h3>
						<span>15:27</span>
					</div>
				</li>
				<li>
					<div class="chat-left-li-img">
						<img src="./images/icon/qun.png">
					</div>
					<div class="chat-left-li-right">
						<h3>待添加</h3>
						<span>15:27</span>
					</div>
				</li>
				<li>
					<div class="chat-left-li-img">
						<img src="./images/icon/qun.png">
					</div>
					<div class="chat-left-li-right">
						<h3>待添加</h3>
						<span>15:27</span>
					</div>
				</li>
			</ul>
		</div>
	</div> 
	<div class="chat-right">
		<div id="chat-gongneng-img" style="display:none;">
			<div class="chat-gongneng-img-head"><h3>经典表情</h3></div>
			<div class="chat-gongneng-img-bottom"></div>
		</div>
		<div class="chat-right-head">
			<div class="chat-right-head-left">
				<img src="./images/icon/left2.png">
				<h2>大厅</h2>
			</div>
		</div>
		<div class="chat-right-buttom">
			<div class="chat-right-buttom-left">
				<div class="chat-right-buttom-left-head" id="chat-messages">
					<div id="chat-message">
					<audio id="newMessageMp3" src="./mp3/9478.wav" preload="preload"></audio>
					<!--	<div class="chat-message-left">
							<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=330729121&spec=4">
						</div>
						<div class="chat-message-right">
							<div class="chat-message-right-head">
								<h3>一奇</h3>
							</div>
							<div class="chat-message-right-bottom"></div>
						</div> -->
							<?php
							echo '<input type="hidden" id="sendUser" value="'.$username.'"/>';
							echo '<input type="hidden" id="sendVip" value="'.$vip.'"/>';
							$sql="select * from yiqi_chat_content Order By time ASC";
							$zxsql=mysql_query($sql);
						while($hqsql=mysql_fetch_assoc($zxsql)){
							$user=$hqsql['username'];
							$isVip=$hqsql['isVip'];
							if($isVip>0){
								$color="color:rgb(233, 104, 107);";
							}else{
								$color="color:#444";
							}
							$name=$hqsql['name'];
							$time = $hqsql['time'];
							$content = strip_tags($hqsql['content'],'<img>');
							$yc="";
							for($i=0;$i<strlen($content);$i++){
								$yc=$yc."*";
							};
							$touxiangurl = $hqsql['touxiangurl'];
							$touxiang = $hqsql['touxiang'];
							echo '<div class="lt-left">';
							echo '<div class="lt-left-left">';
							echo '<img src="'.$touxiangurl.'">';
							echo '</div>';
							echo '<div class="lt-left-right">';
							echo '<div class="lt-left-right-top">';
							echo '<span style="'.$color.'">'.$user.'</span>';
							echo '<span> '.$time.'</span>';
							echo '</div>';
							echo '<div class="lt-left-massage">';
							echo '<span>'.$content.'</span>';
							
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
						
						?>
					</div>
				</div>
				
				<div class="chat-right-buttom-left-buttom">
					
					<div class="chat-text-gongneng">
						<img src="./images/icon/biaoqing1.png">
						<img src="./images/icon/biaoqing1.png">
						<img src="./images/icon/biaoqing1.png">
					</div>
					<div class="chat-text-dingwei"><textarea id="chat-text"></textarea></div>
					<input id="chat-text-btn" type="submit" value="发送">
				</div> 
			</div>
			<div class="chat-right-buttom-right">
				<div class="chat-right-buttom-right-head"></div>
				<div class="chat-right-buttom-right-bottom"></div>
			</div>
		</div>
	</div>

</body>
	<script type="text/javascript" src="./js/socket.io.min.js"></script>
	<script type="text/JavaScript" src="./js/chat.js"></script>
	<script type="text/JavaScript">
		 	/* var Body = document.getElementById("Body");
			var sz = Kheight-200;
			Body.style.height=sz+"px";
			console.log(sz); */
	</script>
</html>