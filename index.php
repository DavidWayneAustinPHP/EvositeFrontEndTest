<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="frontPageStyling.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Front End Test</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header nav-logoimage">
                    <a class="nav-item" href="#" >
                        <img src="images/logoImage.jpg" alt="Logo Image">
                    </a>
                </div>
                <div class="nav navbar-nav navbar-right nav-twiterlinks-items">
                    <a class="nav-item" href="#" >
                        <img src="images/twiterLinksImage.jpg" alt="Twiter Image">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right nav-menu-items">
                    <li><a href="#home">Home</a></li>
                    <li class="dropdown"><a class="dropbtn" href="#">About Us</a>
                        <div class="dropdown-content">
                            <a href="#"><img src="images/FlyOutTwoColumnMenu.jpg" alt="Logo Image"></a>
                        </div></li>
                    <li><a href="#">Information</a></li>
                    <li><a href="#">Parents</a></li>
                    <li><a href="#">News & Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <img class="img-responsive" src="images/firstImage.jpg" alt="First Image" > 
            <button onclick="scrollUserDown()" class="btn-block">
                <img class="img-responsive" src="images/ScrollDownArrow.jpg"></button>
        </div>

        <img class="img-responsive" src="images/secondImage.jpg" alt="Second Image" class="responsive">
        
        <div class="container">
            <h1><b>News</b></h1>  
            <div id="thirdImage" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators " >
                    <li data-target="#thirdImage" data-slide-to="0" class="active"></li>
                    <li data-target="#thirdImage" data-slide-to="1"></li>
                    <li data-target="#thirdImage" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" style="background-color: orange;">
                    <div class="item active">
                        <img class="carsousel-news-images" src="images/scrollArticlePage1.jpg" alt="MichelleObama">
                    </div>

                    <div class="item">
                        <img class="carsousel-news-images" src="images/scrollArticlePage2.jpg" alt="JackPetchy">
                    </div>

                    <div class="item">
                        <img class="carsousel-news-images" src="images/scrollArticlePage3.jpg" alt="RockChallenge">
                    </div>
                </div>

                <a class="left carousel-control" href="#thirdImage" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">RightScroll</span>
                </a>
                <a class="right carousel-control" href="#thirdImage" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Left Scroll</span>
                </a>
            </div>
        </div>

        <img class="img-responsive" src="images/fourthImage.jpg" alt="Fourth Image" class="responsive">
        <img class="img-responsive" src="images/fithImage.jpg" alt="Fith Image" class="responsive">
        <img class="img-responsive" src="images/sixthImage.jpg" alt="Sixth Image" class="responsive">


        <script>
            function scrollUserDown() {
                document.body.scrollTop = 700;
                document.documentElement.scrollTop = 700;
            }
        </script>
    </script>   

</body>
</html>
