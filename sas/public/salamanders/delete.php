
<?php 
require_once('../../private/initialize.php'); 

if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';
if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName<br>";
} 

$pageTitle = "Delete";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Delete Salamander</h1>
<!-- add label -->
<form action="<?= url_for('salamanders/delete.php?id=' . h(u($id))); ?>" method="post">
    <label for="salamanderName">Name</label><br>
    <input type="text" name="salamanderName" value="<?= $salamanderName; ?>"/><br>
    <input type="submit" value="Delete Salamander"/>
</form>

 <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
