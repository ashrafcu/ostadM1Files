<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comparison Tool</title>
    <style>
        <?php include "css/main.css" ?>
        <?php include "css/bootstrap.min.css?ver=1.2.0" ?>
        <?php include "css/main.css?ver=1.2.0" ?>
    </style>
</head>

<body id="top">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">Comparison Tool</h3>
                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <form method="post" action="">
                            <input type="number" name="numberOne" placeholder="Type First Number" required><br/>
                            <input type="number" name="numberTwo" placeholder="Type Second Number" required><br/>
                            <button type="submit">Which one is larger?</button>
                        </form>
                        <div id="result">
                        <?php 
                        if($_SERVER["REQUEST_METHOD"]== "POST") {
                            $numberOne = $_POST["numberOne"];
                            $numberTwo= $_POST["numberTwo"];
                            $largerNumber= ($numberOne>$numberTwo) ? "The larger number is $numberOne": (($numberOne<$numberTwo)? "The larger number is $numberTwo":"The numbers are equal.");
                        }
                        echo $largerNumber;
                        ?>
                        </div>
                    </div>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <p>&copy; Developed By <a href="https://ashraf.life/" target="_blank">Ashraf Ahmed</a>.</p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>