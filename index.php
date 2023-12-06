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

        <style type="text/css">
            .woman .st0{fill:#FFFFFF;}
            .woman .st1{fill:#B0D2F0;}
            .woman .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
            .woman .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}

            .man .st0{fill:#FFFFFF;}
            .man .st1{fill:#B0D2F0;}
            .man .st2{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-miterlimit:10;}
            .man .st3{fill:none;stroke:#29235C;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            .man .st4{fill:none;stroke:#B0D2F0;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
        </style>
    </head>
    <body>
        <main>
            <div id="app" class="graphic-wrap selector">
                <div class="title-wrap">
                    <h1>Ben je een man of vrouw?</h1>
                </div>
                <div class="selector-wrap">
                    <div class="fill"><!-- FILL --></div>
                    <div class="characters">
                        <input type="radio" name="gender-select" id="woman-select" value="woman" v-model="gender">
                        <label for="woman-select" class="character woman">
                            <img src="assets/ondernemer-vrouw.svg" alt="">
                            <div class="input-wrap">
                                <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Vrouw
                            </div>
                        </label>
                        <input type="radio" name="gender-select" id="man-select" value="man" v-model="gender">
                        <label for="man-select" class="character spouse man">
                            <img src="assets/ondernemer-man.svg" alt="">
                            <div class="input-wrap">
                                <div class="styled-radio">
                                    <i class="fas fa-check"></i>
                                </div>
                                Man
                            </div>
                        </label>
                    </div>
                    <div class="btn-wrap">
                        <button class="selector-btn" :disabled="!gender" @click="submitForm">
                            <template v-if="loading">
                                <i class="fa-solid fa-circle-notch"></i>
                                <span class="opacity-0">Volgende</span>
                            </template>
                            <span v-else>Volgende</span>
                        </button>
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
        <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
        <script src="/js/main.js?v=<?=filemtime('js/main.js')?>"></script>
        <script src="/js/selector.js?v=<?=filemtime('js/selector.js')?>"></script>
    </body>
</html>
