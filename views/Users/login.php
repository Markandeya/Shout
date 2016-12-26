<?php Messages::dispMsg() ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">!Login here</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="<?php echo ROOT_URL.'users/login' ?>">
      <div class="form-group">
        <label>Email</label><input type="text" name="email" class="form-control">
        <label>Password</label><input type="password" name="password" class="form-control">
      </div>
      <input type="submit" value="Login" name="submit" class="btn btn-primary">
    </form>
  </div>
</div>
