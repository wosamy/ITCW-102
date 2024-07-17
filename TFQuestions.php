<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
	<?php
	/*In this practice, you will write a simple online test with some true/false questions. Once the user submits the answers, they will immediately verify the result.
*/
		 $questions = [
			["Question" => "PHP is a server-side scripting language. ", "option1" => "True", "option2" => "False", "answer" => "True"],
			["Question" => " PHP files typically have a .php extension. ", "option1" => "True", "option2" => "False", "answer" => "True"],
			["Question" => " PHP comments can be marked using % at the beginning of a line. ", "option1" => "True", "option2" => "False", "answer" => "False"]
		];
		 
	?>
	
</head>
<body>
<h1> 	True or False Questions </h>
    <?php
	 function displayQuestions($questions) {
        echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>";
        
        // Display questions
        for ($i = 0; $i < count($questions); $i++) {
            echo "<label for='q$i'>" . ($i + 1) . ". " . $questions[$i]["Question"] . "</label><br>";
            echo "<select id='q$i' name='q$i'>";
            echo "<option value=''>Select answer</option>";
            echo "<option value='option1'>" . $questions[$i]["option1"] . "</option>";
            echo "<option value='option2'>" . $questions[$i]["option2"] . "</option>";
            echo "</select><br>";
        }
        
        echo "<input type='submit'>";
        echo "</form>";
    }
	
	function displayAnswers() 
	{
		$questions=$GLOBALS["questions"];
		 // Display answers based on user selection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Answers:</h2>";
        for ($i = 0; $i < count($questions); $i++) {
            $answer =$questions[$i]["answer"];
			$userAnswer=  $_POST["q$i"]!=''? $questions[$i][$_POST["q$i"]] : "No answer selected";
            echo "<p>" . ($i + 1) . ". " . $questions[$i]["Question"] . " Answer: " . $answer . "</p>";
			echo "User answer: ".$userAnswer ;
        }
    }
	}
	?>
	
 
	<?php
	displayQuestions($questions);
    displayAnswers($questions);
    ?>
</body>
</html>
