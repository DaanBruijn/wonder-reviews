<?php

$post = get_post();
$id = $post->ID;

$title = get_field('title', $id);
$review = get_field('review', $id);
$score = get_field('score', $id);
$img = get_field('image', $id);
$location = get_field('location', $id);


?>

<div class="singleDiv">
    <img class="singlePhoto" src="<?php echo $img['url']; ?>" alt="">
    <div class="singleText">
        <p><?php echo $title?></p>
        <hr>
        <p> <?php echo $review?></p>
        <hr>
        <p>Locatie: <?php echo $location?></p>
        <div>
            <p>Score: <?php echo $score?>/5</p>
        </div>
    </div> 
</div>
