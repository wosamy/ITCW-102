<!DOCTYPE html>
<html>
<head>
    <title> Date and Time</title>
</head>
<body>
    <h2>Date and Time Practice</h2>

<?php
function Task1(){
echo "<h2>Current Date and Time</h2>";

// Display current date and time
echo "Current Date and Time: " . date("l, F jS Y - g:i:s A") . "<br>";

// Display current Unix timestamp
echo "Unix Timestamp: " . time();
 
echo "<h2>Detailed Date/Time Information</h2>";
}


// Get detailed date/time information
function Task2(){
$date_info = getdate();

// Display components of date/time information
echo "Day of the Week: " . $date_info['weekday'] . "<br>";
echo "Month: " . $date_info['month'] . "<br>";
echo "Day of the Month: " . $date_info['mday'] . "<br>";
echo "Year: " . $date_info['year'] . "<br>";
echo "Hour: " . $date_info['hours'] . "<br>";
echo "Minutes: " . $date_info['minutes'] . "<br>";
echo "Seconds: " . $date_info['seconds'] . "<br>";
 }

function Task3(){
echo "<h2>Formatted Dates and Times</h2>";

// Format dates and times
echo "Today's Date: " . date("Y-m-d") . "<br>";
echo "Current Time: " . date("H:i:s") . "<br>";
echo "Custom Format: " . date("l, F jS Y - g:i A") . "<br>";
 }


function Task4(){
echo "<h2>User Interaction: Display Date/Time Information</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_date = $_POST['user_date'];
    $user_timestamp = strtotime($user_date);
    $user_date_info = getdate($user_timestamp);
    
    echo "User Selected Date: " . date("l, F jS Y", $user_timestamp) . "<br>";
    echo "Day of the Week: " . $user_date_info['weekday'] . "<br>";
    echo "Month: " . $user_date_info['month'] . "<br>";
    echo "Day of the Month: " . $user_date_info['mday'] . "<br>";
    echo "Year: " . $user_date_info['year'] . "<br>";
    echo "Hour: " . $user_date_info['hours'] . "<br>";
    echo "Minutes: " . $user_date_info['minutes'] . "<br>";
    echo "Seconds: " . $user_date_info['seconds'] . "<br>";
}
}
Task1();
Task2();
Task3();
Task4();
?>
<hr> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="user_date">Enter a Date (YYYY-MM-DD): </label>
    <input type="text" id="user_date" name="user_date">
    <input type="submit" value="Submit">
</form>
<hr>

    
</body>
</html>

