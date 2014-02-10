<?php require_once ( "auth/includes/connect.php"); ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Result management system.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
      padding-top: 50px;
      padding-bottom: 20px;
    }
    </style>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="col-md-4" style="border-right: 1px solid #b8b8b8">
                <form id="form_login" class="form" role="form" name="login" action="auth/includes/process.php" method="post">
                    <h3>
                        <u>Student Login</u>
                    </h3>


                    <p>Epnum:
                        <br>
                        <input type="text" name="epnum" class="form-control" />
                    </p>


                    <p>Password:
                        <br>
                        <input type="password" name="password" class="form-control" />
                    </p>

                    <button type="submit" name="login" class="btn pull-right">Sign in</button>
                </form>
            </div>
            <div class="col-md-4" style="border-right: 1px solid #b8b8b8">
                <form class="form" role="form">
                    <h3>
                        <u>Faculty/Admin Login</u>
                    </h3>


                    <p>Username:
                        <br>
                        <select class="form-control">
                            <option value="admin">Administrator</option>
                            <option value="faculty">Faculty</option>
                        </select>
                    </p>


                    <p>Password:
                        <br>
                        <input type="password" class="form-control" />
                    </p>

                    <button type="submit" class="btn pull-right">Sign in</button>
                </form>
            </div>
            <div class="col-md-4">

                <p>
                    <h4>
                        <u>Announcement #1</u>
                    </h4>
                    <blockquote>Portal now under development.
                        <small>Admin</small>
                    </blockquote>
                </p>

            </div>
            <div class="col-md-4">
                <div style="border-bottom: 1px solid #b8b8b8"></div>
            </div>
            <div class="col-md-4">

                <p>
                    <h4>
                        <u>Announcement #2</u>
                    </h4>
                    <blockquote>Setting up Envoirment for developing portal.
                        <small>Admin</small>
                    </blockquote>
                </p>

            </div>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">

                <p>
                    <h4>
                        <u>Announcement #2</u>
                    </h4>
                    <blockquote>Setting up Envoirment for developing portal.
                        <small>Admin</small>
                    </blockquote>
                </p>

            </div>
            <div class="col-md-4">

                <p>
                    <h4>
                        <u>Announcement #2</u>
                    </h4>
                    <blockquote>Setting up Envoirment for developing portal.
                        <small>Admin</small>
                    </blockquote>
                </p>

            </div>
            <div class="col-md-4">

                <p>
                    <h4>
                        <u>Announcement #2</u>
                    </h4>
                    <blockquote>Setting up Envoirment for developing portal.
                        <small>Admin</small>
                    </blockquote>
                </p>

            </div>
        </div>

        <hr>

        <footer>
            <p>© Company 2014</p>
        </footer>
    </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-new.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
