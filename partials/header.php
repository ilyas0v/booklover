<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <style>
  </style>
</head>
<body>

  <div style="z-index:10000000;background: rgba(0, 0, 0, 0.7);" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="margin-top: 100px">
      <div class="modal-content">
        <div class="login-form">
					<p style="color:#3b3f42;font-size:30px;text-align:center;margin-top:0;margin-bottom:25px;">Log in</p>
					<form>
						<input type="text" placeholder="Email" class="form-control" style="margin-bottom:10px;">
						<input type="password" placeholder="Password" class="form-control" style="margin-bottom:10px;">
						<input type="submit" class="btn btn-block" style="background:#fbba42;color:white;" value="Log in">
						<div style="text-align:center;margin-top:25px;">
							<!--<a style="color:#3b3f42;text-decoration:underline;" href="#">Register</a> | -->
							<a style="color:#3b3f42;text-decoration:underline;" href="#">Forgot password?</a>
						</div>
					</form>
				</div>
      </div>
    </div>
  </div>

  <div style="z-index:10000000;padding:20px;background: rgba(0, 0, 0, 0.7);" class="modal fade search-modal" tabindex="-1" role="dialog" aria-labelledby="search-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 100px">
      <div class="modal-content" style="background: transparent;padding:10px 20px;">
        <form class="search-form-simple" action="" method="GET">
          <label class="search-icon">
          <input style="display:none" type="submit">
          <span  style="color:grey" class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </label>
          <input type="text" name="kitabadi" style="height: 40px;font-size:25px;" class="form-control" value="">
        </form>
        <div style="text-align:right;"><a href="#" style="color:#fbba42;font-weight:bold">Advanced search</a></div>
      </div>
    </div>
  </div>

<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img id="birinci_logo" src="images/logo.png" height="30" alt="">
        <img id="ikinci_logo" src="images/responsiv logo.png" height="50" alt="">
      </a>
    </div>
    <div class="collapse navbar-collapse"  id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:white;font-weight:bold;" href="index.php">Discover</a></li>
        <li><a data-toggle="modal" data-target=".bd-example-modal-sm" style="font-weight:bold" href="#">Log in</a></li>
        <!--<li style="color:#ddd;padding:15px 10px 15px 0px">or</li> -->
        <li><a href="signup.php" class="rounded-button">Sign up</a></li>
      </ul>

      <ul class="nav navbar-nav search-on-right">
        <li>
          <a href="#" data-toggle="modal" data-target=".search-modal">
            <svg style="width:17px;fill:#fff;" class="rf-icon rf-icon--search" xmlns="http://www.w3.org/2000/svg" viewBox="5605.991 836 16.958 16.95"><path data-name="Path 150" d="M5612.5 836a6.493 6.493 0 0 1 5.29 10.27l4.88 4.88a1.076 1.076 0 0 1-1.52 1.52l-4.88-4.88a6.5 6.5 0 1 1-3.77-11.79zm0 11a4.5 4.5 0 1 0-4.5-4.5 4.5 4.5 0 0 0 4.5 4.5z"></path></svg>
          </a>
        </li>
      </ul>


      <!--
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    -->
    </div>
  </div>
</nav>
