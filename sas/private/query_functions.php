<?php

  function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
?>