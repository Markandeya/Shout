<!DOCTYPE html>
<html>
  <head>
    <title>!Shouts &reg;</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>assets/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">!Shouts &reg;</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL.'shouts'?>">Shouts</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])): ?>
              <li></li>
              <li><a href="<?php echo ROOT_URL?>"><?php echo 'Welcome '.$_SESSION['user_data']['name'] ?></a></li>
              <li><a href="<?php echo ROOT_URL.'users/logout'?>">Logout</a></li>
            <?php else : ?>
              <li><a href="<?php echo ROOT_URL.'users/login'?>">Login</a></li>
              <li><a href="<?php echo ROOT_URL.'users/register'?>">Register</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>
  <div class="container">

      <div class="row">
        <?php require($view); ?>
      </div>
      <footer>
        <p>Copyright &copy; 2017. All rights reserved.</p>
  </div><!-- /.container -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
