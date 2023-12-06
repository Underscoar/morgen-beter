<?php
  $mainCharacter = 'man';
  
  if (isset($_GET['gender']) && ($_GET['gender'] === 'man' || $_GET['gender'] === 'woman')) {
    $mainCharacter = $_GET['gender'];
  }
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Bol Adviseurs - Morgen Beter</title>

        <link rel="icon" type="image/x-icon" href="/assets/bol-favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/styles.css?v=<?=filemtime('css/styles.css')?>">
    </head>
    <body>
        <main>
            <div class="graphic-wrap">
                <div class="main-circle">
                    <div class="btns-wrap">
                        <div id="category-1" class="btn-wrap">
                            <button class="btn-yellow" data-category="1">
                                <img src="assets/icon-innovatie.svg" alt="">
                            </button>
                            <h3>1. Innovatie</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Vernieuwing & innovatiekracht</li>
                                    <li>Doelen</li>
                                    <li>Product- & dienstaanbod</li>
                                </ul>
                            </div>
                        </div>
                        <div id="category-2" class="btn-wrap">
                            <button class="btn-red" data-category="2">
                                <img src="assets/icon-klant-markt.svg" alt="">
                            </button>
                            <h3>2. Klant en markt</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Klantwaarde</li>
                                    <li>Marktpotentieel</li>
                                    <li>Concurrenten</li>
                                    <li>Samenwerking</li>
                                </ul>
                            </div>
                        </div>
                        <div id="category-3" class="btn-wrap">
                            <button class="btn-green" data-category="3">
                                <img src="assets/icon-intern.svg" alt="">
                            </button>
                            <h3>3. Intern</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Mensen</li>
                                    <li>Middelen</li>
                                    <li>Processen</li>
                                    <li>Randvoorwaarden</li>
                                </ul>
                            </div>
                        </div>
                        <div id="category-4" class="btn-wrap">
                            <button class="btn-light-blue" data-category="4">
                                <img src="assets/icon-financieel.svg" alt="">
                            </button>
                            <h3>4. Financieel</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Verdienmodel</li>
                                    <li>Opbrengsten & kosten</li>
                                    <li>Investeringen</li>
                                    <li>Meetbaar succes</li>
                                </ul>
                            </div>
                        </div>
                        <div id="category-5" class="btn-wrap">
                            <button class="btn-orange" data-category="5">
                                <img src="assets/icon-leiderschap.svg" alt="">
                            </button>
                            <h3>5. Leiderschap</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Verantwoordelijkheid</li>
                                    <li>Prioritering</li>
                                    <li>Actieplan</li>
                                    <li>Interne inspiratie & motivatie</li>
                                </ul>
                            </div>
                        </div>
                        <div id="category-6" class="btn-wrap">
                            <button class="btn-purple" data-category="6">
                                <img src="assets/icon-communicatie.svg" alt="">
                            </button>
                            <h3>6. Communicatie</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Overlegvormen</li>
                                    <li>In- & externe communicatie</li>
                                    <li>Voorgangsrapportage</li>
                                    <li>Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center-graphic">
                        <?php if ($mainCharacter === 'man') { ?>
                            <img class="graphic graphic-default active" src="assets/man-default.svg" alt="">
                            <img class="graphic graphic-1" src="assets/man-innovatie.svg" alt="">
                            <img class="graphic graphic-2" src="assets/man-klant-markt.svg" alt="">
                            <img class="graphic graphic-3" src="assets/man-intern.svg" alt="">
                            <img class="graphic graphic-4" src="assets/man-financieel.svg" alt="">
                            <img class="graphic graphic-5" src="assets/man-leiderschap.svg" alt="">
                            <img class="graphic graphic-6" src="assets/man-communicatie.svg" alt="">
                        <?php } else if ($mainCharacter === 'woman') { ?>
                            <img class="graphic graphic-default active" src="assets/vrouw-default.svg" alt="">
                            <img class="graphic graphic-1" src="assets/vrouw-innovatie.svg" alt="">
                            <img class="graphic graphic-2" src="assets/vrouw-klant-markt.svg" alt="">
                            <img class="graphic graphic-3" src="assets/vrouw-intern.svg" alt="">
                            <img class="graphic graphic-4" src="assets/vrouw-financieel.svg" alt="">
                            <img class="graphic graphic-5" src="assets/vrouw-leiderschap.svg" alt="">
                            <img class="graphic graphic-6" src="assets/vrouw-communicatie.svg" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <footer>
                <div class="column">
                    <img src="assets/bol-logo.svg" alt="Bol Adviseurs - Logo" width="75">
                </div>
                <div class="footer-center">
                    <h2>“Jouw toekomstgerichte succesroute”</h2>
                </div>
                <div class="column">
                    <!-- Fill -->
                </div>
            </footer>
        </main>

        <div class="mobile-alert">
            “Morgen Beter” is gemaakt voor grotere schermen. Gebruik een tablet, laptop of desktop om deze applicatie te gebruiken.
        </div>

        <script async src="https://kit.fontawesome.com/5da4f89d11.js" crossorigin="anonymous"></script>
        <script src="js/main.js?v=<?=filemtime('js/main.js')?>"></script>
    </body>
</html>
