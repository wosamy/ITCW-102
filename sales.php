<!DOCTYPE html>
<html >
<head>

    <title>Sales Data Form</title>
</head>
<body>
    <h1>Sales Data for the Week</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="monday">Monday:</label>
        <input type="number" id="monday" name="sales[monday]" required><br>
        
        <label for="tuesday">Tuesday:</label>
        <input type="number" id="tuesday" name="sales[tuesday]" required><br>
        
        <label for="wednesday">Wednesday:</label>
        <input type="number" id="wednesday" name="sales[wednesday]" required><br>
        
        <label for="thursday">Thursday:</label>
        <input type="number" id="thursday" name="sales[thursday]" required><br>
        
        <label for="friday">Friday:</label>
        <input type="number" id="friday" name="sales[friday]" required><br>
        
        <label for="saturday">Saturday:</label>
        <input type="number" id="saturday" name="sales[saturday]" required><br>
        
        <label for="sunday">Sunday:</label>
        <input type="number" id="sunday" name="sales[sunday]" required><br>
        
        <input type="submit" value="Submit">
    </form>
	
	<?php
	
	function  handleForm(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo  "<h2>Sales Data</h2>";
			// Retrieve sales data from POST request
			$sales = $_POST['sales'];

		  displayHistogram($sales);
		  displayStatistics($sales);  
		}
	}
	
/* Display Histogram */
	
function displayHistogram($sales)
	{ 
	echo"	<h3>Histogram</h3>";
	echo"		<table> ";
	echo"			  <tr>";
	echo"	<td> Day of the week </td>  <td> |</td>";
	echo"	<td>Sales</td>";
	echo"  </tr>";
	foreach ($sales as $day => $value){
			
		echo"<tr>";
		echo"<td> $day </td>";
		echo"<td> |</td>";
		echo"<td> ";
		for ($i=0;$i<$value;$i++) echo "#"; 
		echo" </td> 			  </tr>";
	}

	echo "</table>";
	}

/* Display Min, Max, and Average */

function	displayStatistics($sales)
	{
		// Calculate statistics
    $salesValues = array_values($sales);
    $minSales = min($salesValues);
    $maxSales = max($salesValues);
    $averageSales = array_sum($salesValues) / count($salesValues);

    // Create histogram data
    $days = array_keys($sales);
   echo " <h3>Statistics</h3> ";
   echo " <p>Minimum Sales Day:".  array_search($minSales, $sales) ." (". $minSales .")</p>";
   echo "<p>Maximum Sales Day:".  array_search($maxSales, $sales). " (". $maxSales. ")</p>";
    echo "<p>Average Sales for the Week: ". number_format($averageSales, 2) ."</p> ";
		
	}
	
handleForm();	
?>
 

</body>
</html >