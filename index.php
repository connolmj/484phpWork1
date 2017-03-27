<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Wildlife Center of Virginia Volunteers</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Add Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>





<link rel="stylesheet" media="screen" href="css/style.css" />

</head>
<body class="login">
    <div class="login-box main-content panel panel-default">
      <header class="panel-heading"><img src="../streamlined/images/logo_small.png" alt="Wildlife Logo"></header>
    	<section class="panel-body">

<!--clock in form-->
<form action="clockin.php" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Username" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-inline"">
              <button  class="btn btn-default col-sm-3 col-sm-offset-3" type="submit">Clock In</button>
              <button  class="btn btn-default" type="submit">Clock Out</button>
            </div>
          </div>
</form>
<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Log in</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <form id="form" action="profile.php" method="post" class="form-horizontal">
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Username" />
    				</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="password" class="form-control" value="" name="password" required="required" placeholder="Password" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-2 col-sm-offset-4">
      				<button class="btn btn-default" type="submit">Login</button>
      			</div>
      		</div>
</form>
                    
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Transporter</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <form id="form" action="transporter.php" method="post" class="form-horizontal">
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Username" />
    				</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="hours" class="form-control" value="" name="password" required="required" placeholder="Hours" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="mileage" class="form-control" value="" name="password" required="required" placeholder="Mileage" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-2 col-sm-offset-4">
      				<button class="btn btn-default" type="submit">Submit</button>
      			</div>
      		</div>
</form>
                    
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Apply</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                <form id="form" action="forms.php" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Email Address" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-4">
              <button class="btn btn-default" type="submit">Apply</button>
            </div>
          </div>
</form>    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
    		
    		
    	</section>
    </div>
</body>
</html>