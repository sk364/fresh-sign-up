<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "main.css" type = "text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</head>

<script>
    function passFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        var ok = true;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
            document.getElementById("pwd").innerHTML = "Passwords do not match";
            ok = false;
        }
        return ok;
    }

    function checkUsernameAvailability() {
	   $("#loaderIcon").show();
	   jQuery.ajax({
	   url: "check_username_availability.php",
	   data:'username='+$("#username").val(),
	   type: "POST",
	   success:function(data){
		  $("#user-availability-status").html(data);
		  $("#loaderIcon").hide();
	   },
	   error:function (){}
	   });
    }
	
	function checkRollnoAvailability(){
		$("#rloaderIcon").show();
		jQuery.ajax({
			url: "check_rollno_availability.php",
			data:'rollno='+$("#rollno").val(),
			type: "POST",
			success:function(data){
				$("#roll-availability-status").html(data);
				$("#rloaderIcon").hide();
			},
			error:function (){}
		});
	}
</script>

<body>
    <div class="container">
		<form class="form-horizontal" role="form" action="sign_up_check.php" onsubmit="return passFunction()" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-3 text-center">
					<input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required>
				</div>
			</div>
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="rollno">Roll Number:</label>
				<div class="col-sm-3 text-center">
					<input type="number" class="form-control" id="rollno" name="rollno" placeholder="Enter roll number" onBlur="checkRollnoAvailability()" required>
					<img src="images/loader_icon.gif" id="rloaderIcon" style="display:none" />
					<span id="roll-availability-status"></span>
				</div>
			</div>
		
			<div class="form-group">
				<label class="control-label col-sm-2" for="username">Username:</label>
				<div class="col-sm-3 text-center">
					<input type="username" class="form-control" id="username" name="username" placeholder="Choose username" onBlur="checkUsernameAvailability()" required>
					<img src="images/loader_icon.gif" id="loaderIcon" style="display:none" />
					<span id="user-availability-status"></span>
				</div>
			</div>
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Password:</label>
				<div class="col-sm-3">          
					<input type="password" class="form-control" name="pwd" id="pass1" placeholder="New password" required>
				</div>
			</div>
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="cnfrm-pwd">Password(again):</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="pass2" placeholder="Password(again)" required>
					<div id="pwd"></div>
				</div>
			</div>
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="dob">Date of Birth:</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="dob" name="dob" placeholder="dd/mm/yyyy">
				</div>
			</div>
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="sex">Sex:</label>
				<div class="col-sm-3">          
					<input type="radio" id="sex" name="sex" value="Male"> Male
					<input type="radio" id="sex" name="sex" value="Female"> Female
				</div>
			</div>
        
			<br/>
        
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" id="submit" value="Register"/>
				</div>
			</div>
		</form>
	</div>
</body>

</html>