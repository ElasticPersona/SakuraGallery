<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $userInfo['name'] }} Gallery</title>
    <meta name="description" content="Sakura Araki Happy 19th Birthday." />
    <meta name="keywords" content="Sakura Araki, Sakura, Araki, LinQ, 新木さくら, さくら, 新木" />
    <meta name="author" content="Shuhei" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/polaroid-component.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />

    <!-- フォント -->
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/js/polaroid-modernizr.min.js"></script>
    <script type="text/javascript" src="/js/polaroid-photostack.js"></script>
    <script type="text/javascript" src="/js/polaroid-classie.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TimelineMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="/js/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="/js/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="/js/demo.js"></script>
    <script type="text/javascript" src="/js/soundmanager2-jsmin.js"></script>
    <script type="text/javascript" src="/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="/js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>



<script>
    <!-- 音楽再生 -->
    soundManager.setup({
        onready: function() {
            var mySound = soundManager.createSound({
                id: 'aSound',
                url: '../mp3/LinQ-telephone.mp3',
                loops: 1,
            });
            mySound.play();
        },
        ontimeout: function() {
            // Hrmm, SM2 could not start. Missing SWF? Flash blocked? Show an error, etc.?
        }
    });
    $(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['pink', 'perple', 'pink', 'perple', 'pink'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000
        });

        $('.tlt').textillate({
            // the default selector to use when detecting multiple texts to animate
            selector: '.texts',

            // enable looping
            loop: true,

            // sets the minimum display time for each text before it is replaced
            minDisplayTime: 2000,

            // sets the initial delay before starting the animation
            // (note that depending on the in effect you may need to manually apply
            // visibility: hidden to the element before running this plugin)
            initialDelay: 0,

            // set whether or not to automatically start animating
            autoStart: true,

            // custom set of 'in' effects. This effects whether or not the
            // character is shown/hidden before or after an animation
            inEffects: [],

            // custom set of 'out' effects
            outEffects: [ 'hinge' ],

            // in animation settings
            in: {
                // set the effect name
                effect: 'fadeInLeftBig',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function () {}
            },

            // out animation settings.
            out: {
                effect: 'fadeOutRight',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function () {}
            },

            // callback that executes once textillate has finished
            callback: function () {},

            // set the type of token to animate (available types: 'char' and 'word')
            type: 'char'
        });
    });
</script>
<style type="text/css">
.polaroidImage {
    max-height: 240px;
    max-width: 240px;
    margin: auto;
}
.headerImage {
    background-image: url("../img/sakuraWater.png");
    -moz-background-size: cover;
    background-size: cover;
    height: 100%;
    width: 100%;
}
#corridor {
    background-image: url("../img/sakuraCorridor.png");
    -moz-background-size: cover;
    background-size: cover;
    height: 100%;
    width: 100%;
}
#smile {
    background-image: url("../img/sakuraSmile.png");
    -moz-background-size: cover;
    background-size: cover;
    height: 100%;
    width: 100%;
}
h1, .textMessage {
    font-family: 'Playball', cursive;
    text-shadow:
        0 0 25px pink,
        0 0 20px pink,
        0 0 0.40px pink;
}
</style>
</head>

    <header class="codrops-header headerImage">
        <svg xmlns="http://www.w3.org/2000/svg" width="1000px" height="300px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 300">
        </svg>
        <h1 class="tlt">Happy 19th birthday, sakura ♬
            <span>
            </span>
        </h1>

        <div class="textMessage">
            <strong>Hope you have an amazing year ahead!</strong>
        </div>
    </header>

    <div id="fullpage">

        <div class="section active" id="section0">
            <div id="smile">
                <section id="start">
                    <div id="intro">
                        <h1>新木さくらさん19歳のお誕生日おめでとう！！</h1>
                    </div>
                </section>
            </div>
        </div>

        <div class="section" id="section1">
            <div class="slide active">
                <div class="intro">
                    <h1>Create Sliders</h1>
                    <p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>
                    <img data-src="imgs/slider.png" alt="slider" height="132" width="662" id="slidersImg" />
                </div>

            </div>
            <div class="slide">
                <div class="intro">
                    <section id="photostack-1" class="photostack">
                        <div>
                            <?php for($i=0; $i <= 20; $i++) {
                                if ($i < 10) { $i = '0'.$i; } ?>
                                <figure>
                                    <a class="photostack-img">
                                        <img class="polaroidImage" src="../img/<?php echo $i ?>.jpg" alt="img01"/>
                                    </a>
                                    <figcaption>
                                        <h2 class="photostack-title">Serenity Beach</h2>
                                    </figcaption>
                                </figure>
                            <?php } ?>
                        </div>
                    </section>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <section id="photostack-2" class="photostack">
                        <div>
                            <?php $index = 0 ?>
                            @foreach ($instagramImages as $image)
                            <figure>
                                <a href="{{ $image }}" class="photostack-img">
                                    <img class="polaroidImage" src="{{ $image }}" alt=""/>
                                </a>
                                <figcaption>
                                    <h2 class="photostack-title"></h2>
                                    <div class="photostack-back">
                                        <p> {{ $instagramTexts[$index] }} </p>
                                    </div>
                                </figcaption>
                            </figure>
                            <?php $index++ ?>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <section id="photostack-3" class="photostack">
                        <div>
                            @foreach ($tweetItems as $item)
                            <figure>
                                <a href="{{ $item['image'] }}" class="photostack-img">
                                    <img class="polaroidImage" src="{{ $item['image'] }}" alt=""/>
                                </a>
                                <figcaption>
                                    <h2 class="photostack-title"></h2>
                                    <div class="photostack-back">
                                        <p> {{ $item['text'] }} </p>
                                    </div>
                                </figcaption>
                            </figure>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="intro">
                <h1>Easy to use plugin</h1>
                <p>HTML markup example to define 4 sections.</p>
                <img data-src="imgs/example2.png" alt="example" height="154" width="494" id="easyToUse" />
            </div>
        </div>
        <div class="section" id="section3">
            <div class="intro">
                <section class="related">
                    <h3>Official Sites</h3>
                    <a href="http://ameblo.jp/loveinq/">
                        <img src="" />
                        <h3>LinQ Blogs</h3>
                    </a>
                    <a href="http://ameblo.jp/sakura-araki/">
                        <img src="" />
                        <h3>Sakura Official Blogs</h3>
                    </a>
                </section>
            </div>
        </div>
    </div>



<!--
    <div id="pinContainer">
        <div id="slideContainer">


            <section class="panel secondPanel">
            <div class="description textMessage">
                <p><strong>Special Sakura Days</strong></p>
            </div>
            </section>

            <section class="panel fourthPanel">
            <section class="description textMessage">
                <p><strong>Instagram Sakura Days</strong></p>
            </section>
            </section>

            <section class="panel thirdPanel">
            <section class="description textMessage">
                <p><strong>Twitter Sakura Days</strong></p>
            </section>
            </section>


        </div><!-- /slideContainer -->
    </div><!-- /pinContainer -->
-->

<script>
    // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

    new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );
    new Photostack( document.getElementById( 'photostack-2' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );
    new Photostack( document.getElementById( 'photostack-3' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );


    // お誕生日おめでとうエフェクト
    // wrap each title letter
    // $("#start h1").wrapEach(/(.)/g, "<span>$1</span>");

    // animations
    var controller;
    controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: "onLeave"
        }
    });

    // jumping text
    new ScrollMagic.Scene({
        duration: 200,
        offset: 450
    })
        .setTween(laola)
        .addTo(controller);
</script>