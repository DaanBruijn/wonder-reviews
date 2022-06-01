<?php

$post = get_post();
$id = $post->ID;

$title = get_field('title', $id);
$review = get_field('review', $id);
$score = get_field('score', $id);
$img = get_field('image', $id);
$location = get_field('location', $id);


?>

<div>
    <div>
        <img class="" src="<?php echo $img['url']; ?>" alt="">
        <div>
            <p><?php echo $title?></p>
            <p> <?php echo $review?></p>
            <p>Score: <?php echo $score?>/5</p>

            <p>Locatie: <?php echo $location?></p>
        </div> 
    </div>
</div> 
