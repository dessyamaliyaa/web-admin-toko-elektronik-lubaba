<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo.png" class="img-circle" width=80 height=80>
				<h3><b>Lubaba</b></h3><h4><span>electronic</font></h4>
            </div>
        </div>
        <div class="row ">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <div class="panel-body">
                                <form id="form1" role="form" name="form1" method="POST" action="proses-login.php">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " required="required">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" required="required">
                                        </div>
										<div class="form-group">
                                           
                                        </div>
                                     
                                     <div align="right"><button class="btn btn-primary" type="submit">Login</button></div>
                                    <hr />
                                    </form>
                            </div>
                        </div>
        </div>
    </div>
</body>
</html>
