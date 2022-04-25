<?php

require_once('../../private/initialize.php');
if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$salamander = find_salamander_by_id($id);


if(is_post_request()) {

  // Handle form values sent by new.php
  $salamander = [];

  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $id));
} else {
  
  $salamander = find_salamander_by_id($id);
}

?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <div class="salamander edit">

    <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <label for="name">
        <p>Name<br>
          <input type="text" name="name" value="<?php echo h($salamander['name']); ?>">
        </p>
      </label>
      <label for="habitat">
        <p>
          Habitat: <br>
          <textarea rows="4" cols="50" name="habitat">
            <?php echo h($salamander['habitat']); ?>
          </textarea>
        </p>
      </label>
      <label for="description">
        <p>
          Description: <br>
          <textarea rows="4" cols="50" name="description">
            <?php echo h($salamander['description']); ?>
          </textarea>
        </p>
      </label>
      <label for="submit">
        <p>
          <input type="submit" value="Edit Salamander">
        </p>
      </label>
      <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
    </form>

  </div>

</div>
