<?php

require_once('../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
  exit;
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

  <div class="salamander new">
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="salamander_name" value=""></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Salamander">
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>