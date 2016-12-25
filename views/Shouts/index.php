<a href="<?php echo ROOT_URL.'shouts/add'?>" class="btn btn-success btn-custom">Add Shout</a>
<?php foreach($viewmodel as $shouts){ ?>
  <div class="well">
    <h3><?php echo $shouts['title'] ?><i><small class="primary">&nbsp Created at <?php echo $shouts['create_date']?></small></i></h3>
    <p><?php echo $shouts['body']?></p>
    <a class="btn btn-primary" href="<?php echo 'http://'.$shouts['link']?>">Learn more</a>
  </div>
<?php } ?>
