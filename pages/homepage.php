<!DOCTYPE html>
<html lang="en">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');

    :root {
        --yellow: #ffcc0d;
        --black: #000;
        --white: #fff;
        --light-bg: #eee;
        --border-bold: .5rem solid var(--black);
        --border-light: .2rem solid var(--black);
    }

    * {
        font-family: 'Rubik', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        color: var(--black);
    }

    *::selection {
        background-color: var(--black);
        color: var(--yellow);
    }

    *::-webkit-scrollbar {
        height: .5rem;
        width: 1rem;
    }

    *::-webkit-scrollbar-track {
        background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
        background-color: var(--yellow);
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    body {
        overflow: hidden;
        transition: .2s linear !important;
    }

    body.active {

        padding-left: 35rem;
    }


    .header {
        position: fixed;
        top: 0;
        left: -35rem;
        height: 100vh;
        background-color: white;
        border-right: var(--border-bold);
        width: 35rem;
        padding: 3rem 2rem;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-flow: column;
        text-align: center;
    }

    .header .logo {
        text-transform: uppercase;
        border-bottom: var(--border-bold);
        font-weight: bolder;
        font-size: 4.5rem;
    }

    .header .navbar {
        width: 100%;
    }

    .header .navbar a {
        display: block;
        font-size: 1.6rem;
        padding: 1.5rem;
        margin: .5rem;
    }

    .header .navbar a.active,
    .header .navbar a:hover {
        background-color: var(--yellow);
    }

    .header .follow a {
        font-size: 2.5rem;
        margin: 0 1rem;
        cursor: pointer;
        transition: .5s linear !important;
    }

    .header .follow a:hover {
        transform: rotate(360deg);
    }

    #menu-btn {
        position: absolute;
        top: 0;
        right: -5.5rem;
        height: 4.5rem;
        line-height: 4.5rem;
        width: 5rem;
        font-size: 2.5rem;
        cursor: pointer;
        background-color: var(--black);
        color: var(--white);
    }

    .header.active {
        left: 0;
    }




    section {
        padding: 3rem 2rem;
        margin: 0 auto;
        max-width: 1200px;
        text-align: center;
    }

    .home {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
        min-height: 100vh;
    }

    .home .image {
        flex: 1 1 40rem;
    }

    .home .image img {
        height: 35rem;
        padding: 2rem;
        border: var(--border-bold);
    }

    .home .content {
        flex: 1 1 40rem;
    }


    .home .content h3 {
        text-transform: uppercase;
        font-size: 5rem;
        margin-bottom: .5rem;
    }

    .home .content span {
        display: inline-block;
        padding: 1rem;
        background-color: var(--yellow);
        font-size: 2rem;
        margin: 1rem 0;
    }

    .home .content p {
        font-size: 1.2rem;
        line-height: 2;
        padding: 1rem 0;
    }

    .btn {

        display: inline-block;
        margin-top: 1rem;
        cursor: pointer;
        padding: 1rem 3rem;
        border: var(--border-light);

        font-size: 2.5rem;

    }

    .btn:hover {
        background-color: var(--black);
        color: var(--white);
    }

    .home .image img {
        height: auto;
        width: 100%;
    }

    .heading {
        margin-bottom: 3rem;
        text-align: center;
    }

    .heading span {
        text-transform: none;
        font-size: 5.5rem;
        border-bottom: var(--border-bold);
    }


    .about .biography p {
        margin: 2rem auto;
        max-width: 70rem;
        line-height: 2;
        font-size: 1.7rem;
    }

    .about .biography .bio {
        margin: 1rem 0;

    }

    .about .biography .bio h3 {
        padding: 1rem 2rem;
        display: inline-block;
        margin: 1rem;
        background-color: var(--light-bg);
        border: var(--border-light);
        word-break: break-all;
        font-size: 1.7rem;
        font-weight: normal;
        text-transform: none;
    }

    .about .biography .bio h3 span {
        font-weight: lighter;
        text-transform: none;
    }

    .about .skills {
        margin: 3rem 0;

    }

    .about .skills .progress {
        margin-top: 1rem;
    }

    .about .skills .progress .bar {
        margin: 1rem auto;
        max-width: 70rem;
        border: var(--border-bold);
        padding: 1rem;
    }

    .about .skills .progress .bar span {

        font-weight: normal;

    }

    .about .skills .progress .bar h3 {

        display: flex;
        align-items: center;
        font-size: 2rem;
        padding: 2rem;
        justify-content: space-between;
        background-color: var(--yellow);
    }

    .about .skills .progress .bar:nth-child(1) h3 {
        width: 95%;
    }

    .about .skills .progress .bar:nth-child(2) h3 {
        width: 70%;
    }

    .about .skills .progress .bar:nth-child(3) h3 {
        width: 90%;
    }

    .about .skills .progress .bar:nth-child(4) h3 {
        width: 60%;
    }

    .about .skills .progress .bar:nth-child(5) h3 {
        width: 80%;
    }


    .about .edu-exp .row {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .about .edu-exp .row .box-container {
        flex: 1 1 40rem;
    }

    .about .edu-exp .row .box-container .title {
        padding: 1.5rem;
        font-size: 3rem;
        background-color: var(--yellow);
    }

    .about .edu-exp .row .box-container .box {
        text-align: left;
        margin: 1.5rem 0;
        background-color: var(--light-bg);
        padding: 2rem;
    }

    .about .edu-exp .row .box-container .box span {
        font-size: 1.5rem;
    }

    .about .edu-exp .row .box-container .box h3 {
        font-size: 2.5rem;
        font-weight: normal;
        margin-top: 1.rem;
        margin-bottom: 1rem;
    }

    .about .edu-exp .row .box-container .box p {
        line-height: 1.5;
        font-size: 1.7rem;
        line-height: 2;
    }
























    @media (max-width:991px) {
        html {
            font-size: 55%;
        }

        body.active {
            padding-left: 0;
        }
    }

    @media (max-width:450px) {
        html {
            font-size: 50%;
        }

        .header.active {
            padding-top: 7rem;
        }

        #menu-btn.fa-times {
            right: 0;

        }

        .heading span {

            font-size: 4rem;

        }

        .about .biography .bio h3 {
            font-size: 2rem;
        }
    }
</style>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Can Dogan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- header section starts -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <div class="logo">
            <a href="#">PORTFOLIO</a>
        </div>

        <nav class="navbar">
            <a href="#home" class="active">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#">PORTFOLIO</a>
            <a href="#">CONTACT</a>
        </nav>

        <div class="follow">
            <a href="https://www.facebook.com/doganalican46" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/can_dgn46" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/can.dgn.46/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/ali-can-dogan46/" class="fab fa-linkedin"></a>
            <a href="https://github.com/alleycan" class="fab fa-github"></a>
        </div>
    </header>
    <!-- header section ends -->


    <!-- home section starts -->
    <section class="home" id="home">
        <div class="image">
            <img src="https://media-exp1.licdn.com/dms/image/D4D03AQH4B9duVtT14Q/profile-displayphoto-shrink_800_800/0/1665144938580?e=1671667200&v=beta&t=W-LSxiQbPXFIvgN4uOWl8T4vCBH1B3_tMULUyA0S_wg" alt="">
        </div>
        <div class="content">
            <h3>Hi, I am Ali Can Dogan</h3>
            <span>Software Engineer&Web Developer</span>
            <p>Hi, my name is Ali Can Dogan and I'm 22 years old. I live in Kahramanmaras/Turkey. <br>
                Currently I am a student at European University of Lefke in North Cyprus. <br>
                My department is Software Engineering and this is my senior class. <br>
                I really like programming and I am interested in web development. <br>
                Also I love playing football, watching TV series and hiking</p>
            <a href="#about" class="btn">ABOUT ME</a>
        </div>
    </section>
    <!-- home section ends -->




    <!-- about section starts -->

    <section class="about" id="about">

        <h1 class="heading"><span>Biography</span></h1>

        <div class="biography">
            <p>Hi, my name is Ali Can Dogan and I'm 22 years old. I live in Kahramanmaras/Turkey. <br>
                Currently I am a student at European University of Lefke in North Cyprus. <br>
                My department is Software Engineering and this is my senior class. <br>
                I really like programming and I am interested in web development. <br>
                Also I love playing football, watching TV series and hiking</p>
            <div class="bio">
                <h3><span>Name : <span>Ali Can Dogan</span></span></h3>
                <h3><span>E-Mail : <span>doganalican46@hotmail.com</span></span></h3>
                <h3><span>Address : <span>Pazarcık / Kahramanmaraş</span></span></h3>
                <h3><span>Phone : <span><a href="tel:">+90 545 714 53 05</a></span></span></h3>
                <h3><span>Age : <span>22 Years</span></span></h3>
                <h3><span>Experience: <span>6+ Months</span></span></h3>
            </div>

            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="skills">

            <h1 class="heading"><span>SKILSS</span></h1>

            <div class="progress">
                <div class="bar">
                    <h3><span>HTML</span> <span>95%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>CSS</span> <span>70%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>C/C++</span> <span>90%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>PYTHON</span> <span>60%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>JAVA</span> <span>80%</span></h3>
                </div>

            </div>
        </div>



        <div class="edu-exp">

            <h1 class="heading"><span>Education & Experience</span></h1>

            <div class="row">
                <div class="box-container">
                    <h3 class="title">Education</h3>
                    <div class="box">
                        <span>( 2019 - PRESENT )</span>
                        <h3>Software Engineering</h3>
                        <p>2019-PRESENT Engineering Department – Software Engineering Full Scholarship (%100 English)
                            (Senior Class) GPA: 3.06/4.00 EUROPEAN UNIVERSITY OF LEFKE LEFKE, NORTHERN CYPRUS </p>
                    </div>
                    <div class="box">
                        <span>( 2018 - 2019 )</span>
                        <h3>English Preparatory School</h3>
                        <p>2018-2019 English Preparatory School - Avarage: B2-Intermediate
                            EUROPEAN UNIVERSITY OF LEFKE-PREP SCHOOL LEFKE, NORTHERN CYPRUS </p>
                    </div>
                    <div class="box">
                        <span>( 2014 - 2018 )</span>
                        <h3>Merkez Atatürk Anadolu High School</h3>
                        <p>2014-2018 High School - Numerical - Avarage: 84/100
                            Merkez Atatürk Anadolu High School KAHRAMANMARAS, TURKEY </p>
                    </div>
                </div>

                <div class="box-container">
                    <h3 class="title">Experience</h3>

                    <div class="box">
                        <span>( July 2022 - October 2022 )</span>
                        <h3>Trainee at Kahramanmaras Teknokent</h3>
                        <p>
                            Project-Bus Tracking System <br>
                            Role: Creating a website's interfaces with HTML and CSS, also some backend processes with python and flask.
                            Technologies: Python, Flask, PHPMyAdmin, XAMPP, JavaScript, HTML, CSS, Visual Studio Code
                        </p>
                    </div>
                </div>


            </div>
            <h1 class="heading"><span>Seminars & Certificates</span></h1>

            <div class="row">
                <div class="box-container">
                    <h3 class="title">Seminars & Certificates</h3>

                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>Leadership and Creativity </h3>
                        <p>
                            Ada Eğitim Akademi
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – KKTC
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>Anatomy of Creativity </h3>
                        <p>
                            Ada Eğitim Akademi
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – KKTC
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>To be the leader of your own life</h3>
                        <p>
                            Ada Eğitim Akademi
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – KKTC
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>ENGLISH PREPARATORY PROGRAMME</h3>
                        <p>
                            PEARSON ASSURED ORGANISATION / EUROPEAN UNIVERSITY OF LEFKE
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2015 )</span>
                        <h3>Intro to Computer Science Course </h3>
                        <p>
                            K-8 Intro to Computer Science Course
                            Code.org | Hadi Partovi - AB
                        </p>
                    </div>
                </div>

            </div>
    </section>
    <!-- about section ends -->












    <script>
        let menu = document.querySelector('#menu-btn');
        let header = document.querySelector('.header');
        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            header.classList.toggle('active');
            document.body.classList.toggle('active');
        }

        window.onscroll = () => {
            if (window.innerWidth < 991) {
                menu.classList.remove('fa-times');
                header.classList.remove('active');
                document.body.classList.remove('active');
            }
        }
    </script>
</body>

</html>