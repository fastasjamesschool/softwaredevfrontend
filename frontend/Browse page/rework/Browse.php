<?php
require '../scripts/connectdatabase.php';
$table = "MOVIES";
$sql1 = $db->query("SELECT TITLE,PNG,GENRE,MSOURCE  FROM $table WHERE GENRE='Comedy'");
$sql2 = $db->query("SELECT TITLE,PNG,GENRE,MSOURCE  FROM $table WHERE GENRE='Action'");
$sql3 = $db->query("SELECT TITLE,PNG,GENRE,MSOURCE  FROM $table WHERE GENRE='Thriller'");
//Change GENRE to whatever values you are looking for aka each movie genre
$members1 = $sql1->fetchAll();
$members2 = $sql2->fetchAll();
$members3 = $sql3->fetchAll();
?>
<!doctype html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/nav.css">
        <link rel="stylesheet" href="Browse.css">
        <link rel="stylesheet" href="lightslider.css">
        <script src="jquery-3.6.0.min.js"></script>
        <!--used lightslider plugin for sliders
        http://sachinchoolur.github.io/lightslider/-->
        <script src="lightslider.js"></script>
    </head>
    <body>
        <nav class = "navbar navbar-expand-lg">
            <div class="container-fluid justify-content-md-start navElement">
                <a href = "#" class = "navbar-brand">
                    <img  class = "logo" src = "/frontend/pictures/logo cropped.png">
                </a>
            </div>
            <div class="container-fluid justify-content-md-end navElement">
                <a class = "nav-link active" href="#">account</a>
            </div>
        </nav>   
        <section>
            <header class = "genre">purchased movies</header>
            <ul id="purchaseHistory" class="cs-hidden">
                <li class="item-a">
                    <div class="showcase-box">
                        <a href="/frontend/movie descriptions/Gumball.html">
                            <img src = "/frontend/pictures/gumball.jpg">
                        </a>
                    </div>
                </li>
                <li class="item-b">
                    <div class="showcase-box">
                        <img src = "/frontend/pictures/Scam alert thumbnail.jpg">
                    </div>
                </li>
                <li class="item-c">
                    <div class="showcase-box">
                        <img src = "/frontend/pictures/we ar not the same thumbnail.jpeg">
                    </div>
                </li>
                <li class="item-d">
                    <div class="showcase-box">
                        <img src = "/frontend/pictures/movie.png">
                    </div>
                </li>
            </ul>
        </section>  
        <section class = "primary-slider">
            <header class = "genre">Comedy</header>
            <ul id="sliderOne" class="cs-hidden first-slider">
                <body>
                    <?php foreach ($members1 as $member) { ?>
                        <li class="item-a">
                            <div class ="showcase-box">
                            <a href= "/video/<?= ($member['MSOURCE'])?>">  <img src="/pictures/<?= ($member['PNG'] ?? 'Batman.jpeg') ?>" > </a>
                            </div>
                            </li>
                    <?php } ?>
                </body>
            </ul>
        </section>
        
        <section class = "secondary-slider">
            <header class = "genre">action</header>
            
            <ul id="sliderTwo" class="cs-hidden second-slider">
            <?php foreach ($members2 as $member) { ?>
                <li class="item-a">
                            <div class ="showcase-box">
                            <a href= "/video/<?= ($member['MSOURCE'])?>">  <img src="/pictures/<?= ($member['PNG'] ?? 'Batman.jpeg') ?>" > </a>
                            </div>
                            </li>
                    <?php } ?>
            </ul>
        </section>
        
        <section class ="container-fluid dramaMovies movieContainer">
            <header class = "genre">horror</header>
            
            <ul id="sliderThree" class="cs-hidden">
            <?php foreach ($members3 as $member) { ?>
                <li class="item-a">
                            <div class ="showcase-box">
                            <a href= "/video/<?= ($member['MSOURCE'])?>">  <img src="/pictures/<?= ($member['PNG'] ?? 'Batman.jpeg') ?>" > </a>
                            </div>
                            </li>
                    <?php } ?>
            </ul>
        </section>
        <section class ="container-fluid superHero movieContainer">
            <header class = "genre">something else</header>
            <ul id="sliderFour" class="cs-hidden">
            <?php foreach ($members1 as $member) { ?>
                <li class="item-a">
                            <div class ="showcase-box">
                            <a href= "/video/<?= ($member['MSOURCE'])?>">  <img src="/pictures/<?= ($member['PNG'] ?? 'Batman.jpeg') ?>" > </a>
                            </div>
                            </li>
                    <?php } ?>
            </ul>
        </section>
        
        <script>
            $(document).ready(function() {
                $('#purchaseHistory').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#purchaseHistory').removeClass('cS-hidden');
                    } 
                });
                $('#sliderOne').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#sliderOne').removeClass('cS-hidden');
                    } 
                }); 
                $('#sliderTwo').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#sliderTwo').removeClass('cS-hidden');
                    } 
                });  
                $('#sliderThree').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#sliderThree').removeClass('cS-hidden');
                    } 
                });  
                $('#sliderFour').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                        $('#sliderFour').removeClass('cS-hidden');
                    } 
                });  
            });
        </script>

</body>
<footer>
    <div class = "copywrite">© 2022 Project Vertigo, all rights reserved</div>
</footer> 
</html>
