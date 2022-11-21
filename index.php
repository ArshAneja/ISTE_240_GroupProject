<?php 
    $page='home';
    $path='./';
    require ($path.'assets/inc/head.php');
?>

<?php
  require ($path.'assets/inc/header-nav.php');
?>

<?php
  // this is the unique content of each page
  // this is where the database stuff will go
  require ($path.'index_content.php');
?>

<?php
  require ($path.'assets/inc/footer.php');
?>