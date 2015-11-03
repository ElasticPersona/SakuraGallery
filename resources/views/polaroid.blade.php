<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $userInfo['name'] }} Gallery</title>
    <meta name="description" content="Sakura Araki Happy 19th Birthday." />
    <meta name="keywords" content="Sakura Araki, Sakura, Araki, LinQ, 新木さくら, さくら, 新木" />
    <meta name="author" content="Shuhei" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/polaroid-component.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-normalize.css" />
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
#target {
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
#pinContainer {
    width: 100%;
    height: 100%;
    overflow: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
}
#slideContainer {
    width: 400%; /* to contain 4 panels, each with 100% of window width */
    height: 100%;
}
.panel {
    height: 100%;
    width: 25%; /* relative to parent -> 25% of 400% = 100% of window width */
    float: left;
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

<div class="container">
    <!-- Top Navigation -->

    <header class="codrops-header headerImage">
        <svg xmlns="http://www.w3.org/2000/svg" width="1000px" height="300px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 300">
        </svg>
        <h1>Happy 19th birthday, sakura ♬
            <span>
            </span>
        </h1>

        <div class="textMessage">
            <strong>Hope you have an amazing year ahead!</strong>
        </div>
    </header>

    <!--
            <div class="spacer s0" id="trigger"></div>
            <div id="target">
                <img id="plane" src="../img/daisyFunny.png" height="400px" width="400px">
            </div>
            <script>
                $(function () { // wait for document ready
                    var flightpath = {
                        entry : {
                            curviness: 1.25,
                            autoRotate: true,
                            values: [
                                {x: 100,	y: -20},
                                {x: 500,	y: 10}
                            ]
                        },
                        looping : {
                            curviness: 1.25,
                            autoRotate: true,
                            values: [
                                {x: 510,	y: 60},
                                {x: 620,	y: -60},
                                {x: 500,	y: -100},
                                {x: 380,	y: 20},
                                {x: 500,	y: 60},
                                {x: 580,	y: 20},
                                {x: 620,	y: 15}
                            ]
                        },
                        leave : {
                            curviness: 1.25,
                            autoRotate: true,
                            values: [
                                {x: 660,	y: 20},
                                {x: 800,	y: 130},
                                {x: $(window).width() + 300,	y: -100},
                            ]
                        }
                    };
                    // init controller
                    var controller = new ScrollMagic.Controller();

                    // create tween
                    var tween = new TimelineMax()
                        .add(TweenMax.to($("#plane"), 1.2, {css:{bezier:flightpath.entry}, ease:Power1.easeInOut}))
                        .add(TweenMax.to($("#plane"), 2, {css:{bezier:flightpath.looping}, ease:Power1.easeInOut}))
                        .add(TweenMax.to($("#plane"), 1, {css:{bezier:flightpath.leave}, ease:Power1.easeInOut}));

                    // build scene
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 500, offset: 100})
                        .setPin("#target")
                        .setTween(tween)
                        .addIndicators() // add indicators (requires plugin)
                        .addTo(controller);
                })
            </script>

    -->

    <div id="pinContainer">
        <div id="slideContainer">

            <section class="panel firstPanel">
                <div id="smile">
                    <section id="start">
                        <div id="intro">
                            <h1>新木さくらさん19歳のお誕生日おめでとう！！</h1>
                        </div>
                    </section>
                </div>
            </section>

            <section class="panel secondPanel">
            <div class="description textMessage">
                <p><strong>Special Sakura Days</strong></p>
            </div>
            <section id="photostack-1" class="photostack">
                <div>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/01.jpg" alt="img01"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Serenity Beach</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/02.jpg" alt="img02"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Happy Days</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/03.jpg" alt="img03"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Beautywood</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/04.jpg" alt="img04"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Heaven of time</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/05.jpg" alt="img05"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Speed Racer</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/06.jpg" alt="img06"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Forever this</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/07.jpg" alt="img07"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Lovely Green</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/08.jpg" alt="img08"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Wonderful</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/09.jpg" alt="img09"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Love Addict</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/10.jpg" alt="img10"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Friendship</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/11.jpg" alt="img11"/></a>
                        <figcaption>
                            <h2 class="photostack-title">White Nights</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/12.jpg" alt="img12"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Serendipity</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/13.jpg" alt="img13"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Pure Soul</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/14.jpg" alt="img14"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Winds of Peace</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/15.jpg" alt="img15"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Shades of blue</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a class="photostack-img"><img class="polaroidImage" src="../img/16.jpg" alt="img16"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Lightness</h2>
                        </figcaption>
                    </figure>
                </div>
            </section>
            </section>

            <section class="panel fourthPanel">
            <section class="description textMessage">
                <p><strong>Instagram Sakura Days</strong></p>
            </section>
            <section id="photostack-2" class="photostack">
                <div>
                    <?php $index = 0 ?>
                    @foreach ($instagramImages as $image)
                    <figure>
                        <a href="{{ $image }}" class="photostack-img"><img class="polaroidImage" src="{{ $image }}" alt=""/></a>
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
            </section>

            <section class="panel thirdPanel">
            <section class="description textMessage">
                <p><strong>Twitter Sakura Days</strong></p>
            </section>
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
            </section>


            <section class="description">
                <p>
                    <a href="">

                    </a>
                    <a href="">
                    </a>
                </p>
            </section>

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

        </div><!-- /slideContainer -->
    </div><!-- /pinContainer -->

</div><!-- /container -->

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
    $("#start h1").wrapEach(/(.)/g, "<span>$1</span>");

    // animations
    var controller;
    controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: "onLeave"
        }
    });
    var nervousHat = new TimelineMax({repeat: -1, yoyo: true})
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "+=5", left: "-=6", rotation: -3}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "-=10", left: "+=6", rotation: 0}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "+=5", left: "+=6", rotation: 3}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "-=5", left: "-=3", rotation: 1.5}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "+=5", left: "-=6", rotation: -1.5}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "+=5", left: "+=3", rotation: 0}))
        .add(TweenMax.to("#start .tophat", 0.3, {bottom: "-=10"}));
    var abracadabra = TweenMax.fromTo("#start .wand", 1, {top: -$(window).height()/3, left: 370, rotation: 20}, {top: 10, rotation: -20});
    var reveal = new TimelineMax()
        .add([
            TweenMax.to("#start .tophat", 1, {bottom: $(window).height(), left: "-=50", rotation: -20}),
            TweenMax.from("#start h1", 1, {scale: 0.2, top: "+=70"}),
            TweenMax.to("#start .wand", 0.8, {top: -$(window).height()/3, left: 450, rotation: 30}),
            TweenMax.to("#start .floor", 1, {autoAlpha: 0})
        ]);
    var laola = new TimelineMax()
        .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: -150, x: -75, scale: 2, color: '#ff4468' }, 0.2))
        .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: 0, x: 0, scale: 1, color: '#fff'}, 0.2), 0.5);

    // container pin
    var startpin = new ScrollMagic.Scene({
        duration: 700
    })
        .setPin("section#start")
        .addTo(controller);

    // msg scroll ani
    new ScrollMagic.Scene({
        duration: 140,
        offset: -100
    })
        .setTween(TweenMax.to("#msg div.scroll", 1, {backgroundPosition: "0 13px", repeat: -1, delay: 1, repeatDelay: 2, ease: Linear.easeNone}))
        .addTo(controller);
    // msg hide
    new ScrollMagic.Scene({
        offset: 40
    })
        .setTween(TweenMax.to("#msg", 0.5, {bottom: -40}))
        .addTo(controller);

    // hat movement
    new ScrollMagic.Scene({
        duration: 300,
        offset: -100
    })
        .setTween(nervousHat)
        .addTo(controller);

    // magic wand
    new ScrollMagic.Scene({
        offset: 20,
        duration: 180
    })
        .on("end", function (e) {
            if (e.scrollDirection == "FORWARD" && startpin.progress() < 0.37) { // check pin progress so it doesnt launch on refresh
                // make it rain!
                $("#start .sparkpoint").sparkle({
                    amount: 40,
                    duration: 0.2
                });
            }
        })
        .setTween(abracadabra)
        .addTo(controller);

    // big reveal
    new ScrollMagic.Scene({
        duration: 300,
        offset: 260
    })
        .setTween(reveal)
        .addTo(controller);

    // jumping text
    new ScrollMagic.Scene({
        duration: 200,
        offset: 450
    })
        .setTween(laola)
        .addTo(controller);


    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax()
    // animate to second panel
        .to("#slideContainer", 0.5, {z: -150})		// move back in 3D space
        .to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
        .to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
        // animate to third panel
        .to("#slideContainer", 0.5, {z: -150, delay: 1})
        .to("#slideContainer", 1,   {x: "-50%"})
        .to("#slideContainer", 0.5, {z: 0})
        // animate to forth panel
        .to("#slideContainer", 0.5, {z: -150, delay: 1})
        .to("#slideContainer", 1,   {x: "-75%"})
        .to("#slideContainer", 0.5, {z: 0});

    // create scene to pin and link animation
    new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "500%"
    })
        .setPin("#pinContainer")
        .setTween(wipeAnimation)
        .addIndicators() // add indicators (requires plugin)
        .addTo(controller);
</script>