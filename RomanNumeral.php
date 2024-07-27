<!DOCTYPE html>
<html>
<?php
/*
Display the Roman numeral equivalent of a number.
*/
define(TITLE,"Roman Numerals" );
define(MIN, 1);
const  MAX=10;
?>
<body>
<h1> <?= TITLE?> </h1>

<?php

# Input number to convert to Roman numeral
$number = 7; # Replace with any number from 1 to 10

// Check if the number is within the valid range (1 to 10)
if ($number < MIN || $number > MAX) {
    echo "Error: Number must be between 1 and 10.";
} else {
    // Initialize an empty string to store the Roman numeral
    $romanNumeral = '';

    // Convert to Roman numeral using switch statement
    switch ($number) {
        case 10:
            $romanNumeral = 'X';
            break;
        case 9:
            $romanNumeral = 'IX';
            break;
        case 8:
            $romanNumeral = 'VIII';
            break;
        case 7:
            $romanNumeral = 'VII';
            break;
        case 6:
            $romanNumeral = 'VI';
            break;
        case 5:
            $romanNumeral = 'V';
            break;
        case 4:
            $romanNumeral = 'IV';
            break;
        case 3:
            $romanNumeral = 'III';
            break;
        case 2:
            $romanNumeral = 'II';
            break;
        case 1:
            $romanNumeral = 'I';
            break;
    }

    // Output the Roman numeral
    echo "Roman numeral for {$number} is {$romanNumeral}";
}
?>

</body>
</html>

