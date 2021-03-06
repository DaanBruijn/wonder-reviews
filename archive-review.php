<?php

$title = ("Wonder Reviews");
$content = get_the_content();
$url = get_stylesheet_directory_uri();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'review', 'numberposts' => -1, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviews = get_posts($arguments);

// $archive = get_post_type_archive_link('review');

?>
<!-- <?php echo '<img src= "' . $url . '/assets/img/WonderReviews.png" class="navLogo" alt="WonderReview Logo">';?> -->

<h1 class="text">All Reviews</h1>

<div class="row">
    <div class="col-sm col-md col-lg col-xl col-xxl">
        <?php if($reviews): ?>
            <?php foreach($reviews as $review): ?>
            <?php 
                $id = $review->ID;
                $title = get_field('title', $id);
                $score = get_field('score', $id);
                $img = get_field('image', $id);
                $location = get_field('location', $id);
            ?>
            
            <div class="hizmetkutu">
                <div class="kutu">
                    <img class="homepage-image" src="<?php echo $img['url']; ?>" alt="">
                    <p><?php echo $title; ?></p>
                    <p>Score: <?php echo $score; ?>/5</p>
                    <p><?php echo $location; ?></p>
                    <a href="<?php echo get_permalink($review); ?>">Lees meer</a>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

