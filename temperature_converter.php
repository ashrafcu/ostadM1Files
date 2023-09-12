<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperature Converter</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <style>
    <?php include "main.css" ?>
    <?php //include "bootstrap.min.css?ver=1.2.0" ?>
    <?php //include "main.css?ver=1.2.0" ?>
    </style>
  </head>
  <body id="top">
  <div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h2 class="masthead-brand">Temperature Converter</h2>
          
        </div>
      </div>      
      <div class="inner cover">
        <div class="container">
        <form method="post" action="">
          <input type="number" name="tempRecord" placeholder="Please Put in the Temperature" required><br/>
          <select name="operation">
            <option value="celsius">Celsius &rarr; Fahrenheit</option>
            <option value="fahrenheit">Fahrenheit &rarr; Celsius</option>
          </select><br/>
          <button type="submit">Convert</button><br/><br/>
          <button type="reset">Input Again</button>
          <div id="result">
            <?php 
            if($_SERVER["REQUEST_METHOD"]== "POST") {
              $tempRecord = $_POST["tempRecord"];
              $operation = $_POST["operation"];

              switch ($operation) {
                case "celsius" : $result = sprintf("%.2f",(($tempRecord*(9/5))+32));
                echo "Temperature in Fahrenheit Scale is {$result}&deg;F";
                break;
                case "fahrenheit" : $result = sprintf("%.2f",(($tempRecord-32)*(5/9)));
                echo "Temperature in Celsius Scale is {$result}&deg;C";
                break;
            }
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