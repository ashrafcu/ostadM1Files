<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even &amp; Odd Number Checker | Ostad APP</title>
    <style>
        <?php include "main.css"; ?>
        <?php include "bootstrap.min.css?ver=1.2.0"; ?>
    </style>
</head>

<body id="top">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h2 class="masthead-brand">Even &amp; Odd Number Checker | Ostad APP</h2>
                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <form method="post" action="">
                            <input type="number" name="numberData" placeholder="Type a Number Here" required><br/>
                            
                                <button type="submit">Is it an even or odd number?</button> <br/></br/>
                                <button type="reset">Reset the Number</button>
                        </form>
                        
                        <div id="result">
                        <?php 
                        if($_SERVER["REQUEST_METHOD"]== "POST") {
                            $numberData = $_POST["numberData"];
                            $numberChecker= (0==$numberData % 2) ? "$numberData is an even number.":"$numberData is an odd number.";
                            echo $numberChecker;
                        }
                        
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
    <script src="jquery.slim.min.js?ver=1.2.0"></script>
    <script src="bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="main.js?ver=1.2.0"></script>
    </body>
</html>