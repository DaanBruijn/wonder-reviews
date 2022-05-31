<?php
/*
 * Template Name: overzıchtspagına
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
    <li><a class="active" href="#overzichpagina">Overzichpagina</a></li>
    <!-- <li><a href="#about">About</a></li> -->
  </ul>

  <h1 class="overtext">Overzichtspagina</h1>

  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <a href="#">
          <img class="photo1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/ader-toverland.webp" alt="">
          <div class="star">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </div>
          <h4>Attractiepark TOVERLAND</h4>
          <h5>Tussen Venlo en Eindhoven ligt Attractiepark Toverland. Betreed een betoverende wereld vol avontuur, shows en spectaculaire attracties. Vlieg mee onder de vleugels van de spectaculaire wing coaster Fēnix en ervaar het betoverende gevoel van vliegen over de wateren van Avalon. Kom tot rust in bootjesattractie Merlin’s Quest of stap in de hoogste houten achtbaan van de Benelux.</h5>
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img class="photo1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Bagatelldia.jpg" alt="">
          <div class="star">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>
          <h4>BAGATELLE</h4>
          <h5>Bagatelle is een groene oase vol attracties, niet alleen voor onverschrokken avonturiers, maar ook voor de minder dappere gasten.</h5>
        </a>
      </div>
    </div>

    <div class="rightcolumn">
      <div class="card">
        <a href="#">
          <img class="photo1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/Roller_Coaster_Loop-2.gif" alt="">
          <h4>Slagharen</h4>
          <h5>In Attractiepark Slagharen rol je van het ene avontuur in het andere avontuur. Reis in een paar stappen van het Wilde Westen naar Mexico, vier carnaval in het ritmische New Orleans en ga op zoek naar goud in Yellowstone. </h5>
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img class="photo1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/duzicegif-1650.gif" alt="gif">
          <h4>Duinrell Amusement Park</h4>
          <h5>Het vakantiepark en alle faciliteiten liggen midden in de prachtige natuur van Nationaal Park Hollandse Duinen. Duinrell biedt het hele jaar door familieplezier. Geniet van attracties en het Tikibad. In de omgeving vind je duin, strand en bos en kun je heerlijk shoppen.</h5>
        </a>
      </div>

      <div class="card">
        <a href="#">
          <img class="photo1" src="http://wonder-reviews.local/wp-content/uploads/2022/05/ddrollercoaster.gif" alt="">
          <h3>Walibi Holland</h3>
          <h5>Walibi Holland is niet zomaar een pretpark, het is het spectaculairste attractiepark van Nederland! Een dagje uit naar Walibi is HARDGAAN, maar biedt veel meer dan alleen maar achtbanen. Het park staat namelijk boordevol spectaculaire attracties die het tot de perfecte dag uit maken voor jong en oud.</h5>
        </a>
      </div>
    </div>
  </div>

</body>
</html>