<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = find_salamander_by_id($id);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php'); 

?>



<div class="subject show">
  <h2>Salamander Details</h2>
  <p><b>ID:</b><?= h($id); ?> </p>
  
  <div class="attributes">
      <p>
        <strong>Name:</strong><?php echo h($salamander['name']); ?>
      </p>
      <p>
        <strong>Habitat:</strong><br>
        <?php echo h($salamander['habitat']); ?>
      </p>
      <p>
        <strong>Description:</strong><br>
        <?php echo h($salamander['description']); ?>
      </p>
    </div>
    
  </div>
  <p>
    <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a>
  </p>
  
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
