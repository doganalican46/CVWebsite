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


    .portfolio .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        gap: 1.5rem;
        align-items: flex-start;
    }


    .portfolio .box-container img {
        height: 30rem;
        width: 100%;
        object-fit: cover;
    }

    .portfolio .box-container h3 {
        margin: 1rem 0;
        font-size: 2rem;
        font-weight: normal;
    }

    .portfolio .box-container .box span {
        font-size: 1.7rem;
    }

    .portfolio .box-container:hover .box {
        opacity: .2;
    }

    .portfolio .box-container .box:hover {
        opacity: 1;
    }


    .contact form {
        max-width: 70rem;
        margin: 0 auto;
    }

    .contact form .box {
        width: 100%;
        padding: 1.4rem;
        font-size: 2rem;
        text-transform: none;
        border: var(--border-light);
        margin: 1rem 0;
    }

    .contact form textarea {
        height: 20rem;
        resize: none;
    }

    .contact form .flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .contact form .flex .box{
        width: 49½;
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
                            Role: Creating a website's interfaces with HTML and CSS, also some backend processes with python and flask. <br>
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
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – NORTHERN CYPRUS
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>Anatomy of Creativity </h3>
                        <p>
                            Ada Eğitim Akademi
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – NORTHERN CYPRUS
                        </p>
                    </div>
                    <div class="box">
                        <span>( 2019 )</span>
                        <h3>To be the leader of your own life</h3>
                        <p>
                            Ada Eğitim Akademi
                            Prof. Dr. İlber ORTAYLI, Prof. Dr. Uğur Batı, Uzm. Psk. Arif İlker Şahin – NORTHERN CYPRUS
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


    <!-- portfolio section starts -->
    <section class="portfolio" id="portfolio">

        <h1 class="heading"><span>Portfolio</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
            <div class="box">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
            <div class="box">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFhYZGRgYHBgYGhwYGBoYGBgYGh8aHBgaGRwcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTQBDAwMEA8QHxISHjQsJSs0NDQ0NDQ0NjQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYHAf/EAEcQAAIAAwQGBwMKAwcEAwAAAAECAAMRBBIhMQUGQVFhkSIycYGhscETQtEHI1JicoKSssLwFKLSFRYzQ1Ph8SRjc4M0VOL/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAsEQACAgEEAQIFBAMBAAAAAAAAAQIRIQMSMVFBE6EEIjJhkTNCcYEUQ1MV/9oADAMBAAIRAxEAPwDUTtLIKKz0cjqg1HbXZDH0zLlCruuJ2Vb0oI42+lHvhwTezqTWCZuk/a9bA9pjZ6ZKkdfkaWlN00RyD1roqO0iLVLUpoAwxxGzwjieiNMmS4IJpkanAjaKR0DRttDrLpUurAi6MxSlDuFBGcouJcWmbIOIaZoiGQhA47Y8uLexIrnSM8vgH9icUrEkCsTmIKgiwZWadSso9vmCIrZxrZgd1w+F30i106xEhyMwARzHxjEDS05Vuh+juuqRyIjaOY0ZNVKycTI89piYgGk32iWe2WnoI9/tCucuWe5h5MIdD3ANq67c401jmVRPsr5CKa/LYkmWvczjzYwbJtaKAoQ0GHX+Kw3BtEqaTLMPDg0Uj6cRSQUfBguDKcwDXIb4EXW6RUgrMFMOqp8nhenLotakTThoeGjOJrZZvpOO1D6ViZNZrKf80DtRx+mFsl0PfHsvgY9rFQmn7Mf89O9qedIIl6VkNlOln/2J8YW2XQ9y7D4URy5gbFSCOBB8okhUO0KHCPAYcIBnohUj0R7SAYNOECDrr2iDZwgJR017YAD5vVPZGc0PIV5kxmUGrhcRsUV/UY0k4dE9kZqxW9LOzBweszE7OllicMuMOCbeDDWcUvm4/iy+bRUk+4O6ogadq7IbNR3hT5iH2fT0h8n9fKsGpbZZydedPONL1F2cyXwsnir/AAyim6m2c5KB2Ld/KRFba9U5SGgZxX6LmnIxt1YHI17IpdJn5zh+x6Rek23TOb42MdPT3Qbu+8Gb/uyNk+Z4QoBtVmt19+m9LzUuTFC3am7QVFBSkKKv7GPov/ovYxZEeqNo2REjVNIkcEUhnqkoeuMdD+TTSvTaS2NRVeFMwP3sjnstMzsIi+1Umsk9HXYDzoTGWoriXHk7UzAVI76RH/DoxDlQW2HbwhWK0q6Kw94Vpx2+MTO1I4G3HLZfkja/XDAeZgkREHiUGL03fkAHTYrZ5n2CeWMUGqLC7NXo9ZD0lqKUYH0jR6VFZM37D/lMZXVJAxmgmgoh8W3dsbx4ZMuTTTLMh9yS1aYFVBG/GkJdD2Zh0pMsH6uHkY9FnBFA/I4wlsjj3q9tPhDsBv8AduzbEp2O3xiJtVbOcr47G+Igl5LjKg7cfIw5b4GZrwrSHuYtqKS0ajSmJImuOkGxCnEU7N0Uk35MTUlbTn9KV6h/SNsk59uHfXzEPFqff4CKWpJeRbUc7m/JnP8AdnSj9oOvkDAkz5N7YMjKbsc/qUR1MWttw/ffHoth+iOcP1WG1HH5+oVvGUkN9l0Pm0BzNTrcudmmdwDflJjt4tg+j4w4Wtdxh+sxbUcn1Y0fPlF0mWeYFYBxelsBeXAitKVoRyMVeshmtPZgroooq4MmA/ZjuC2pN/gY99uh94d8T6nzXRovpo4CltnKMJswdjuPWHrpi1LlPfvYt5x3hpMps1Ru1VPnA76Dsz52eUfuJ8Iv1F5RLRxuy6xWu9/ikim1UP6YItGttqQgBkOG1B6UjqZ1TsX/ANdB9m8vkYGtGo1hc1MtgeDv6kw90H4FUuzmY11tPvJKb7rDyaCLBrpV1EySoBIF5Gaq1wqVOY742k75OrGcjNXsdT5rHJrRZwJxRcr9wVzpeoKwVGXCC5LydhYYGK+ZaWRiAARxixPVivtC4mONmyRWW3SckECZZkeppkpNT9oesQvarGOvZ58riquV5ymYRBaygtEu+QFqa3qUyOdY1UizIVBXKmYNRF72uCXpQlyvYz0qfYWPQttw7ndQeTqDByaOdsUtKP2rXxVj5QfaNDyn66I32kUxVztS7KxqJdw70dkPIGnhDWtJdmEvgtCXgn/s20/9r8Tj9EKAv7nbrXagNg9oMP5YUX/kS79jL/zNDr3ZyJBiDE5NacKxEinZHrPjUA458DGxuWAF5AozqO//AGi70KwTAY41J2bMBzjP2VjTdvO4bo0GhJd44dVce0n/AIjOfBpBWzoerFsW97MnHFl8Lw8BGmFCRwrGJ1W0czzvaEkKle8nAD1jZ0C4/sRxSpPPBpJKzx0N6o2wQmUQJMqe6J1MGnttuJCI7YtZbjejjmDGQ1NY+0mAZ3AeTCvnGzdagjeCIxGp70nvxlt+ZI6I8MmXJsFmNwPY49RE6Ekfv0gdjhjXvSvlEyXTiB4U4QAOmkhSd24EnuAz7IhMxa1IYH60tx4leEEH1HnAaaOmLS7aZmBHXCvXHuikk+WTKTXCsJlvfqVIYZGhGBxwwyOMepLI2E9tTWvbElmnhmcY1VgpqpFTnUVzwPhBI/p84XBV2AlcMgKcBjCuChqOymEHJly8zHjoKHAZN5wgAWQbMuJp6GPRKGGMHNLG7fDHkKefpAAE0vHb20w84d7A4ZYwX7AbzsPpDTZsRj4boAAylDSoqOI9YXszuzgz2Bwx3d9Y8MtsKfula7YABekN45x6Jrj3jziVpRrWh7e7hnHrkigpkRs4VpiYAIGtLjb4COHWZL1oTHrTE8XEdut70R2yorHAA5A8I4xoPSTPPkowBN9cduGOPKNtNfKyZPKOos3RgKa2Jgh36IgCe+cc1ZNlwU2lNJPLbC5dYqGvqWAG00BqaAmLKzFKA3JWONUd5DGv1WUD+aMvrDOwJBxGPYY1VgtLFBdUOKD/AAZ6ufwzAPOG44sW58B8uYRjWcvaqzV5pePjEyWpsg8tjuYlG5YmATNQE31ZD9eUyU7XSqwpNoLjo0cbpc5JvNZoFImmPcWntJv0B+MQor/Z/UPfZyfytTlChZHaOILhmMPKCNFWR5z3VOG34RHZ7M743aiNJqxZ7juKY0r8fWOqcqWCdKFyyWC6Dl+ycXKXTdVyaXmXrUG1cxWPdFSiikHbBVgnvMsyu5xZmw2ctkPlrhGNtqjdpbrN7q8o9glDtJPbFkCKgbDXDbFFoGaiSemwWpNKkAnAZeMFG2Y1VHY7Cwu0/FSo7AYjY27o55SqTRZezUZCPUmAZkZRWkzWxYhB3nxa6ByMSSbgzYsefkAIqOlGPHsTufQW9qANApbsy5xz3Uy1ubaVNAAkxaAbQRme7fHRkcbBHLdWZpGlCCcL9oXgKCZ/TG0Kpkyu1k6ZLYDAXe448jBAiFCdxO7IjupjEyNXf3gjziCh3xHmIIX984gggfvnCAE0g7qAyBzQrUIFJI6WPS3HzhWSbMdQa3TldmSyrYHg1INXPl+YxFbLIJihS7pQ1BRrrZkZ0yxik1w/yS1JO1+DxWmj3ZZy99l2nZdPnCee4BrKbJuqyEZ8WB8IgvewQFmmTBepiL7gY7hjl4xPZrckxGZSaC8DeBUg4GmPaIHF8+AUldPnocbWtaFXWtQKo1KmlOkAQOcEHMdv6YV4GtDXrZd0enMfa/TElHg9F84W0fej0bOxfOPG9H8xAB7/APmG7R94w8+ohh9H8xAAqfp84RzH2j5GHH+nzhu0dp9YAK7Tz3bNPb6Mmc38hMcF1a/+ZJ4Mx5IxjuetrUsNp/8AA45qR6xxDVIVtacA5/lI9Y6IfSyH9SOoTH6IinnuWJoCcTnlB9rm0CxS/wB6JKYTJbAVpeWjbcCRgfOOaneDeyC1aMZ88O7CLxEVgA6o5G10UmvAihESSbZZnymAbaN0fzUgz+G3UMDbJpMHWQBirOn2JpIH3JnREQWqXXrtLcDGs+zfrSijlBrWfhEXsADUVB+qSvOmcRbKpAiy12CV922zVHcKYQoP6W/mB8I8gtj2o5xq8lFx2xc2e7Lmq5wBBBI2VyMVVhbKmUWdpFVBjRu2aRVINt8xAAqdUbd5OJMP0bLvRVSqmgjR6Os5Cje1BA8ILyaCzMqotFqaZ5dxpiecePaW2UX7IoeecOuUAG6GMkUkc0nbBmYk41PbEkomGu6jbyxiJrQfdXn8BFEl3Km0Ecx0K9NL9s+f/MJnxjT2mbNPvkDcvR8RjGK0U9zSqD/vAfiFP1RUVSYn4OwFADjd39UqeYgpEpv7yT5wMzipoe4MAeRgpMvj/tGJY45Hsgn/AH8xAxyPYYJ39/pAA4Z8/wAwiQevrEe3n5iH/H1gAgtNlExLpLLjUFGusCCcj3wE2ipig3LTNGfXo/nFovx/NCfI9jecNSawS4KTtlerPLA9tMVyz3Va5cONMMMN8WJzH2v0mEw9fSK4WuYKXgMznLmJsO0X4TdlJVgsh6L5w1vR/MQCmkhkQpPRwWYhPJ7pic2sbVcYN7jEZjatRAUFHPv9Ijb9LekRrbZZNL61rkWAOW44xLn+E+MAHp9R6GG7R94+I+MOOff6Qw/pbzEBJntfZl3R9p+wi/iZV9Y45qWP+pPBHPio9Y638pr00fO4mUP50PpHJ9SF+fc7kI5svwjoh+myH9Rt9IPgvf6Rg9OHoj7a/mEbW3v1e+MTpzq9mPJkjCPJqw/SCVkmm1H8B/tFIk2akx2lTml9INRXIHTKDEDDN647ov5/Sk/dde8ofiIzobGZ/wCNG7wss+aGNWZw5ZpbBrHpBB0ik1asvSUBiVJBxUinVOdYt012Rbvt5DJeFQUIcEbxkYo7IesN0yb4sP64jtC9Kz9k5OakRm0rqim2jVjXKwf6jD/1zP6I8jMpo6QalkUks2zZeNPCkewvlKyDWFaUjRmzFkFIobLIYEVoVOTLip3iuw8DG30dZ6oo3mFlPJsmnHBVWWx0pGksEsVr9EYDiYlXRaA1vN4fCJHmy5QoWVRuJxPdmYbyZuWBzk9kQulczWK+16xylwUFjyHx8IqLRp2c/UF0dlPE19IpWZWjRTAqipIA3k0EVto0vKXAEsdyj1OEZ6bfY1dyT2n1xguz6Jmv1UIG9uiPHE8oYX0K06YduqoUccTGVsrn+0pbH/WkkntuCNvJ1cAxdyeCig5n/aMbp1Fk6QS7gqvIfE5AFSSSeyHFpuhNM7S4r/wGHLOCUMVsmer4qyuNhAr/ADKaQZZ5gIph3Ne88YzKCGyPYYJ39/pA+yJlOHd6CEBJt5+Yh1f33ww58/MR6T6+cID1T5t+aHOcD2N5xGD5t+aPWOB7G84YD229jekVk+xFWMxZs7Bi5QG8DQFiqqd+VOMWROfY3pCJx7/0w02hNJ8lUmnZBF1yVOGDowy7iIllNZn6jS60PUYIa1w6pBg2Y3RJulqU6IoSeArhFdOstnbryKYf6fHelYr5X2RWovKYa1jBydwK7WvjL64aBv7NxwuZLjcutjX3kZYFTRtmrSXNdDXJJpB5NWCZNmeVedp7ugQGjreOda1GJpQ4cYTS8MalL9y9wiXZDQdN1bbdcuAabL4NRHnspgymA9H30Bz+yV3RPZpwdVcZMLw7CI9HovmYku7MZ8qLsNHsHpeaZLU3a0wq2FcchHONRx0px3Kg5l/hG/8AlfelkQfSnr4I8YHU0US0Nv8AZjlfr+YR0L9Ij9xpLYcuwxkNNjot9l/AA+kaiY9V7jGZ0ot5gv0g45qYxRqWVlWqffXkyqvrGWY/zSacg4/TGo0XNBlrXakk/eP/AAIzloS64H1XXk7/ANUWssiOJUaGQBmNt1vxFCfywyfnI4TCO5iYZYX6KfYQ8kJ9IktuCofoz1MZr6hyK222ijkcFPNQfWFE1tstXJ4KOQA9I8gtDyaDqAscB7zMuzYJ6rmOiKTFi+sNtdEIVAWFKBjiCa0FRg4NOiwIrkcY57oTTLqgR2JUZMMWQVBIoeum9TG5sA+bFLpBpS6fm3vYdA+4rEEU91wu+O2UE1lHPGTi2kwW06YtD4Xig3Do05Y+MBCUWPSYknYMK8sTGuk6FlzKTHLG8K06uIw6VMb2GIwxrFpZ7KidRFXsGPeczHJJpOkbJN5MhY9CTG6qXRvfo+HW8It5Gry++5PBeiOeflF6YaTEOTKUUCyLDLTqIAd9KtzOMSGHsYjJhDIZsYTWzVxp0++rhSUUUZTTCuNQfSN64im0tgwO8eRPxi4umJo5ydW7ZKN5BU75T3T43TE0vWLSdn6zzgB/qpfH4nUnkY2yvFzIQYC6MQIqeqo8qxVfBiLF8qdpXrypT8VvIfNh4RorD8qlmNBMlTU4rddcqbwfCLe16vWaYrF7OhIBNSBXDiMYzr/J/ZZlbl9CPovUcnB8xBGUJK6oTTRrLFrzYJnVtKLnhMvS921wAe4xoJNqRxVHVxjirBhmNojkNp+TaaK+zmq24OpXxUtXlFPP1Pt8k3kltX6UpxXwIbwg2wfDFb6O9B/NvOPWbA9jeccCk6x6TsxCtNnLjQCcl6p3D2gqecaOyfKHa1HziSn2GgZGx4gkeED0mhpnXC2fY3pHpOPefKOdWX5UpBNJsmYhNcVKzEFePRPhGkka42J6fPqlakX6psAzcAeMJwl0G5GhZAQVORwPYRFUbIJHTVp7gAC4GvjE53Tup4wfZrUjgFHVxvVgwy3iJFbyXzMJNrAmlLPkrRpuztg5KHarowx7xSJpC2dz0GT3f8N7hrU16hEGuARiAR0s8dsBTdESHJvSlzAwF05A+7SH8r7RPzrp+wR/DMOrMcdbA3WGf1hXxhpE0VoUbBcCGTadoJ8oCOhFXqTZqdbAOSvIxIizJId5k6+i0OKBSKUOYPdBS8MFKXlf3eDFfLDMP8NZwRQtMZiK1AIQgiu3rRjdVDSzzT9cDwT4xp/llngpZQDUMZrAjIjoUPjGX1fF2yt9aYT4IP0xr/rGvqLct0O4xQ23/El8Wp21w9YuVboc4Zop3WcrCtwG86hlBYDKgY4kGhwxwwjBvamzRsr7EnzRU4FQi0OdZb0YU3ihgC2yGv3gpIvzFqASKsylRXea5RsrDodFSalKuzvcF4N7NGdnW8QSb5QjZ7wpXGI9W0ZJk18CDWil1Arhi6dYEXd1RU4RPrxpteDNyqVmesQICKQQbpUgihBFVoQcjE2km6Dnc6N5QbMWWii4Fapu3y5DAh8eh9I1xqNh31gPSMv5qZU0JCEYE1zOYyyIhRmm7+5bdqwlZINTxPgSI9jyTPAHM8yT6woqmVgxlkYXhjQ742+rNpIJkmhSZW4D1b5wZOCuORAMYZkxgixaSMpgytiCCKbCMo9XFUzjabdxO9otABUmgAqczTCp4wiY5nZvlMYCjyg53g3K+cavQGtUi0igNx/oORj9k5HzjzpaUlk6VNfwaAmGsYazREzxkaDmaI2aGs8RM8AD2eB5wVhRgCOMJ3gd5sMRE9lSvRw8YtrOauB8YpzPoaw+XpUqa3QeYjLUjKTQJpGi0pMuyW3mi88/CseaEToFjtNO4fsxndJaYMxQoS7Q161a7BsG+NHYbXJVFQTJZugDrqKnac99YpRaQFkEEV9vcBgBu8/+IOWYKVBw8Iw0zWS/MboVBYhSGoaVouBGdKQ0neBN4NlLlAoLwBqNornFdatWrJMrekJjmUFwnjVKVi5UUFNwpHoibd2mFGBt/wAndmYm482XwvB1x4MK+MVs/UCaMVmpMI6pcFKUyouKx0GYxLnd8IfdjojqyS5IaTOW2nRVsk9IWdywyMtg/eLhveAgBNbbfIajz5iU9xgHyxA+cBoOyOw3YjmyVYUZQw3MAw5GKeru5QlFLg51ZPlVtK9eVLccLyNjnUio8I0Fg+VOzt/iSpkvGpulXGQG8HZugy2aoWGZ1rOik7Uqh/lIiktXyayDUy50xCdjBXUd3RPjBcHyh5NZYde7BMGFpRTTKYGl4ni4APcY0Ei0JMBKMjqTmpDqRdG7AxxW2fJralxlvLcbiWRuRBHjFLO1at8g3vYTVI96X0vGWSYeyL4YWzXfLRM+csq7lmt+Jk/pih0Sf+kTi7eBYekUNtmWiaVE1pjlBdW+WZlGdOljGj0bZm9jZ5dGqzNUKKtQsSSAM6A1hzW2KQJ5LXQc1hMW7cqASb+VDgaba47IuNK6O9ovtF9mipWiBSt5us5bCpwAittOgzKnIHAaS7hQWClqZioOWOFRsxwi2bRihSuLAk1UkMCDica4Acso87Uk1JOPQpyaeAawrOc/NsiG6CQEWlSDSpBrXb2RRTL8ia2ILpQzCpBLH6xOXWyGOONY02jrPNrVgERVWlKXsAKKCTXaBWKPTdpJc2e4EBDOppi7gg3a9gY12mgiYJbWvPky3djBPtIToILpF8m6t9q43go3imNI8tGiZzF0ooNTLDAkUY40PAAHECH2bToly0ZgrEKFJJqRQlbl2lerTHgNhgS36zM46DkCpa6RiprvGdaA4woym3UVx2WngGttimo5VVLBaLeUEgkAA076wolS3uRW9SuwXxTxMKOjdMq2YqdjjA5WEpMNZo9Nu8hFVgcEgqzEqaiA75iSXaGXbApJMJRbR0TV3WeeoCTVMxMq++vYdvYY26TldQ6mqnI+hGwxxyxaddaABa7yK+EabV/T04uA028jGjIQAAD7ynYRC1dGM1ujyYR1JwlUuDdO8QPMiJ5m7HshLZnOeA8eUcJ2WRTJ0RUZsh37IOWzovE8YTvBQrADZ95hjpB7WdyaBcc6YVA47u+IBZmZrou1+0tPOHgKfRXTFgSZLi+OiX94U8RziRNEQZJbMuFcdUkdhI8oiSaJTq9KlWVgu+hrjuGEa606GNwlet6bacYytsslwnosDvYGKiS2aGRr39OT+F/Qj1ixka6WZutfT7S1H8pMc8eSYb7IwtkWVuLcafnB2ZZji8zNQm8BUk4BqgRaWbXGaOuqPzU8xh4RlfYtDSCI02rozs6FZtb5LddXTkw8MfCLWy6Ys8zBJqE7ibrcmoY5QpJNBBspbgoM9sLah7mdYAj2kcukW+YnUdl7GIEWlm1ptC5lX+0vqtITgyrN9CjMWbW5T15ZHFWr4GnnFpI0/Z39+79oFfHLxiHFodoNtFmRxR0VxudQw8Y5zrQ5lT1Mr5sAuEK9EDBAwGymJrsxjootKMKhlI3ggikZS0W2W7MjIrqzmrPSgBN0FRTABQOUS3LqwDLPZ2KKJ1C9a3l6VzsBGFcMvSBtKNNZQqNfF1hMIpfx6q9pONN3bDZuk0DlApuKUCO8yge6KGppWtK51yrDLJb3d2AdCl/IITSiigBLHYMKDGOSVp9GMquissFseROuTg5Slw3xUVALKb1SDt5cIt9NWJJsujFr2DIRgwKgCo2ipp2x5b2XoCbcBdmZWClioAqccaYRndEz3a03kAZAKEHBXrUKEoMBmcQeqYTw3JqqJ+wFadDCSVZ2Zk/zABcINBQUxqDXwMR255bSpdxlW5VbpAvMGzJpWp2moiXWLSkxpiJMQIi1ZQHvlgahWJ2ioypvhWOZKCSlmKGBN8AY9IilXUHFQa17I0ziT9i0iKTpOigYGnAD0hQFOarElTUk1oCBnsGyFGlIqzKXo8jyFHfZoex6I8j0QwHqYsbHMxG6KxYIktSNISpmWpG0dU1NtTFHRjeAoyscTQ4FSeHrF/MmRyvROk5ks1RiK4EbCI3erGl1a8s7EgX1LZgVAYE7QK1x2VidbRu5x/BGlqU1B/ktER3NFBPHYO+LCRYlShdheOXD7O8w9rcKdBajhlAVv0uJaFm7gN8cLlZ2xg7G6UEtRRptxM2Veu54sakxm7ZpGWFKJKREOBZsXPecRFVb7fecvmx2Z0HHjAyzr2yrMciOiOAO08YSjZvu24eTW6taSKEozsQ3VBBZVpntzjWK4Pu4kVF0498YDVUtLmFHBowIBXEg54gCuUbyQtakigP3cOIG/ie6Kqkc+pTlge4XO9hxy5xFaERR06AHDHEYxW2+ZedAXupUkgDo3QaYnuip1g0ujuFFQqYkHC+/uKN3HcKnZCtj9JF9O0LJfNADw6J8IFfVxB1DzFYI0Jpcz7wKDo0xFaNWtSK5ZeMWauDTZnxUEZipilJmUorhmTtWgXGSg9kU0/RL1pcNdwBJ5R0YHCooRviNJgYG7jQ07xFqbM9iMbo3Vxgt5xRjs+iOPGDP7DHb5RpzLhXIW4e0yr6EEDTNDbo2ZliGGQIe8W0wz6NYRH/CsNkbhrIIhewA7Ie5BtZhLUhQo1NpU/eGHiFgtEIEXeldGAhE+m6j8NXPghhlnsBKCvZXfDwwtlQyVFKDhUVFYL0no+YksTJQqtAzAFgxrWp6JFR+8oLewERfaNHzSjdUeJjGcE8i2qTycz0tbAEpMLBnRrqVvCpwrUUugekD6D08JN7oVvYdYrQE1YA48adsdIt+iZD1LykY7ygJyiitGrVl/wBIDsLD1hPTjKNMShRQ6SlS51omFg3RVEVa1aoNLwpxr+IQJJ0c0oJMcUFClK9IEA1NBtwPfhxjSrYUlNeQGuWLE4YYY9nhAGmPbuKhAyHGoFWRsiRQ1oR2xktOadXgtRZUWzSsu+3QV8etiL3GhyhRT3YUdn+Np9e5Foz8KPI9jQ3FDhDY9EAhyxMsQiJUi0RIOszxoNGteINaEAqeKkMN9MKxmZZixsswjLIjEHIjaDG8XapnNNU9yNVItTBbqvUVyBwrxicaQmZMquNzCoiis9hcMAjFQ4vAZ44VHKnIxb2fV6e/vP5RxS0ksM9CGqmrPZoksbzyEHBGZPIx4luRcElogwxJZj3mtYNl6lues1e0mLWxatWaW6I7Au9SqZVC4nj5Rlt6NPVj5R5qvKkuzMoN9aZEgUO362Nd8al2oIYklEWigKBuoB3wDbdIJcNx0dxkgdak7s4lpvhGTlG+rKLTukbjgChKiprvOUZZHLGpPWaprtONTBemy1+j4MaM2ylRgIFSkJG3AXI0o6FrjG7gMRu3DZ25xotVLXMe+XNFWrXmocThvoMK9nfGbLLcuIt5z1ycLtPdHrFtY3cIJUpem1CaE3U3M2y9lTDClc6RaRjOXhBGsemWYmVLNGODELQpwGZvkHuBpnWD9WrJaVUX3ITYrAFjxJ2QRobQKShebpvnU5A8PjF0IG/CM0ryKkKkOpCiRjbsKkOge02i6Qqi87ZLWgp9Jj7q8eQJgAlpAzW6XkGvnIhFZyDxuA3e+keCwhsZpvncRRB2Jke1qnjBQoBRRQeEGAK6eruwYqUABVASLxLUDOQCQoCggY16RrSDRKAFKRIqbTnD6QNgkCvIEOkpRacYnpHhEKx0BzxhFfPWLOaIDmpFohlFbsouLLIARRwHM4mKvSQoIFlTG+keZgY1kvWsEo4lVNd4X4R5FT7Z95hQtw9pxiFChRuUex7ChQ0SOEPUwoUUiWTKYKsz7I9hRtDkxnwzdajW5XYSnFWRg6NTEe4613EOY6MFEewo5fifqNdHgbMcKpY5AVMUOhU/iJjT2wukqlDTDu2UpgYUKDTxpuX9ETzqKP8AJVa06VZmMtSQimlPpEZk8K7OEZiZlChR6+hFLTVHla0m9R2QHSZBCv0kGVcSnFTnT6uUFSiRMwwKnPcRChR53xUVuPU+Fb2FhI0eHcGpqTUkGNto2wCWKU4k5kneTtMeQo5XwbPktFWHUhQozYxMaRGJ6k0Bx7DChQ/AEVttdwDCrNUKDlUAsSTsAGO/DDGI7Ahu3tr4sx6z7qDJVAIoNnbWFChrgPIWEh4EKFCA9jyFChFCjykKFABFMl7oBtKsMlJ71+MKFFIhlNaLDMc1IA3Co8Yi/gyNnjChQDQ/2RhQoUID/9k=" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
            <div class="box">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
            <div class="box">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
            <div class="box">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Title of project</h3>
                <span>( 2022 )</span>
            </div>
        </div>

    </section>
    <!-- portfolio section ends -->


    <!-- contact section starts -->
    <section class="contact" id="contact">

        <h1 class="heading"><span>Contact Me</span></h1>
        <form action="" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="Enter your name" class="box" required>
                <input type="email" name="email" placeholder="Enter your E-mail" class="box" required>
            </div>

            <input type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
            <textarea name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>

            <input type="submit" value="SEND MESSAGE" class="btn" name="send">

        </form>

    </section>
    <!-- contact section ends -->









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