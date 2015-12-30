<?php
session_start();
include_once('db_conn.php');
include_once('db_func.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"             
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
	
		<head>
		<meta http-equiv="Content-Type"	content="text/html;	charset=utf-8"	/>
		<meta http-equiv="Content-Language" content="en" />
		<title>Real Estate</title>
		<script	type="text/javascript">	</script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
			$(function() {
				$( "#datepicker" ).datepicker();
			});
		</script>
		<style type="text/css" media="all">
			@import	"default.css";
		</style>
		<script type = "text/javascript">
		function getCaptcha(){//更換驗證碼
			var d = new Date();
			document.getElementById("captchaImage").setAttribute('src' , '../captcha/captcha.php?r='+ d.getTime());
		}
		function check(){//檢查必填欄位
			if (document.registerform.uid.value==""){
				alert("帳號未輸入");
			}
			else if (document.registerform.upwd.value==""){
				alert("請設定密碼");
			}
			else if (document.registerform.upwdconfirm.value !=document.registerform.upwd.value){
				alert("兩次輸入的密碼不同");
			}
			else if (document.registerform.uname.value==""){
				alert("姓名未輸入");
			}
			else if (document.registerform.ubdate.value==""){
				alert("生日未輸入");
			}
			else if (document.registerform.uemail.value==""){
				alert("E-MAIL未輸入");
			}
			else{
				
				document.registerform.submit();
			}


		}
		</script>
		</head>

<body>	
	<div id="kontainer">
		
		
    <!-- header -->
    <div id="header">
      <div id="logo"><a href=""><img  src="images/logo.jpg" alt="Real Estate" /></a></div>
      <div id="trees"></div>
    </div>
    <!-- end of header -->
    
    <!-- navigation -->
    <div id="navcontainer">
      <ul id="navlist">
          <li id="active"><a href="#" id="current">ITEM ONE</a></li>
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">BUYING</a></li>
          <li><a href="#">SELLING</a></li>
          <li><a href="#">INSURANCE</a></li>
          <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    
    <div class="search">        
         <div id="searchwrapper">
         <form action="">
            <div><input type="text" class="searchbox" name="s" value="" /></div>
            <div><input type="image" src="images/search_button.jpg" class="searchbox_submit" value="" />    </div>
          </form>
        </div> 
    </div>
    <div class="clear"></div>
    <!-- end of navigation -->
    
    
    <!-- topoffers -->
		<div id="topoffers">
  		<div id="topoffers-left-arrow"><a href=""><img src="images/arrow_left.jpg" alt="more" /></a></div>
      <div id="topoffers-content">
                 <div id="topoffers-content-box"> 
                      <div id="estate1-box">
                          <h3>Residental Properties</h3>
                          <img src="images/temp_estate.jpg" alt="Residetal Properties" />
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus accumsan est, vitae ultrices odio adipiscing eget. <br /><br /><a href="">learn more</a></p>
                      </div>
                      <div id="estate2-box">
                          <h3>Commercial Properties</h3> 
                          <img src="images/temp_estate.jpg" alt="Commercial Properties" />
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus accumsan est, vitae ultrices odio adipiscing eget. <br /><br /><a href="">learn more</a></p>
                      </div>
                      <div id="estate3-box">
                          <h3>Deluxe Properties</h3>
                          <img src="images/temp_estate.jpg" alt="Deluxe Properties" /> 
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus accumsan est, vitae ultrices odio adipiscing eget. <br /><br /><a href="">learn more</a></p>
                      </div>
                      <div id="estate4-box">
                          <h3>Luxury Properties</h3>
                          <img src="images/temp_estate.jpg" alt="Luxury Properties" />
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus accumsan est, vitae ultrices odio adipiscing eget. <br /><br /><a href="">learn more</a></p>
                      </div>
                  <div class="clear"></div>
                 </div>
      </div>
      <div id="topoffers-right-arrow"><a href=""><img src="images/arrow_right.jpg" alt="more" /></a></div>
      </div>    
    <div class="clear"></div>
    <!-- end of topoffers -->
    
    
    <!-- body -->
    <div id="lavy-stlpec-box"><div id="lavy-stlpec">
				<div id="latest_properties">
            <h2>Latest properties</h2>
            <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
             <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
             <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
             <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
             <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
             <div class="property"> 
                 <div class="property_left">
                    <img src="images/img_01.jpg" alt="property" />
                    <p><b>Two bedroom apartment, Rent, Malacky, Slovakia</b><br />Guarantee of the current listing</p>
                 </div>
                 <div class="property_right"> <b>Rent<br />72.000,-EUR</b></div>
                 <div class="clear"></div>
            </div>
        </div>
		</div></div>
		
		
		
		<div id="pravy-stlpec-box"><div id="pravy-stlpec">
				
				<div id="find_property">
				<?php
				if (!isset($_POST['uid']) && !isset($_POST['upwd'])){
					?>
				            <form name="registerform" id="form_163050" class="appnitro"  method="post" action="newmember.php"> 
					         
		                	<h2>加入會員</h2> 			
                        				
                        		<div><label class="description" for="element_1">帳號 *</label> </div> 
                        		<div> 
									<input type=text class="element select medium" id="element_1" name="uid" value="lgl">  
                        		</div> 
								<div class="clear"></div>
                        		<div><label class="description" for="element_2">密碼 *</label>   </div> 
                        		<div> 
									<input type=password class="element select medium" id="element_1" name="upwd" value="1234"> 
                        		</div> 
								<div class="clear"></div>
                        		<div><label class="description" for="element_3">確認密碼 *</label> </div> 
                        		<div> 
									<input type=password class="element select medium" id="element_1" name="upwdconfirm" value="1234"> 
                        		</div> 
                        		<div class="clear"></div>
                        		<div><label class="description" for="element_4">姓名 *</label>  </div> 
                        		<div> 
									<input type=text class="element select medium" id="element_1" name="uname" value="劉冠綸"> 
                        		</div> 
								<div class="clear"></div>
                        		<div><label class="description" for="element_5">性別 *</label>   </div> 
                        		<div> 
									<select class="element select small" id="element_5" name="ugender"> 
										<option value="男">男</option> 
										<option value="女" >女</option> 
                                    </select> 
                        		</div> 
                                <div class="clear"></div><div><label class="description" for="element_5">生日 *</label> </div> 
                        		<div> 
									<input type=text class="element select medium" id="datepicker" name="ubdate" value="1994-11-16"> 
                        		</div> 
                                <div class="clear"></div>
                                <div><label class="description" for="element_5">E-MAIL *</label>   </div> 
                        		<div> 
									<input type=text class="element select medium" id="element_1" name="uemail" value="ej04xjp6senb654237@gmail.com"> 
                        		</div> 
                                <div class="clear"></div>
                                <div><label class="description" for="element_5">地址 </label>   </div> 
                        		<div> 
									<input type=text class="element select medium" id="element_1" name="uaddress" value="新北市新店區">
                        		</div> 
                                <div class="clear"></div>
                                <div><label class="description" for="element_5">頭貼 </label>   </div> 
                        		<div> 
									<input type=file class="element select medium" id="element_1" name="uphoto"> 
                        		</div> 
								<div class="clear"></div>
                                <div><label class="description" for="element_5">手機 </label>   </div> 
                        		<div> 
									<input type=text class="element select medium" id="element_1" name="uphone" value="0915369373">
                        		</div> 
                        		<div class="clear"></div>
                                <div><label class="description" for="element_5">請輸入圖中數字: </label>   </div> 
								<div><img id="captchaImage" src="../captcha/captcha.php" />  </div>                         		 
                        	    <div class="clear"></div>
                                <div><label class="description" for="element_5"><input type="text" name="captcha" size="6"> </label>   </div> 
                        		<div> 
									<input type="button" value = "換一組驗證數字"  id="element_5" onclick = "getCaptcha();">
								</div>      	
								<div class="clear"></div>
                        		<div>
									<input id="saveForm" class="button_text" type="button" name="join" value="註冊" onClick="check()" /> </div>
                        		</form>	

                        		<?php
                        		}
                        		else{
                        			$_SESSION['Scaptcha']=$_POST['captcha'];
                        			$SQLStr = "SELECT * FROM 會員 where 會員.帳號='".$_POST['uid']."'";
                        			
                        			$rs = db_query($SQLStr);
                        			if (db_num_rows($rs)>0){
                        				echo '<script>alert("帳號已有其他人使用!");'.'window.history.back();</script>';
                        				die();
                        			}
                        			$SQLStr = "SELECT * FROM 會員 where 會員.email='".$_POST['uemail']."'";
                        			$rs = db_query($SQLStr);
                        			if (db_num_rows($rs)>0) {
                        				echo '<script>alert("不可重複使用相同的email信箱，申請新帳號!");'.'window.history.back();</script>';
                        				die();
                        			}
                        			if ($_SESSION['captchaText'] != $_POST['captcha']){
                        				echo '<script>alert("圖形驗證錯誤!");'.'window.history.back();</script> ';
                        				die();
                        			}
                        			$SQLStr = "INSERT INTO 會員 (帳號,姓名,性別,生日,登入密碼,手機號碼,email,頭貼,地址,權限) VALUES ('".$_POST['uid']."','".$_POST['uname']."','".$_POST['ugender']."','".$_POST['ubdate']."',md5('".$_POST['upwd']."'),'".$_POST['uphone']."','".$_POST['uemail']."','".$_POST['uphoto']."','".$_POST['uaddress']."','".'一般會員'."')";
                        				$rs = db_query($SQLStr);
                        				if (mysql_error()){
                        					die("註冊失敗" .mysql_error());
                        				}
                        				else{
                        					echo'<script>alert("註冊成功!");' .'location.href = "login.php"; </script>';
                        					die(); 
                        				}
                        		}	

                        		?>
				</div></div>
				
				
        
		</div></div>
		
	
    <div class="clear"></div>
    <!-- end of body -->

    <!-- footer -->
    <div id="footer"><p><a href="http://www.x-reality.sk">reality</a></p></div>
    <!-- end of footer -->
    
</body>
</html>
