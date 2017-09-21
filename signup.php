<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Software Project Management Tool</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
    rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
    type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#skills').multiselect({
            includeSelectAllOption: true
        });
    });
</script>
    </head>
    <body>
<form class="form-horizontal">
<fieldset>
<legend>Enter Your Details</legend>

<!-- Enter Your Full Name-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Full Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Enter your full name" class="form-control input-md" required=""> 
  </div>
</div>
<!--Enter DOB-->
<div class="form-group">
  <label class="col-md-4 control-label" for="street">Date of Birth</label>  
  <div class="col-md-4">
  <input id="DOB" name="DOB" type="date" placeholder="Enter Your Date of Birth" class="form-control input-md" required="">
  </div>
</div>

<!-- Designation input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Designation">Designation</label>
  <div class="col-md-4">
    <input id="designation" name="designation" type="text" placeholder="Enter Your Designation" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Enter Email id-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Enter Contact no-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact no.</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select skills -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills" multiple="multiple">Skills</label>
  <div class="col-md-4">
    <select id="skills" name="skills" multiple="multiple">
      <option value="1">Java</option>
      <option value="2">C++</option>
      <option value="3">C</option>
      <option value="4">Python</option>
      <option value="5">HTML</option>
      <option value="6">CSS</option>
      <option value="7">SQL</option>
      <option value="8">RUBY</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="signup" class="btn btn-success">Sign Up</button>

    <a id="btn-login" href="login.php" class="btn btn-success">Login  </a>
                                 
  </div>
  <div style="margin-top:10px" class="form-group">
  
</div>

</fieldset>
</form>
</body>
</html>