<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Calculator | Ostad APP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <style>
        <?php include "main.css" ?>
        <?php include "bootstrap.min.css?ver=1.2.0"?>
    </style>
</head>

<body id="top">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h2 class="masthead-brand">Grade Calculator | Ostad APP</h2>

                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <form method="post" action="">
                            <div class="form-group row">
                                <label for="subject1" class="col-sm-2 col-form-label col-form-label-lg">Subject 1 &mdash; Physics</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="physicsNo" placeholder="Physics Score" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject2" class="col-sm-2 col-form-label col-form-label-lg">Subject 2 &mdash; Chemistry</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="chemistryNo" placeholder="Chemistry Score" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject3" class="col-sm-2 col-form-label col-form-label-lg">Subject 3 &mdash; Biology</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="biologyNo" placeholder="Biology Score" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-lg">Calculate Results</button>
                                </div>
                                <br/>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-lg">Reset Scores</button>
                                </div>
                            </div>
                            <div id="result">
                                <?php 
                                if($_SERVER["REQUEST_METHOD"]== "POST") {
                                $physicsScore = $_POST["physicsNo"];
                                $chemistryScore = $_POST["chemistryNo"];
                                $biologyScore = $_POST["biologyNo"];
                                $avgNumber= ($physicsScore+$chemistryScore+$biologyScore)/3;
                                if (100>=$avgNumber && 80<=$avgNumber):
                                    echo "You got A+ with ".$avgNumber."% score.";
                                    elseif (80>$avgNumber && 70<=$avgNumber):
                                        echo "You got A- with ".$avgNumber."% score.";
                                    elseif (70>$avgNumber && 60<=$avgNumber):
                                        echo "You got A- with ".$avgNumber."% score.";
                                    elseif (60>$avgNumber && 50<=$avgNumber):
                                        echo "You got B with ".$avgNumber."% score.";
                                    elseif (50>$avgNumber && 40<=$avgNumber):
                                        echo "You got C with ".$avgNumber."% score.";
                                    elseif (40>$avgNumber && 33<=$avgNumber):
                                        echo "You got D with ".$avgNumber."% score.";
                                    elseif (100<$avgNumber):
                                        echo "Invalid Score. Please input numbers smaller than 100.";
                                    else : echo "You got F with ".$avgNumber."% score.";
                                    endif;
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