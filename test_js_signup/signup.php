<html>
<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
	<style type="text/css">
	input{
		transition:background 0.52s;
	}
	.white-placeholder::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  	color: white;
	}
	.white-placeholder::-moz-placeholder { /* Firefox 19+ */
  	color: white;
	}
	.white-placeholder:-ms-input-placeholder { /* IE 10+ */
  	color: white;
	}
	.white-placeholder:-moz-placeholder { /* Firefox 18- */
  	color: white;
	}
	</style>
</head>

<body>
	<center>
	<form id='register' action='#' method='post' enctype="multipart/form-data">
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>Register</h1>
	<input type='hidden' name='submitted' id='submitted' value='1'/>

	<label for='username' >Username :</label>
	<input type='text' name='username' id='username' maxlength="10" placeholder="username" />
	<br><br>

	<label for='password' >Password :</label>
	<input type='password' name='password' id='password' maxlength="10" placeholder="password" />
 	<br><br>
 
	<label for='password' >Re-Password :</label>
	<input type='password' name='re-password' id='re-password' maxlength="10" placeholder="re-password" />
	<br><br>

	<input type='submit' name='Submit' value='Submit' id='submit'/>

	<div id="warning">
	<br></div>


	</center>
	<script src="js/index.js"></script>
</form>
</body>
</html>