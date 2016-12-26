<?php Messages::dispMsg() ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">!Signup here</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="<?php echo ROOT_URL.'users/register' ?>">
      <div class="form-group">
        <label>Name</label><input type="text" name="name" class="form-control">
        <label>Email</label><input type="text" name="email" class="form-control">
        <label>Password</label><input type="password" name="password" class="form-control">
      </div>
      <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
  </div>
</div>
