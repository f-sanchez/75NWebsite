<!DOCTYPE html>
<html ng-app="">
<head>
    <title>
       CPE 75N Web Development
    </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
    <div class="container">
       <div class="row header">
            <div class="col col-md-offset-2 col-md-1 col-xs-2">
                <div class="header-navbar">
                    <!-- <img class="img-small" src="img/title.png"> -->
                </div>
            </div>
        </div>

       <div class="row header-logo">
            <img src="img/title.png">
            <!-- <img class="img__logo" src="img/logo.png"> -->
        </div>
        
        <hr class="col-md-12 hr-top">
        <div class="col col-md-offset-3 col-md-8">
            <div class="col col-md-2 nav__item"><a href="index.html">Home</a></div>
            <div class="col col-md-2 nav__item"><a href="about.html">About</a></div>
            <div class="col col-md-2 nav__item"><a href="schedule.html">Schedule</a></div>
            <div class="col col-md-2 nav__item"><a href="portfolio.html">Portfolio</a></div>
        </div>    
        <hr class="col-md-12 hr-bottom">

        <div class="col col-md-offset-2 col-md-8 container-table">
            <div>
                <?php
                $cols = $_POST["row"];
                $rows = $_POST["col"];
                
                echo "<table border=\"1\">";

                if(($cols != 0)&&($rows !=0)){
                    for ($r =1; $r <= $cols; $r++){
                    echo '<tr>';
                    for ($c = 1; $c <= $rows; $c++){
                        if(($c%2==0 && $r%2==0) || ($c%2>0 && $r%2>0)){
                            echo '<td class="colored">' .$c*$r.'</td>';
                        } else{
                            echo '<td class="mtable">' .$c*$r.'</td>';
                        }
                    }
                    echo '</tr>';
                    }
                }
                echo"</table>";
              ?>
            </div>
            <div class="input-gap">
                <button class="btn btn-dark-large"><a class="btn-redirect" href="activity1.html">Another table?</a></button>
                <button class="btn btn-dark-large"><a class="btn-redirect" href="activity2.html">Next Activity --></a></button>
            </div>
        </div>
    </div>
    
    <div class="footer">
      &copy; 2017 All rights reserved. Inspired by <b>CPE 75N</b>
    </div>

    <script src="js/angular.min.js"></script>
</body>
</html>
