<?php

$title = ("Wonder Reviews");
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'review', 'numberposts' => 4, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviews = get_posts($arguments);

// $archive = get_post_type_archive_link('review');

?>
<div>
    <h3 class="center">Welkom bij Wonder Reviews:</h3>
    <p class="center">Een plaats waar je een wereld vol wonderen vind over alle pretparken waar wij de laatste tijd zijn geweest.</p>
</div>

<hr>
<h1 class="text">Recente Reviews</h1>
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

