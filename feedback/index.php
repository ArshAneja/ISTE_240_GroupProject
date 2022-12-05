<?php 
    $page='feedback'; // change name and path for each page
    $path='./../';
    require ($path.'assets/inc/head.php');
?>

<?php
  require ($path.'assets/inc/header-nav.php');
?>

<?php
  // this is the unique content of each page
  // this is where the database stuff will go
  // the conents of index_content will need to go to the database
  // require ($path.'feedback.php');
  require('feedback.php');
?>


<?php 
  // database stuff

  // require $path.'../../../dbConnect.inc';           
  // $sql = "SELECT content FROM modularSite where page='$page'";
  // $result = $mysqli->query($sql);

  // if($result->num_rows > 0){
  //   //output the data for each row
  //   while ($row = $result->FETCH_ASSOC()) {
  //     echo $row['content'];
  //   }
  // }else{
  //   echo "0 results, did something wrong!";
  // }
?>


<?php
  require ($path.'assets/inc/footer.php');
  // mysqli_close($mysqli);
?>