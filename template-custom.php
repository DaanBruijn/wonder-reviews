<?php
/*
 * Template Name: overons
 */

$title = ("Wonder Reviews");
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Overzichtpagina</title>
</head>

<body>

  <ul>
    <li><a href="http://wonder-reviews.local">Home</a></li>
    <li><a href="http://wonder-reviews.local/reviews/">Overzichpagina</a></li>
    <li><a class="active" href="http://wonder-reviews.local/over-ons/">Over Ons</a></li>
  </ul>

  <h1 class="overtext">Over Ons</h1>

  <div class="about-section">
    <p>Wij van Wonder© zijn twee enthousiaste pretparkliefhebbers, die door ons bezochte pretparken willen reviewen. </p>
    <p>Europa's grootste begeleidingsplatform voor pretparken, duizenden mensen leren over pretparken dankzij onze beoordelingen.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="roww">
    <div class="column">
      <div class="cardd">
        <img src="http://wonder-reviews.local/wp-content/uploads/2022/06/rickg.png" alt="Jane" style="width:50%">
        <div class="container">
          <h2>Sander van de Coolwijk</h2>
          <p class="title">CEO & Founder</p>
          <p>s.vande.coolwijk@mboutrecht.nl</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="cardd">
        <img src="http://wonder-reviews.local/wp-content/uploads/2022/06/pngegg.png" alt="Mike" style="width:42.5%">
        <div class="container">
          <h2>Wob Jelsma</h2>
          <p class="title">CEO & Art Director</p>
          <p>w.jelsma@mboutrecht.nl</p>
        </div>
      </div>
    </div>

  </div>

</body>

</html>