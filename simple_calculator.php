<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Calculator | Ostad APP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" />
    </noscript>
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
                        <h2 class="masthead-brand">Simple Calculator | Ostad APP</h2>

                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <form method="post" action="">
                            <div class="form-group row"> 
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="number1" placeholder="Please Type the first number here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="number2" placeholder="Please type the second number here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <select name="calculation" class="form-select" aria-label="Default select">
                                    <option selected>Please select an option from here</option>
                                    <option value="add">Addition</option>
                                    <option value="substract">Substraction</option>
                                    <option value="multiply">Multiplication</option>
                                    <option value="divide">Division</option>
                            </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-lg">Calculate</button>
                                </div>
                                <br/>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-lg">Reset Numbers</button>
                                </div>
                            </div>
                            <div id="result">
                            <?php 
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $numOne = $_POST["number1"];
                                $numTwo = $_POST["number2"];
                                $calculate = $_POST["calculation"];

                                if ("add"== $calculate) {
                                    $result = $numOne + $numTwo;
                                    echo "The result is $result.";
                                } elseif ("substract"==$calculate){
                                    $result = $numOne - $numTwo;
                                    echo "The result is $result.";
                                } elseif ("multiply"==$calculate){
                                    $result = $numOne * $numTwo;
                                    echo "The result is $result.";
                                } elseif ("divide"==$calculate) {
                                    if($numTwo!=0){
                                        $result=$numOne/$numTwo; 
                                        echo "The result is $result.";
                                    } else {
                                        echo "The result is &#8734.";
                                    }
                                } else {echo "This is not a valid number. Please select the right operator from the menu.";}
                            }
            ?>

          </div>
                        </form>
                    </div>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <p>&copy; Developed By <a href="https://ashraf.life/" target="_blank">Ashraf Ahmed</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
        <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
        <script src="scripts/main.js?ver=1.2.0"></script>
</body>

</html>