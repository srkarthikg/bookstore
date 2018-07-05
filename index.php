<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
//session_start();
?>
<div class="signin-form">

    <div class="container">


        <form class="form-signin" method="post" id="signin">

            <h2 class="form-signin-heading">Sign In</h2><hr />

            <div id="error">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
                </button>
				<div id="gConnect" >
    <img id="customBtn" src="./signin_button.png" onClick="signInClick()"
        alt="Sign in with Google+" />
  </div>
            </div>
			<a href ="https://bookstorekarthik.herokuapp.com/register.php">Register</a> 	<a href ="https://bookstorekarthik.herokuapp.com/booksfinal.php"style="float: right;">Show Books</a> 	
        </form>
		
    </div>

</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
