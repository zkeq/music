	<?php
							$sql="select * from yiqi_chat_content Order By time Desc";
							$zxsql=mysql_query($sql);
						while($hqsql=mysql_fetch_assoc($zxsql)){
							
							$name=$hqsql['name'];
							$time = $hqsql['time'];
							$content = $hqsql['content'];
							echo '<div class="lt-left">';
							echo '<div class="lt-left-left">';
						if($hqsql['username']=""){
							echo '<img src="http://chat.q05.cc/images/niming1.png">';	
						}else{
							echo '<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=330729121&amp;spec=5">';
						}
							echo '</div>';
							echo '<div class="lt-left-right">';
							echo '<div class="lt-left-right-top">';
							echo '<span>'.$name.'</span>';
							echo '<span> '.$time.'</span>';
							echo '</div>';
							echo '<div class="lt-left-massage">';
							echo '<span>'.$content.'</span>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
						
						?>
						<!--<div class="lt-left">
							<div class="lt-left-left">
								<img src="images/niming1.png">
							</div>
							<div class="lt-left-right">
								<div class="lt-left-right-top">
									<span>一奇</span>
									<span>2018-08-15 23:20:10</span>
									</div>
								<div class="lt-left-massage">
									<span>啊啊啊</span>
								</div>
							</div>
						</div>

						<div class="lt-right">
							<div class="lt-right-right">
								<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=330729121&amp;spec=5">
							</div>																			
							<div class="lt-right-left">																	
								<div class="lt-right-left-top">														
									<span style="color:red">一奇</span>														
									<span>2018-08-15 23:35:06</span>												
								</div>																		
								<div class="lt-right-massage">							
									<span>即将更新最新版本</span>		
								</div>
							</div>
						</div>-->