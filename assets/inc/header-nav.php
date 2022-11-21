<body>
<div class="no_foot">

<header>
            
        <a href="index.php"><img class="nav_pic" src="assets/img/logo.png" alt="project python logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="/vocabulary/">Vocabulary</a></li>
                    <li><a href="/data_types">Data Types</a></li>
                    <li><a href="/functions/">Functions</a></li>
                    <li><a href="/file_reading/">File Reading</a></li>
                    <li><a href="/feedback/">Feedback</a></li>
                </ul>
            </nav>
</header>


<!-- Simple Nav (from w3schools)-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">

    <a href="index.php"><img class="nav_pic" src="assets/img/logo.png" alt="project python logo"></a> 
    <a href="index.php" class="active">Home</a>
    <a href="/vocabulary/">Vocabulary</a>
    <a href="/data_types">Data Types</a>
    <a href="/functions/">Functions</a>
    <a href="/file_reading/">File Reading</a>
    <a href="/feedback/">Feedback</a>
    

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="page_content">