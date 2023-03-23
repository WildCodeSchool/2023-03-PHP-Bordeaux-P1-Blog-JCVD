<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/CSS/modules/headOtherPages.css">
    <link rel="stylesheet" href="/assets/CSS/modules/aboutUs.css">
    <link rel="stylesheet" href="/assets/CSS/modules/footer.css">
    <script src="/assets/burgerMenu.js"></script>
    <link rel="stylesheet" href="/assets/CSS/main.css">
    <title>About Us</title>
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

<!-- MEMBERS IN THE PROJECT AND THE SOCIAL PLATFORM LINKS -->

<div class="aboutUs">
    <div id="titleAboutUs">
        <h1>A little bit more about ourselves</h1>
    </div>

    <div class="teamMembers">

        <div id="Tomas">
            <div id="photoOne">
                <img src="/assets/images/profilePictureTomas.jpg" alt="Profile Photo">
            </div>
            <div id="nameOne">
                <p>Tomas Spit <br/>
                    Full stack Developper <br>
                    PHP Symphony</p>
            </div>

            <div class="socialMedia">
                <div class="hover">
                    <a href="https://www.linkedin.com/in/tomas-spit-2285b3267/" target="_blank">
                        <img src="/assets/images/174857.png">
                    </a>
                </div>

                <div class="hover">
                    <a href="https://github.com/Tomasspit2" target="_blank">
                        <img src="/assets/images/githubLogo.png">
                    </a>
                </div>
            </div>
        </div>

        <div id="Aurelie">
            <div id="photoOne">
                <img src="/assets/images/profilePhotoAurelie.jpg" alt="Profile Photo">
            </div>
            <div id="nameOne">
                <p>Aurélie Lozach <br/>
                    Full stack Developper <br>
                    PHP Symphony</p>
            </div>
            <div class="socialMedia">
                <div class="hover">
                    <a href="https://www.linkedin.com/in/aurelielozach/" target="_blank">
                        <img src="/assets/images/174857.png">
                    </a>
                </div>

                <div class="hover">
                    <a href="https://github.com/caudrel" target="_blank">
                        <img src="/assets/images/githubLogo.png">
                    </a>
                </div>
            </div>
        </div>

        <div id="Estephe">
            <div id="photoOne">
                <img src="/assets/images/profilePhotoEstephe.jpg" alt="Profile Photo">
            </div>
            <div id="nameOne">
                <p>Estèphe Fath <br/>
                Full stack Developper <br>
                PHP Symphony</p>
            </div>
            <div class="socialMedia">
                <div class="hover">
                    <a href="https://www.linkedin.com/in/est%C3%A8phe-fath-1b5455223/" target="_blank">
                        <img src="/assets/images/174857.png">
                    </a>
                </div>

                <div class="hover">
                    <a href="https://github.com/EstepheFath" target="_blank">
                        <img src="/assets/images/githubLogo.png">
                    </a>
                </div>
            </div>
        </div>

        <div id="Maxime">
            <div id="photoOne">
                <img src="/assets/images/profilePictureMaxime.jpg" alt="Profile Photo">
            </div>
            <div id="nameOne">
                <p>Maxime Gonotey
                    <br/>
                    Full stack Developper <br>
                    PHP Symphony</p>
            </div>
            <div class="socialMedia">
                <div class="hover">
                    <a href="https://www.linkedin.com/in/maxime-gonotey-29085a26a/" target="_blank">
                        <img src="/assets/images/174857.png">
                    </a>
                </div>

                <div class="hover">
                    <a href="https://github.com/Mgg24">
                        <img src="/assets/images/githubLogo.png">
                    </a>
                </div>
            </div>
        </div>
    </div>

        <!-- Explanation -->

    <div class="projectExplanation">
        <p>
            This project has been created by the four of us, as an assignment during our study becoming fullstack Web Developpers.
            <br>
        This is our first of 3 projects during our study. <br>
        We used HTML and CSS to create this blog. <br>
        On this page you can find links to our LinkedIn and GitHub profiles. <br>
        We really enjoyed working on this project. It was our first
        real experience in putting everything we learned in to practice. <br>
        We were assigned the group name: JCVD, and got the assignment to create a blog
        of articles. We decided to use our group name as the subject of the blog.
        So we created this blog all about the great Jean Claude van Damme. <br>
        We are not die hard fans, but the subject is still very interesting and we had
        a good laugh while creating the blog. <br>
        Don't hesitate to contact us for further questions or information. <br><br>

        P.S. Jean Claude van Damme, if you ever happen to read this, keep up the good work! <br><br>
        </p>
    </div>
</div>
<link rel="stylesheet" href="/assets/CSS/modules/footer.css">


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