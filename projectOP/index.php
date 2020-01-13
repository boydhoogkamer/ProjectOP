<?php include 'contactform.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mediacollege</title>
</head>

<body>
    <section id="Home">
        <div class="backgroundvid__div">
            <video class="backgroundvid" src="img/yoyovideo.m4v" muted autoplay loop></video>
        </div>
        <a href="#Home"><img class="logo"
                src="img/Logo_blok.svg" alt="logoMa"></a>
        <p class="topleft"><span style="color: #E62686">M</span><span
                style="color: #ffffff">ediacollege<br>Amsterdam</span></p>
        <header>
            <nav id="myHeader" class="sticky">
                <ul class="nav__links">
                    <li><a href="#OverMa">Over Ma</a></li>
                    <li><a href="#OverMediadeveloper">Over Mediadeveloper</a></li>
                    <li><a href="#InDePraktijk">In de praktijk</a></li>
                    <li><a class="cta" href="#Aanmelden"><button>Aanmelden</button></a></li>
                </ul>
            </nav>
        </header>

        <div class="center__content">
            <p class="anim-typewriter line center__p"><b><span class="pinkletters">B</span><span class="pinkletters">e</span><span class="pinkletters">n</span> <span class="pinkletters">j</span><span class="pinkletters">i</span><span class="pinkletters">j</span> <span class="pinkletters">e</span><span class="pinkletters">e</span><span class="pinkletters">n</span> <span class="pinkletters">c</span><span class="pinkletters">o</span><span class="pinkletters">d</span><span class="pinkletters">e</span><span class="pinkletters">k</span><span class="pinkletters">o</span><span class="pinkletters">n</span><span class="pinkletters">i</span><span class="pinkletters">n</span><span class="pinkletters">g</span><span class="pinkletters">?</span></b></p>
        </div>
<a href="#Home"><img class="arrow-up" src="img/arrowup.png" alt="arrow-up"></a>
    </section>
    <section id="OverMa">
        <div class="section2">
            <div class="section2__box">
                <div class="section2__pinkbox"></div>
                <p class="section2__overma">Over Ma</p>
            </div>
            <div class="section2__contentright">
                <p class="section2__text">
                Ma is een vakschool voor de media.
                Je hebt de keus uit 14 praktijkgerichte opleidingen waarmee
                je straks aan de slag kunt in de entertainmentwereld,
                de game-industrie, een ontwerpbureau, reclamebureau of
                bijvoorbeeld een bureau voor standbouw.<br><br>

                Welke opleiding je ook kiest, je wordt opgeleid tot een professional
                in het vak van jouw keus.<br><br>

                Tijdens je opleiding doe je mee aan projecten,
                waarbij je samenwerkt met studenten van andere opleidingen.
                Professionals in de mediabranche moeten namelijk niet alleen
                goed zijn in hun eigen vak. Ze moeten ook kunnen samenwerken
                met mensen met een andere specialisatie.
            </p>
            </div>
        </div>
        </div>
    </section>


    <section id="OverMediadeveloper">
        <div class="section3">
            <div class="section3__box">
                <div class="section3__pinkbox"></div>
                <p class="section3__overmediadev">Over Mediadeveloper</p>
            </div>
            <div class="section3__contentright">
                <p class="section3__text">
                    De mogelijkheden van webites en apps veranderen razendsnel.<br><br>
                    Werkgevers zitten te springen om professionals die thuis zijn in de technologie en die creatief zijn in het bedenken en bouwen van
                    nieuwe functionaliteiten en toepassingen.<br><br>
                    De opleiding Mediadeveloper bereidt je hierop voor.<br><br>
                    De Webdeveloper heeft een combinatie van taken waar zowel technisch als creatief inzicht voor nodig is. Een Webdeveloper moet kunnen programmeren, redigeren en presenteren.
            </p>
            </div>
        </div>
        </div>

    </section>


    <section id="InDePraktijk">
        <div class="section4">
            <div class="section4__box">
                <div class="section4__pinkbox"></div>
                <p class="section4__indepraktijk">In de praktijk</p>
            </div>
            <div class="section4__contentright">
                <p class="section4__text">
                    We doen er alles aan om onze opleidingen aan te laten sluiten op de wensen uit de praktijk.<br><br>
                    Door samenwerking met
                    bedrijven en andere scholen laten we je kennismaken met de echte mediapraktijk.<br><br>
                    Zodat je jouw werkhouding kunt
                    aanpassen aan de eisen van toekomstige werkgevers en je sneller kunt inspelen op nieuwe ontwikkelingen.<br><br>
                    Uiteindelijk verbeter je hiermee je kansen op de arbeidsmarkt. Hieronder vind je voorbeelden van deze samenwerking
                    en hoe dit leidt tot betere opleidingen.
            </p>
            </div>
        </div>
        </div>
    </section>
    <section id="Aanmelden">
        <div class="section5">
            <div class="section5__box">
                <div class="section5__pinkbox"></div>
                <p class="section5__aanmelden">Aanmelden</p>
            </div>
            <div class="section5__pinkbox2">
                <p class="section5__quote">“Back-end programming vind ik het leukste, want dan kun je de ‘achterkant’ van een site bouwen. Als er iets fout is, moet je dat uitzoeken, want je ziet het niet direct.”<br><br>
                <span class="rico">Rico, student Mediadeveloper</span></p>
            </div>
            <div class="form__box">
                    <form class="form" id="form1" action="contactform.php" method="post">
      
                        <p class="naam">
                          <input name="naam" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Naam" id="name" />
                        </p>
                        
                        <p class="email">
                          <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                        </p>
                        
                        <p class="text">
                          <textarea name="bericht" type="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Bericht"></textarea>
                        </p>

                        <div class="submit">
                          <input name="submit" type="submit" value="VERSTUUR" id="button-pink"/>
                          <div class="ease"></div>
                        </div>
                      </form>
                    </div>
            </div>
    </section>
</body>

</html>