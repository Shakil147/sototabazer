<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Ajax Image Uploading Tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>


<div class="container">
  <h1>Laravel 5 - Ajax Image Uploading Tutorial</h1>


  <form action="{{ url('/account-ajax') }}" enctype="multipart/form-data" method="POST">


  	<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <div class="form-group">
      <label>Alt Title:</label>
      <input type="text" name="title" class="form-control" placeholder="Add Title">
    </div>


	<div class="form-group">
      <label>Image:</label>
      <input type="file" name="image" class="form-control">
    </div>


    <div class="form-group">
      <button class="btn btn-success upload-image" type="submit">Upload Image</button>
    </div>


  </form>


</div>


<script type="text/javascript">
  $("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
  });


  var options = { 
  success:function(response){
           	if (response == "success") {
           		console.log("image uplod success");
            }
	            if (response == "wrongPassword") {
	              $("#loginMessage").html("Incorrect Password");
	            }
	            if (response == "wrongEmail") {
	              $("#loginMessage").html("Incorrect Email");
	            }
    		}, 
	error:function(){

		}
  };
</script>


</body>
</html>