<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
	<?php
		 $products = [
			["name" => "Product 1", "description" => "Product number 1 is now available."],
			["name" => "Product 2", "description" => "Product number 2 is now available."],
			["name" => "Product 3", "description" => "Product number 3 is now available."]
		];
		
		$pageName = $_SERVER['PHP_SELF'];
	
	?>
</head>
<body>
    <?php
   
    
    // Display product links
    for ($i = 0; $i < count($products); $i++) {
        $url = $pageName . "?id=" . $i;
        echo "<a href='$url'>Product " . ($i + 1) . "</a><br>";
    }
    
    echo "<br>Click on a product name for more info.<br><br>";
    
    // Display product info based on id parameter
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            if ($id >= 0 && $id < count($products)) {
                echo "<h1>" . $products[$id]['name'] . "</h1>";
                echo "<p>" . $products[$id]['description'] . "</p>";
            } else {
                echo "Invalid product ID";
            }
        } else {
            echo "No product ID specified";
        }
    }
    ?>
</body>
</html>
