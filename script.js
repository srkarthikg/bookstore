$('document').ready(function()
{
	$("#content").hide();
	 $("#signin").validate({
        rules:
        {
            user_name: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
        },
        messages:
        {
            user_name: "Enter a Valid Username",
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            }
        },
        submitHandler: signin
    });
    /* validation */
    $("#register-form").validate({
        rules:
        {
            user_name: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            user_name: "Enter a Valid Username",
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            user_email: "Enter a Valid Email",
            cpassword:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
        submitHandler: submitForm
    });
    /* validation */
	$("#Book").validate({
        rules:
        {
            book_title: {
                required: true,
                minlength: 3
            },
            isbn: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            author: {
                required: true,
				minlength: 3
            },
        },
        messages:
        {
            book_title: "Enter a Valid Username",
            isbn:{
                required: "Provide a ISBN",
                minlength: "ISBN Needs To Be Minimum of 8 Characters"
            },
			author: "Enter a author"
        },
        submitHandler: booksubmitForm
    });
	
function booksubmitForm()
{
	var data = $("#Book").serialize();
	//alert(data);

        $.ajax({

            type : 'POST',
            url  : 'https://bookstorekarthik.herokuapp.com/addbooks.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry Invalid credentials. Please enter vaild details.!</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {

                    $("#btn-submit").html('submitting');
                    setTimeout(5000);
					window.location.href = "https://bookstorekarthik.herokuapp.com/booksfinal.php";

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
	
	}
	
/*update*/	

$("#Bookedit").validate({
        rules:
        {
            book_title: {
                required: true,
                minlength: 3
            },
            isbn: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            author: {
                required: true,
				minlength: 3
            },
        },
        messages:
        {
            book_title: "Enter a Valid Username",
            isbn:{
                required: "Provide a ISBN",
                minlength: "ISBN Needs To Be Minimum of 8 Characters"
            },
			author: "Enter a author"
        },
        submitHandler: bookeditsubmitForm
    });
	
function bookeditsubmitForm()
{
	var data = $("#Bookedit").serialize();
	alert($("#user_id").val());

        $.ajax({

            type : 'POST',
            url  : 'bookupdate.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry Invalid credentials. Please enter vaild details.!</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="updated")
                {

                    $("#btn-submit").html('updated');
                    setTimeout(5000);
					window.location.href = "https://bookstorekarthik.herokuapp.com//booksfinal.php";

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
	
	}
	

function signin()
{
	var data = $("#signin").serialize();

        $.ajax({

            type : 'POST',
            url  : 'signin.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry Invalid credentials. Please enter vaild details.!</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="loginsuccess")
                {

                    $("#btn-submit").html('logging in');
                    setTimeout(5000);
					window.location.href = "https://bookstorekarthik.herokuapp.com/booksfinal.php";

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
	
	}
    /* form submit */
    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'registeraction.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {

                    $("#btn-submit").html('Signing Up');
					window.location.href = "https://bookstorekarthik.herokuapp.com/";

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */
	
	
	
	var table = $('#example').DataTable({
		"columns":[
			{"data":"id"},
			{"data":"book_title"},
			{"data":"isbn"},
			{"data":"author"},
			{"data":"image"},
			{"data":"description"},
			{"data":"button" }
		],
		"recordsFiltered": 2,
		"processing": true,
        "serverSide": true,
        "ajax":{
			url:"https://bookstorekarthik.herokuapp.com/bookshow.php",
			type:"POST"
		}
    });
	
	
	
	var table1 = $('#example1').DataTable({
		"columns":[
			{"data":"id"},
			{"data":"book_title"},
			{"data":"isbn"},
			{"data":"author"},
			{"data":"image"},
			{"data":"description"}
		],
		"processing": true,
        "serverSide": true,
        "ajax":{
			url:"https://bookstorekarthik.herokuapp.com/allbooks.php",
			type:"POST"
		}
    });
	table.columns().each( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

});

  

function updateuser(val){
	console.log(val);
		$.ajax({
			type:"post",
			url:"https://bookstorekarthik.herokuapp.com/bookedit.php",
			data:{ID:val},
			dataType:"JSON",
			success: function(data) {
				$("#content").show();
				$a = data;
				$("#id").val($a.id);
				$("#book_title").val($a.book_title);
				$("#isbn").val($a.isbn);
				$("#author").val($a.author);
				$("#image").val($a.image);
				$("#description").val($a.description);
				$("#joining_date").val($a.joining_date);
				$("#user_id").val($a.user_id);
            },
            error: function(err) {
				//alert(data);
				console.log(err);
            }
		});
		
		

}


function deleteuser(val){
	console.log(val);
		$.ajax({
			type:"post",
			url:"https://bookstorekarthik.herokuapp.com/bookdelete.php",
			data:{ID:val},
			dataType:"JSON",
			success: function(data) {
				 window.location.reload(true);
				$a = data;
				$("#id").val($a.id);
				$("#first_name").val($a.firstname);
				$("#last_name").val($a.lastname);
				$("#email").val($a.email);
				
            },
            error: function(err) {
				//alert(data);
				console.log(err);
            }
		});
}

function filterGlobal () {
    $('#example').DataTable().search(
        $('#global_filter').val(),
        $('#global_regex').prop('checked'),
        $('#global_smart').prop('checked')
    ).draw();
}
 
function filterColumn ( i ) {
    $('#example').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
        $('#col'+i+'_regex').prop('checked'),
        $('#col'+i+'_smart').prop('checked')
    ).draw();
}
 