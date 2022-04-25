<?php require_once('../../private/initialize.php'); 
$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
}

$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

  <div class="subject new">
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post">
      <label for="name">
        <p>Name:<br>
        <input type="text" name="name" value></p>
      </label>

      <label for="habitat">
        <p>Habitat: 
          <br>
          <textarea rows="4" cols="50" name="habitat" value=""></textarea>
        </p>
      </label>

      <label for="description">
        <p>Description: 
          <br>
          <textarea rows="4" cols="50" name="description" value=""></textarea>
        </p>
      </label>

      <label for="submit">
        <p><input type="submit" value="Create Salamander"></p>
      </label>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
