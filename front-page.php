<?php

$title = ("Wonder Reviews");
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'news', 'numberposts' => 2, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$ListofReviews = get_posts();

$archive = get_post_type_archive_link('review');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="<?php echo $archive; ?>">Overzichtspagina</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <br>

    <div>
        <img class="anafoto" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="test">
        <h1 class="anatext">Welkom</h1>
    </div>

    <h1 class="text">Recente Reviews</h1>

    <marquee>
        <div class="row">
            <div class="col-sm col-md col-lg col-xl col-xxl">
                <div class="hizmetkutu">
                    <div class="kutu">
                        <img class="kayanfoto" src="http://wonder-reviews.local/wp-content/uploads/2022/05/maxresdefault.jpg" alt="">
                        <p>Attractiepark TOVERLAND </p>
                    </div>
                </div>
                <div class="hizmetkutu">
                    <div class="kutu">
                        <img class="kayanfoto" src="http://wonder-reviews.local/wp-content/uploads/2022/05/sddefault.jpg" alt="">
                        <p>BAGATELLE </p>
                    </div>
                </div>
                <div class="hizmetkutu">
                    <div class="kutu">
                        <img class="kayanfoto" src="http://wonder-reviews.local/wp-content/uploads/2022/05/indir.jpg" alt="">
                        <p>Slagharen</p><p>   </p>
                    </div>
                </div>
                <div class="hizmetkutu">
                    <div class="kutu">
                        <img class="kayanfoto" src="http://wonder-reviews.local/wp-content/uploads/2022/05/walibiefault-1.jpg" alt="">
                        <p>Walibi Holland</p>
                    </div>
                </div>
            </div>
        </div>
    </marquee>


    <!-- 

    <div class="grid-container">
        <div class="item1">
            <img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>

        </div>
        <div class="item2"><img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>

        </div>
        <div class="item3"><img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>
        </div>
        <div class="item4">4<img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>
        </div>
        <div class="item5">5<img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>
        </div>
        <div class="item6">6<img class="foto1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Goliath-ALG-1.jpg" alt="">
            <p>1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, alias? Ipsa distinctio autem doloremque</p>
        </div>
    </div> -->

</body>
</html>