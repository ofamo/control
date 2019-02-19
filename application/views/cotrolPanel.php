<?php?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<html dir="rtl">
<head>
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/control/css/style.css">
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/control/css/style2.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta charset="utf-8">
		
		<meta name="description" content ="My website">
	<title>Suggestions</title>
</head>
<body>
<div class="banner">
	<img class="img1" src="https://osboha180suggestion.000webhostapp.com/control/css/logo.png">
</div>
	<div id="time" class="timer">
		<table class="countdownContainer">
				<tr class="info">
				<td id="days">120</td>
				<td id="hours">4</td>
				<td id="minutes">12</td>
				<td id="seconds">22</td>
			</tr>
			</table>
	</div>
<div class="done" style="color:red" > <?php if(isset($response)){echo $response	;} ?>	<br></div>	


	<div dir="rtl" style="color:white"> موعد الاطلاق: <?php if(isset($sd)){echo " GMT ".$sd;}?> <br>

					موعد الاغلاق: <?php if(isset($ed)){echo " GMT ".$ed;}?></div>
	 <form id="start_end" method='post' action='https://osboha180suggestion.000webhostapp.com/control/'>
		<table>
			<tr><td><label style="color:white" for="start"> تاريخ بداية التقديم للاقتراحات</label>
			<tr><td><input type="datetime-local" name="start" id="start" required ></td></tr>
			<tr><td><label style="color:white" for="end">تاريخ نهاية التقديم للاقتراحات </label>
			<tr><td><input type="datetime-local" name="end" id="end" required></td></tr>
		<tr><td><input name="send" id="submit" type="submit" value="submit" form="start_end"/></td></tr>
		</table>
		</form>
		<form id="destroy" method="post" action="https://osboha180suggestion.000webhostapp.com/control/" >
			<tr><td><input type="submit" name="destroy" id="submit" value="log out"/></td></td>
			</form>
			
			<button type="button" class="cancelbtn" onclick="window.location.href='https://osboha180suggestion.000webhostapp.com/'">الصفحة الرئيسية</button>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="http://localhost/CodeIgniter-3.1.9/js/timer.js"></script>
</html>