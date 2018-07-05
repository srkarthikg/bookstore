
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Books|Details</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>

<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
include_once('db.php');
//print_r($_session['user_id']);

?>

<div class="signin-form">

    <div class="container">
	<?php
	if (isset($_SESSION['user_id']) && $_SESSION['user_id']  != "")
{?>
	   <h2 class="form-signin-heading">Book Detials</h2><hr />
	   <div style="float: right;">
			<a href="http://localhost/bookstore_final/logout.php" class="btn btn-danger">Logout</a>
		</div>
			<a href ="http://localhost/bookstore_final/books.php" class="btn btn-info">ADD BOOKS</a>
		
		<div id="content">
			 <form class="form-signin" method="post" id="Bookedit">

            <h2 class="form-signin-heading">Edit Book Detials</h2><hr />

            <div id="error">
            </div>
			<input type="hidden" name ="id" id="id"/>
			
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
			<input type="hidden" name = "joining_date" id="joining_date"/>
			<input type="hidden" name = "user_id" id="user_id"/>
            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Update Book
                </button>
            </div>
		</div>

        
		   
		   
		   <div><h3>My Books</h3>
				<table id="example">
			<thead>
				<tr>
					<th>Id</th>
					<th>Book Title</th>
					<th>isbn</th>
					<th>author</th>
					<th>image</th>
					<th>description</th>
					<th>Action</th>
				</tr>
			</thead>
			</table>
		   </div>
<?php
}
		   
if (isset($_SESSION['user_id']) && $_SESSION['user_id']  != "")
{	   
	?>	   <div><h3>All Books</h3>
<?php }
		else
{?>
			 <div><h3>All Books</h3>
			 <div style="float: right;">
			 <a href="http://localhost/bookstore_final" class="btn btn-danger">Sign In</a>
			 <p></p>
			 </div>
<?php } ?>
				<table id="example1">
			<thead>
				<tr>
					<th>Id</th>
					<th>Book Title</th>
					<th>isbn</th>
					<th>author</th>
					<th>image</th>
					<th>description</th>
				</tr>
			</thead>
			</table>
		   </div>
		   

    </div>

</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>