<?php

require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id'];
$salamander_name = '';

if(is_post_request()) {
  // Handle form values sent by new.php
  
  $menu_name = $_POST['salamander_name'] ?? '';
  
  echo "Salamander Name: " . $menu_name . "<br>";
  
} else {
  // redirect_to(url_for('/salamanders/new.php'));
}
?>

<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <style>
    dd {
      margin: 0;
    }

    dl {
      margin-bottom: 0;
    }
  </style>

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander edit">
    <h1>Edit Salamander</h1>

    <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="salamander_name" value="<?php echo $salamander_name; ?>"></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Salamander">
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>