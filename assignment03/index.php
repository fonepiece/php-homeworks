
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment 3</title>
  
    <link rel="stylesheet" href="style.css" />
</head>

<body>   
<div class = "wrap">
<section class = first-part>
<h1>Part 1</h1>
<?php
    require_once("assignment03-data.php");
    echo "<p>$targetName</p>";
    $lower = strtolower($targetName);
    $target = ucfirst($lower);
    echo "<p>$target</p>";


    echo "<p>Adding 3 students to the array</p>";
    array_push($students, $targetName, "Mila", "Armin");

    $count = count($students);
    echo "<p>There are $count students in the array</p>";

    echo "<ul>";
    $isFound = false;
    foreach($students as $student){
        $normalizedName = strtolower($student);
        $normalizedName = ucfirst($normalizedName);
        if ($normalizedName == $target) {
            echo "<li class='my-name'>$normalizedName</li>";
            $isFound = true;
        } else {
            echo "<li>$normalizedName</li>";
        }
    }
    echo "</ul>";

    if ($isFound) {
        echo "<p>Target $target is found</p>";
    } else {
        echo "<p>Target $target is not found</p>";
    }
?>
</section>
<section>
<h1>Part 2</h1>
<?php
    echo "<p>Adding a new country to the array</p>";
    $capitalCities["Turkey"] = "Ankara";

    echo "<ul>";
    foreach($capitalCities as $country => $capital){
        echo "<li>The capital of $country is $capital</li>";
    }
    echo "</ul>";
?>
</section>
<section>
<h1>Part 3</h1>
<?php
    echo "<ul>";
    $sum = 0;
    $evenCount = 0;
    $oddCount = 0;

    // [2,4,6]
    foreach($collectionOfNumbers as $number){
        echo "<li>$number</li>";
        $sum += $number;

        if ($number != 0) {
            if ($number % 2 == 0) {
                $evenCount += 1;
            } else {
                $oddCount += 1;
            }
        }
    }
    echo "</ul>";

    echo "<p>The sum of all the numbers is $sum</p>";
    echo "<p>There are $evenCount even numbers</p>";
    echo "<p>There are $oddCount odd numbers</p>";

    foreach($collectionOfNumbers as $number){
        if ($number > 0) {
            echo "<p>counting down from $number</p>";
            echo "<ul>";
            for($index = $number; $index >= 0; $index--){
                echo "<li>$index</li>";
            }
            echo "</ul>";
        } else if ($number < 0) {
            echo "<p>counting up from $number</p>";
            echo "<ul>";
            for($index = $number; $index <= 0; $index++){
                echo "<li>$index</li>";
            }
            echo "</ul>";
        } else {
            echo "No counting required for $number";
        }
    }
    
?>
</section>
</div>
</body>
</html>