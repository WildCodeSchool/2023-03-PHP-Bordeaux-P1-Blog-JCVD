<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/CSS/modules/headOtherPages.css">
    <link rel="stylesheet" href="/assets/CSS/main.css">
    <link rel="stylesheet" href="/assets/CSS/modules/footer.css">
    <link rel="stylesheet" href="/assets/CSS/modules/disclaimer.css">
    <script src="/assets/burgerMenu.js"></script>
    <title>Document</title>
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

<div class="Disclaimer">

    <h1>
        General Disclaimer
    </h1>

    <br><br>

<p>
The information contained in this website is for general information purposes only. The information is provided by our unofficial blog and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.

In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.

Through this website you are able to link to other websites which are not under the control of our unofficial blog. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.

Every effort is made to keep the website up and running smoothly. However, our unofficial blog takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control. </p>


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