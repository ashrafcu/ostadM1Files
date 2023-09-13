<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comparison Tool | Ostad APP</title>
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
                        <h2 class="masthead-brand">Comparison Tool | Ostad APP</h2>
                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <form method="post" action="">
                            <input type="number" name="numberOne" placeholder="Please Type the First Number" required><br/>
                            <input type="number" name="numberTwo" placeholder="Please Type the Second Number" required><br/>
                                <button type="submit">Which one is larger?</button> <br/></br/>
                                <button type="reset" class="btn btn-warning">Change the Numbers</button>
                        </form>
                        <div id="result">
                        <?php 
                        if($_SERVER["REQUEST_METHOD"]== "POST") {
                            $numberOne = $_POST["numberOne"];
                            $numberTwo= $_POST["numberTwo"];
                            $largerNumber= ($numberOne>$numberTwo) ? "The larger number is $numberOne.": (($numberOne<$numberTwo)? "The larger number is $numberTwo.":"The numbers are equal.");
                            echo $largerNumber;
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