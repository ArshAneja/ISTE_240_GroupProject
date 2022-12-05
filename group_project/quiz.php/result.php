<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Results:</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }else{
                echo nl2br("Question 1: What is a helper function? Answer: A function that provides useful functionality that is separate from the main program\n\n");
            }
            if ($answer2 == "D") { $totalCorrect++; }else{
                echo nl2br("Question 2: What is it called when a loop executes the block of statements within itself?. Answer: An Iteration\n\n");
            }
            if ($answer3 == "A") { $totalCorrect++; }else{
                echo nl2br("Question 3: What can go wrong when using while loops? Answer: You can create a inner loop\n\n");
            }
            if ($answer4 == "B") { $totalCorrect++; }else{
                echo nl2br("Question 4: What is recursion? Answer: The repetition of code by having a function call itself\n\n");
            }
            if ($answer5 == "D") { $totalCorrect++; }else{
                echo nl2br("Question 5: Why do we use recursion over iteration on occasion? Answer: Recursion is a more natural solution to some problems\n\n");
            }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>