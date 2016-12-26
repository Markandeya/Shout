<?php Messages::dispMsg() ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Write a !Shout</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="<?php echo ROOT_URL.'shouts/add' ?>">
      <div class="form-group">
        <label>title</label><input type="text" name="title" class="form-control">
        <label>body</label><textarea name="body" class="form-control"></textarea>
        <label>link</label><input type="text" name="link" class="form-control">
      </div>
      <input type="submit" value="Submit" name="submit" class="btn btn-primary">
      <a class="btn btn-danger" name="cancel" href="<?php echo ROOT_URL.'shouts' ?>">Cancel</a>
    </form>
  </div>
</div>
