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
                <button class="back-btn" type="button" name="button" onclick="resetView()">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="toggle-wrap">
                    <h3 id="title-prive">Privé</h3>
                    <input type="checkbox" id="prive-zakelijk-toggle">
                    <label for="prive-zakelijk-toggle"></label>
                    <h3 id="title-zakelijk">Zakelijk</h3>
                </div>
                <div class="main-circle">
                    <img src="assets/stippellijn.svg" class="dotted-line" alt="">
                    <div id="zakelijk-btns-wrap" class="btns-wrap">
                        <div id="category-1" class="btn-wrap">
                            <button class="btn-yellow" data-category="1">
                                <img src="assets/icon-innovatie.svg" alt="">
                            </button>
                            <h3>1. Innovatie</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Wat wil je veranderen?</li>
                                    <li>Wat wil je verbeteren?</li>
                                    <li>Wat wil je vernieuwen?</li>
                                    <li>Welke doelstelling(en) wil je bereiken?</li>
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
                                    <li>Wat betekent dit voor de klant?</li>
                                    <li>Welke kansen biedt dit in de markt?</li>
                                    <li>Welke andere partijen heb je hierbij nodig?</li>
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
                                    <li>Welke mensen heb je nodig?</li>
                                    <li>Welke middelen heb je nodig?</li>
                                    <li>Welke processen heb je nodig?</li>
                                    <li>Welke randvoorwaarden moeten worden<br>vervuld?</li>
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
                                    <li>Wat is de impact op jouw verdienmodel?</li>
                                    <li>Wat is de investering op korte en lange termijn</li>
                                    <li>Wat zijn de kosten op korte en lange termijn?</li>
                                    <li>Wat zijn de opbrengsten op korte en lange termijn?</li>
                                    <li>Hoe ga je het succes meetbaar in beeld brengen?</li>
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
                                    <li>Wie is er verantwoordelijk voor het succes?</li>
                                    <li>Hoe wordt door de opleiding<br>de onderneming geïnspireerd?</li>
                                    <li>Hoe worden prioriteiten bepaald?</li>
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
                                    <li>Hoe communiceren we dit naar collega's?</li>
                                    <li>Hoe communiceren we dit naar klanten?</li>
                                    <li>Welke overlegstructuren zijn nodig?</li>
                                    <li>Hoe worden periodiek de voortgang,<br>resultaten en prioriteiten gecommuniceerd?</li>
                                    <li>Hoe brengen we de markt op de hoogte<br>en in beweging?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="prive-btns-wrap" class="btns-wrap">
                        <div id="prive-category-1" class="btn-wrap">
                            <button class="btn-yellow" data-category="1">
                                <img src="assets/icon-ontwikkeling.svg" alt="">
                            </button>
                            <h3>1. Ontwikkeling</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Wat wil je zelf veranderen in je leven?</li>
                                    <li>Op welke gebieden wil je persoonlije groei ervaren?</li>
                                    <li>Waarin wil je nog verbeteren?</li>
                                    <li>Welke droom wil je realiseren?</li>
                                </ul>
                            </div>
                        </div>
                        <div id="prive-category-2" class="btn-wrap">
                            <button class="btn-red" data-category="2">
                                <img src="assets/icon-familie.svg" alt="">
                            </button>
                            <h3>2. Familie</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Hoe beïnvloeden jouw persoonlijke doelen<br> en veranderingen je gezin?</li>
                                    <li>Welke rol spelen familieleden in<br>jouw persoonlijke ontwikkeling?</li>
                                    <li>Wat wil je betekenen voor je gezin en/of familie?</li>
                                    <li>Wat is belangrijk in je gezin en/of familie?</li>
                                </ul>
                            </div>
                        </div>
                        <div id="prive-category-3" class="btn-wrap">
                            <button class="btn-green" data-category="3">
                                <img src="assets/icon-omgeving.svg" alt="">
                            </button>
                            <h3>3. Omgeving</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Welke impact wil je maken<br>buiten je gezin en/of familie?</li>
                                    <li>Hoe belangrijk is eigen zichtbaarheid<br>in je omgeving?</li>
                                    <li>Waar en hoe wil je betrokken zijn<br>in je omgeving?</li>
                                </ul>
                            </div>
                        </div>
                        <div id="prive-category-4" class="btn-wrap">
                            <button class="btn-light-blue" data-category="4">
                                <img src="assets/icon-financieel.svg" alt="">
                            </button>
                            <h3>4. Financiën</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Welke financiële doelen streef je na?</li>
                                    <li>Wat moet er nog gebeuren<br>om je doelen te bereiken?</li>
                                    <li>Hoe meet je jouw persoonlijke<br>succes en wanneer ben je tevreden?</li>
                                </ul>
                            </div>
                        </div>
                        <div id="prive-category-5" class="btn-wrap">
                            <button class="btn-purple" data-category="5">
                                <img src="assets/icon-communicatie.svg" alt="">
                            </button>
                            <h3>5. Verantwoording</h3>
                            <div class="keywords">
                                <ul>
                                    <li>Hoe communiceer je jouw<br>persoonlijke doelen en veranderingen?</li>
                                    <li>Welke communicatiestructuren<br>zijn nodig voor effectieve gesprekken en<br>wie kan jou daar eventueel bij helpen?</li>
                                    <li>Hoe houd je de controle over de door<br>jouw gewenste ontwikkeling?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="center-graphic-zakelijk" class="center-graphic">
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

                    <div id="center-graphic-prive" class="center-graphic">
                        <?php if ($mainCharacter === 'man') { ?>
                            <img class="graphic graphic-default active" src="assets/man-default-prive.svg" alt="">
                            <img class="graphic graphic-1" src="assets/man-ontwikkeling-prive.svg" alt="">
                            <img class="graphic graphic-2" src="assets/man-familie-prive.svg" alt="">
                            <img class="graphic graphic-3" src="assets/man-omgeving-prive.svg" alt="">
                            <img class="graphic graphic-4" src="assets/man-financien-prive.svg" alt="">
                            <img class="graphic graphic-5" src="assets/man-verantwoording-prive.svg" alt="">
                        <?php } else if ($mainCharacter === 'woman') { ?>
                            <img class="graphic graphic-default active" src="assets/vrouw-default-prive.svg" alt="">
                            <img class="graphic graphic-1" src="assets/vrouw-ontwikkeling-prive.svg" alt="">
                            <img class="graphic graphic-2" src="assets/vrouw-familie-prive.svg" alt="">
                            <img class="graphic graphic-3" src="assets/vrouw-omgeving-prive.svg" alt="">
                            <img class="graphic graphic-4" src="assets/vrouw-financien-prive.svg" alt="">
                            <img class="graphic graphic-5" src="assets/vrouw-verantwoording-prive.svg" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <footer>
                <div class="column">
                    <img src="assets/bol-logo.svg" alt="Bol Adviseurs - Logo" width="75" onClick="resetView()" class="pointer">
                </div>
                <div class="footer-center">
                    <h2>Jouw toekomstgerichte succesroute</h2>
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
