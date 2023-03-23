<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/CSS/modules/headOtherPages.css">
    <link rel="stylesheet" href="/assets/CSS/main.css">
    <link rel="stylesheet" href="/assets/CSS/modules/poeme.css">
    <link rel="stylesheet" href="/assets/CSS/modules/footer.css">
    <script src="/assets/burgerMenu.js"></script>
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
    <h1 class="title">JEAN CLAUDE VAN DAMME - UNOFFICIAL BLOG</h1>
</div>


<div class="tribute">
    <div class="blockquotes">
    <blockquote>
        <p>Jean-Claude Van Damme, the man of might,</p>
        <p>With muscles toned and shining bright,</p>
        <p>He moves with grace, he strikes with power,</p>
        <p>His kicks and punches shake the tower.</p>
    </blockquote>

    <blockquote>
        <p>Born in Belgium, he started young,</p>
        <p>Training hard until his skills were sprung,</p>
        <p>From martial arts to film career,</p>
        <p>He conquered hearts, he knew no fear.</p>
    </blockquote>

    <blockquote>
        <p>In "Bloodsport" he was the hero,</p>
        <p>In "Kickboxer" he fought the foe,</p>
        <p>Universal Soldier" showed his might,</p>
        <p>And "Timecop" took us to new heights.</p>
    </blockquote>

    <blockquote>
        <p>His splits, his flips, his roundhouse kicks,</p>
        <p>They all leave us in awe and fix,</p>
        <p>Our eyes on him, our hearts ablaze,</p>
        <p>As he dominates the screen and amaze.</p>
    </blockquote>

    <blockquote>
        <p>With every role he takes on board,</p>
        <p>He shows us what a star is formed,</p>
        <p>For Jean-Claude Van Damme, we cheer,</p>
        <p>Legend of action, always near.</p>
        <cite> ChatGPT – March 2023</cite>
    </blockquote>
    </div>

    <div class="tributeIMG">
        <img src="/assets/images/poemeJCVD.jpeg" alt="image of JCVD">
    </div>

    </div>

<h3 id="titleRS">If you want more about JCVD click below!</h3>

<div class="cercles">
    <div class="cercleFacebook"><a href="https://www.facebook.com/JCVDworld/?locale=fr_FR" target="_blank"><img src="/assets/images/logoFacebook.webp" alt="Logo Facebook" </a></div>
    <div class="cercleInstagram"><a href="https://www.instagram.com/jcvd/?hl=fr" target="_blank"><img src="/assets/images/logoInstagram.png" alt="Logo Instagram" </a></div>
    <div class="cercleTwitter"><a href="https://twitter.com/JCVD" target="_blank"><img src="/assets/images/logoTwitter.png" alt="Logo Twitter"> </a></div>
    <div class="cercleShop"><a href="https://jcvdshop.com/" target="_blank"><img src="/assets/images/logoShopJCVD.jfif" alt="Logo Shop JCVD"></a></div>
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