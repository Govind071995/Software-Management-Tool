
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
<?php
include("header.php");
?>

<div id="page-wrapper">
<form class="form-horizontal">
<fieldset>
<legend>Search person with required skills</legend>
<?php
include("sidepanel.php");
?>
<!-- Enter Your Full Name-->
<div class="form-group">
  <label class="col-md-4 control-label" for="task">Enter Task Type</label>  
  <div class="col-md-4">
  <input id="task" name="task" type="text" placeholder="Enter Task Type" class="form-control input-md" required=""> 
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
</fieldset>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="search"></label>
  <div class="col-md-4">
    <button id="search" name="search" class="btn btn-success" href="#" onClick="$('#searchbox').hide(); $('#staffbox').show()">Search</button>

    <div id="staffbox" style="display:none; margin-top:50px" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Members With required skills</div>
                        </div>  
                        <div class="panel-body" >
                          <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
            </tbody>
        </table>
    </div>
                         </div>     
                      </form>
                      </div>>
</body>
</html>