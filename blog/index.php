<?php
$DBpath = '../../../../';
require $DBpath.'dbConnect.inc';

if($mysqli) {
    if (!empty($_POST['name']) && !empty($_POST['message'])){
        $stmt = $mysqli->prepare("INSERT INTO projectcomments (name,message) VALUES (?,?)");
        $stmt->bind_param("ss",$_POST['name'],$_POST['message']);
        $stmt->execute();
        $stmt->close();
    }

        $sql = 'SELECT name, message FROM projectcomments';
        $res = $mysqli->query($sql);
        if($res){
            while($rowholder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $records[] = $rowholder;
            }
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="http://solace.ist.rit.edu/~nlg9323/240/groupProj/assets/css/styles.css">

    <title>Comments</title>
<style> h1 {
    padding: 10px;
    margin-top: 0;
}

h3{
    animation: 3s linear 0s 1 slideInFromLeft,  blinker 3s linear infinite;
    padding: 10px;
    border: #BCD637 solid 5px;
    border-radius: 2em;
    margin: 10px;
}
   /***************************************  
    animation must be 3 seconds
    animation must be linear 
    animation must slideInFromLeft;
   ****************************************/

@keyframes slideInFromLeft {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(0);
    }
}

a{
    color: #BCD637;
    text-decoration: none;
}

a:hover{
    color: #BCD637;
}

form{border: none;}


/* This makes the link to home blink */
/* .blink_me {
  animation: blinker 1s linear infinite;
} */

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>
</head>
<div class="container">


<h1>Post to the Blog:</h1>

    <div id="list">
    <ul>
    <?php
    foreach($records as $this_row){
        echo '<li>' .$this_row['name'] . " : " . $this_row['message'].'</li>';
    }

    ?>
    </ul>
    </div>
    <!-- display the posts here -->

    <hr>
    <form action="index.php" method="POST">
        <h2>Post your comment:</h2>

        Name:
        <input type="text" id="name" name="name" placeholder="Enter your name">
         
        <br><br>

        <textarea name="message" id="message" cols="90" rows="10" placeholder="Enter Comment"></textarea>
        <br>
        
        <input type="submit" value="Add to Blog">

    </form>
 <h3 class="blink_me"><a href="/~nlg9323/240/groupProj/">Thanks for posting! Click this text to return to the home page.</a></h3>
</div> <!-- end of container -->
    
    <footer>
        <a href="#" target="_blank"><img src="./assets/img/RESIZED_HTML5_Badge.png" alt="html_badge_for_validation"></a>
        <a href="#" target="_blank"><img src="./assets/img/RESIZED_CSS3_logo.png" alt="css_logo_for_validation"></a>
    </footer>
</body>