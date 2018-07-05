
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Books|Details</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
include_once('db.php');
//print_r($_session['user_id']);
?>

<div class="signin-form">

    <div class="container">
		<div style="float: right;">
			<?php
	if (isset($_SESSION['user_id']) && $_SESSION['user_id']  != "")
{?>
			<a href="https://bookstorekarthik.herokuapp.com/booksfinal.php" class="btn btn-default">Show Books</a>
			<a href="https://bookstorekarthik.herokuapp.com/logout.php" class="btn btn-danger">Logout</a>
<?php } ?>
		</div>

        <form class="form-signin" method="post" id="Book">

            <h2 class="form-signin-heading">Add Book Detials</h2><hr />

            <div id="error">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title of the Book" name="book_title" id="book_title" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter the ISBN" name="isbn" id="isbn" />
                <span id="check-e"></span>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name of the Author" name="author" id="author" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image Url" name="image" id="image" />
            </div>
			<div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description" id="description" />
            </div>
            <hr />

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Add Book
                </button>
            </div>

        </form>

    </div>

</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>