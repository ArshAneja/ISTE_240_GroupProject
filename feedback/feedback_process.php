<?php
 $visitor         = $_POST['visitor_name'];
//  echo $visitor ."\n";
 $most_effective  = $_POST['mes'];
//  echo $most_effective ."\n";
 $suggest         = $_POST['suggest'];
//  echo $suggest ."\n";
$completed = $_POST['completed'];

$destination_email = "nlg9323@rit.edu,jhm2321@rit.edu,tjp6653@rit.edu,asa1712@rit.edu,RITISTprofessor@gmail.com";
// $destination_email = "nlg9323@rit.edu";
$email_subject = "Project Python  - Group 3";
$email_body = "Visitor name:  $visitor\n";
$email_body .= "Most Effective Seciton: $most_effective\n";
$email_body .= "Suggestions/Requests: $suggest\n";
$email_body .= "Completed Sections: | ";

// loop thru the array and add to email_body
foreach ($completed as $section_option){
    $email_body .= "$section_option |  ";
}



mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n";



?>


<?
// header('location:http://solace.ist.rit.edu/~nlg9323/240/modularSite/thankyou/index.php');
?>
