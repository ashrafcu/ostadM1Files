<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Information | Ostad APP</title>
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
                        <h2 class="masthead-brand">Personal Information | Ostad APP</h2>
                    </div>
                </div>
                <div class="inner cover">
                    <div class="container">
                        <div class="personal-info-text">
                        <?php
                        $name = "Ashraf Ahmed";
                        $age = 36;
                        $country = "Bangladesh";
                        $profession = "teacher";
                        $briefIntro = "I am from Moulvibazar Sadar, Moulvibazar. I live with my parents. I am fond of online contents. I write blogs using WordPress CMS and also edit videos. I use online contents to a great extent to connect with my students.";

                        echo "My name is {$name} and I am {$age} at the moment. I am from {$country} and I love my country a lot. I am a {$profession} now but I fell in love with codes years ago.";
                        echo PHP_EOL;
                        echo "\n";
                        echo "$briefIntro";
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