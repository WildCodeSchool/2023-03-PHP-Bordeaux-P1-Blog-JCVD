<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/CSS/modules/headOtherPages.css">
    <link rel="stylesheet" href="/assets/CSS/main.css">
    <link rel="stylesheet" href="/assets/CSS/modules/quotes.css">
    <link rel="stylesheet" href="/assets/CSS/modules/footer.css">
    <script src="/assets/burgerMenu.js"></script>
    <title>Famous Quotes</title>
</head>

<body>

<div class="nameBar">
    <div id="menu">
        <div id="menu-bar" onclick="menuOnClick()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="mainArticles.php">Home</a></li>
                <li><a href="poeme.php">Tribute</a></li>
                <li><a href="movies.php">Filmographie</a></li>
                <li><a href="quotes.php">Famous Quotes</a></li>
                <li><a href="aboutUs.php">About us</a></li>
            </ul>
        </nav>
    </div>

    <div class="menu-bg" id="menu-bg"></div>

    <h1 class="title">JEAN CLAUDE VAN DAMME THE UNOFFICIAL BLOG</h1>
</div>

<div class="TitleQuotes">
    <h1>Some of the best quotes of JCVD</h1>
</div>

<!-- Qoute 1 -->

<div class="parentQuotes">

<div class="quoteOne">
    <div class="videoOne">
        <iframe src="https://www.youtube.com/embed/PZskaNIPINQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoOne">
        <h1>"On est tous homo"</h1>
        <br/>
        <p>
            Jean claude van Damme on his best, explaining why we are all homo.
        </p>
    </div>
</div>

<!-- QUOTE 2 -->

<div class="quoteTwo">
    <div class="videoTwo">
        <iframe src="https://www.youtube.com/embed/MOZjQGNmtYc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoTwo">
        <h1>"Faut que tu te mouches!"</h1>
        <br/>
        <p>
            BAM!
        </p>
    </div>
</div>

    <!-- QUOTE 3 -->

<div class="quoteThree">
    <div class="videoThree">
        <iframe src="https://www.youtube.com/embed/yNQWs-mdhoE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoThree">
        <h1>"Math with JCVD"</h1>
        <br/>
        <p>
            If everybody would count this way the world would probably be a better place!
        </p>
    </div>
</div>

    <!-- QUOTE 4 -->

<div class="quoteFour">
    <div class="videoFour">
        <iframe src="https://www.youtube.com/embed/ru4u1dVL-Ms" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoFour">
        <h1>"Neutre"</h1>
        <br/>
        <p>
            If you understand everything that JCVD is talking about, this blog is for you!
        </p>
    </div>
</div>

    <!-- QUOTE 5 -->

<div class="quoteFive">
    <div class="videoFive">
        <iframe src="https://www.youtube.com/embed/8ECgLA2MjFo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoFive">
        <h1>"Aware"</h1>
        <br/>
        <p>
            Jean Claude van Damme talks about his perspective on <br/>
            life and about his way of "being Aware".
        </p>
    </div>
</div>

    <!-- QUOTE 6 -->

<div class="quoteSix">
    <div class="videoSix">
        <iframe src="https://www.youtube.com/embed/yNQWs-mdhoE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="textVideoSix">
        <h1>"Math with JCVD"</h1>
        <br/>
        <p>
            If everybody would count this way the world would probably be a better place!
        </p>
    </div>
</div>
</div>

<footer>
    <div class="footer">
        <ul class="ul-footer">
            <li><a href="disclaimer.php">Disclaimer</a></li>
            <li><a href="aboutUs.php">About us</a></li>
        </ul>
    </div>
</footer>
<script>
    let title = document.querySelector(".title")
    let quotes = ["Quand je demande une question, tu sais à qui je demande ? Moi.",
        "Je crois en Dieu. Y'a Jean-Claude, y'a Dieu, dans le même corps. We are all one.",
        "Entre penser et dire, il y a un monde de différences (et ils sont près!).",
        "Ma devise, c'est toujours : se recréer. Il faut se recréer. Pour recréer. A better you.",
        "Et ça, c'est très dur ! Et, et, et, et. C'est très facile en même temps.",
        "Mon modèle, c'est moi-même!",
        "Je crois au moment. S'il n'y a pas le moment, à ce moment-là, il faut arriver à ce moment-là, au moment qu'on veut.",
        "Marcel Proust, oui. Un peu comme moi. Longtemps il s'est couché aware.",
        "Une femme qui est enceinte, par exemple, elle est aware qu'elle attend un enfant.",
        "Une noisette, j'la casse entre mes fesses tu vois.",
        "JEAN CLAUDE VAN DAMME - BLOG NON OFFICIEL"
    ]
    let number =0


    setInterval(()=>{
        let navTitle = quotes[number]
        number = number +1

        title.innerHTML = `${navTitle}`
        if(number == 11){
            number = 0
        }

    },5000)

</script>
</body>
</html>