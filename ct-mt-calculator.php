<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nodi Thai Aluminium | False Ceiling Calculator</title>
        <style>
        <?php include "main.css"; ?>
        <?php include "bootstrap.min.css"; ?>
    </style>
</head>

<body id="top">
<?php 
function getTotalArea (int|float|null $widthArea=0, int|float|null $lengthArea=0){
    $totalArea=ceil($widthArea*$lengthArea);
    return "The total area of the false ceiling is " .$totalArea. " sq. ft.";
}

function getNoSquares(int|float|null $widthArea, int|float|null $lengthArea,int|float|null $squareSize) {
    $noOfSquares=floor(($lengthArea/$squareSize)*($widthArea/$squareSize));
    return "Total no. of boards required: " .$noOfSquares;

}
?>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h2 class="masthead-brand">Nodi Thai Aluminium | False Ceiling Calculator</h2>

                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        
                            
                            <div id="result">

                            <?php 
                            $width=12; $height=16; $crossT=4;
                            echo getTotalArea($width,$height);
                            echo "\n \n";
                            echo getNoSquares($width,$height,$crossT);
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
        <script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
        <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
        <script src="scripts/main.js?ver=1.2.0"></script>
</body>

</html>