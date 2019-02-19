<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<html>
<head>
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/control/css/style.css">
				<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/control/css/style2.css">
				<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/control/css/login.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta charset="utf-8">
		
		<meta name="description" content ="My website">
	<title>Suggestions</title>
</head>
<body>
<div class="banner">
	<img class="img1" src="https://osboha180suggestion.000webhostapp.com/control/css/logo.png">
</div>
	<div class="done"> <?php if(isset($response1)){echo $response1;} ?>	<br></div>

<form id="admin" method='post' action='https://osboha180suggestion.000webhostapp.com/control/'>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" id="username" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="password" required>

    <button name="login" id="submit" type="submit" value="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span>or </span><button type="button" class="cancelbtn" onclick="window.location.href='https://osboha180suggestion.000webhostapp.com/signup/'">Signup</button>
    <span><br> </span><button type="button" class="cancelbtn" onclick="window.location.href='https://osboha180suggestion.000webhostapp.com/'">الصفحة الرئيسية</button>

  </div>
</form>