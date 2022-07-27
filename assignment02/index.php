<?php $stylePath = "design/style.css"; ?>
<!DOCTYPE html>
<html lang="en">
<style>
    img {
    width: 100px;
    position: absolute;
    top: 4.2rem;
    right: 18rem;
    }
    </style>
<head>
    <title>Exercise Variables - PHP FWD Web Scripting 2</title>  
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="BCIT FWD Web Scripting 2: Using PHP and MySQL to develop server side solutions for web development.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta charset="UTF-8">    
    <link real="stylesheet" href="design/normalize-fwd.css">
    <link rel="stylesheet" href="<?php echo $stylePath; ?>">    
</head>
<body>
    <header class= "site-header">
        <h1>Assigment 02</h1>
    </header>
<div class= "wrap">
    <?php
        echo "<h1 class='cool'>Performing operations using date() funtion...</h1>";

      
        if (date("a") == "am") {
            echo "<img src='https://media.istockphoto.com/vectors/cute-flat-sun-icon-vector-id1124567572?k=20&m=1124567572&s=612x612&w=0&h=qA2-ugQviG9uGvpn5-K90sK9w5QZjd3TetULc_5VECc='>";
            echo "<p> Good Morning!</p>";
        } else {
            echo "<img src='https://static.swatch.com/images/product/SO33M100/sa200/SO33M100_sa200_er005.png'>";
            echo "<p> Good afternoon!" . "<br>";
        }
        
        echo "Today is " . date("l, F j, Y") . "<br>";
        $birthdayMonth = "May";
        $birthdayDay = 8;

        if (date('M') == $birthdayMonth and date('j') == $birthdayDay) {
            echo "<p>Happy Birthday!</p>";
        } else {
            echo "<p>It is just another day</p>";
        }


        $quote1 = "The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela";
        $quote2 = "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough. -Oprah Winfrey";
        $quote3 = "Life is what happens when you're busy making other plans. -John Lennon";
        $number = rand(0, 2);

        echo "<h1 class='cool'>Choosing a random quote</h1>";
        if ($number == 0) {
            echo $quote1;
        } else if ($number == 1) {
            echo $quote2;
        } else if ($number == 2) {
            echo $quote3;
        }
        echo "<h1 class='cool'>Performing some text manipulations usings functions</h1>";
        $message = "HELLO, REYHAN TAZE!";
        echo "<br>";
        echo "<h4>Displaying original message</h4>";
        echo $message . "<br>";

        $message = strtolower($message);
        echo "<h4>applying strtolower()</h4>";
        echo $message . "<br>";

        $message = ucfirst($message);
        echo "<h4>applying ucfirst()</h4>";
        echo $message . "<br>";

        $message = ucwords($message);
        echo "<h4>applying ucwords()</h4>";
        echo $message . "<br>";
        ?>
<footer class= "site-footer">
        <p>Copyleft <span>&copy;</span> - PHP FWD Web Scripting 2</p>
</footer>
</div>    
</body>
    </div>
</html>