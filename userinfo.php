<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "typingchallange";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Typing Authentication</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">User Information</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                <div class="col-md-8">
                    <h1>User Information</h1>
                        <form class="form-horizontal">
                        
                            <!-- name -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="name" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <!-- /.name -->

                            <!-- email -->
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                              <!-- /.email -->

                               
                            <!-- phone -->
                            <div class="form-group">
                                <label for="inputTel" class="col-sm-2 control-label">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="inputTel" placeholder="Telephone">
                                </div>
                            </div>
                            <!-- /.phone -->

                            <!-- gender -->
                            <div class="form-group">
                                <label for="inputGender" class="col-sm-2 control-label">Are you</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="gender" value="male"> Male <br>
                                    <input type="radio" name="gender" value="female"> Female <br> 
                                </div>
                            </div>
                            <!-- /.gender -->

                            <!-- age -->
                            <div class="form-group">
                                <label for="inputAge" class="col-sm-2 control-label">You are</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="age" value="male"> 10-18 <br>
                                    <input type="radio" name="age" value="male"> 19-24 <br>
                                    <input type="radio" name="age" value="male"> 25-40 <br>
                                    <input type="radio" name="age" value="male"> 41-65 <br>
                                </div>
                            </div>
                            <!-- /.age -->

                            <!-- button -->
                            <div class="col-sm-offset-2 col-sm-10">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    <button action="typing.html" type="submit" class="btn btn-default">Submit</button>
                            </div>
                            <!-- /.button -->                          
                        
                        </form>
                        <!-- /.form -->
                
                </div>
                <!-- /.class="col-md-8" -->



        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
