<?php
$sitename = $_SERVER['DOCUMENT_ROOT'];
if($_POST['pass3']=="61sotadi"){
	setcookie(pass, $_POST['pass3']);
	header("Location: http://steam-vs-origin.ru/adm.php");
}
if($_COOKIE['pass']=="61sotadi"){header("Location: http://steam-vs-origin.ru/adm.php");}
?>
<html><head>
		<meta charset="utf-8">
		<title>Error 404</title>
		<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		<style>
			html, body {padding:0;margin:0;}
			body {background:#000;}
			#main {position: absolute;color:#fff;width: 750px;height: 180px;left: 50%;top: 50%;margin-left: -200px;margin-top: -100px;padding: 10px;}
			<?php if($_GET['sec']==""){echo '#main img {border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;}';}else{echo '#main img {border-radius:15px 15px 0 0;-webkit-border-radius:15px 15px 0 0;-moz-border-radius:15px 15px 0 0;}.forma {border-radius:0 0 15px 15px;-webkit-border-radius:0 0 15px 15px;-moz-border-radius:0 0 15px 15px;}';}?>
			.square {width:20px;height:20px;background:#fff;opacity:0;transition: all 0.5s ease-out;position:absolute;}
			.square:hover {opacity:1;}
			.square a {cursor:default;display:block;width:20px;height:20px;}
			.leftt {left:0;top:0;}
			.leftb {left:0;bottom:0;}
			.rightt {right:0;top:0;}
			.rightb {right:0;bottom:0;}
			.forma {background:#fff;height:30px;}
			.forma input[type=password] {border:0;background:#fff;margin-left:7px;margin-top:5px;width:250px;}
			.forma input[type=submit] {float:right;position:relative;right:7px;}
			.pad2 {padding:2px;} .pad3 {padding:3px;} .pad4 {padding:4px;} .pad5 {padding:5px;}
			.auth {background: #c0db53;opacity:0.5;background: -moz-linear-gradient(top, #c0db53 0%, #9ed800 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c0db53), color-stop(100%,#9ed800));background: -webkit-linear-gradient(top, #c0db53 0%,#9ed800 100%);background: -o-linear-gradient(top, #c0db53 0%,#9ed800 100%);background: -ms-linear-gradient(top, #c0db53 0%,#9ed800 100%);background: linear-gradient(to bottom, #c0db53 0%,#9ed800 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c0db53', endColorstr='#9ed800',GradientType=0 );border:1px solid #000;position:fixed;right:5px;bottom:5px;}
			.auth:hover {opacity:1;}
			</style>
</head>
<body cz-shortcut-listen="true">
	<?php
	$pass="12345";
			if($_GET['sec']==""){echo '
			<div id="main">
				<span style="font-family: \'Lobster\', cursive;float:left;position:relative;top:50px;right:15px;font-size:20px;">Вы куда?</span> 
				<img src="http://streetracers.besaba.com/img/kartinka.png" width="350px">
			</div>';}
			else
			{
			echo '
			<div id="main" style="width:350px;">
				<div class="block"><img src="http://streetracers.besaba.com/img/kartinka.png" width="350px"><br>
					<form method="post">
						<div class="forma">
							<input type="password" name="pass3"><input type="submit" name="submit" value="жмякни">
						</div>
					</form>
				</div>
			</div>';
		}
	?>
	<div class="square leftt"></div>
	<div class="square leftb"></div>
	<div class="square rightt"></div>
	<div class="square rightb"><a href="admin.php?sec=pass"></a></div>
 </body></html>