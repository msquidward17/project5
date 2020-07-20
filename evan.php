<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php include "inc/html-top.php";?>

    <body class = "student-page">
    	<header class="static">
            <div class="container">
        			<h1>Evan Pollack</h1>
            </div>
    	</header>

    	<nav id="cssmenu">
            <div class="container">
                <ul>
                    <li class="current"> Evan </li>
                    <li><a href="list.php">Showcase</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>

        <main>
            <article class = "gcontainer glayout">
                <section class = "intro boxy">
                    <img class = "propic" src="images/self.png" alt="me">
                    <p>I am a student at the University of Rochester, which is located in Rochester, NY. My major is undecided, but I plan on minoring in computer science. I grew up in the Washington D.C. area. I have also been involved in extracurricular activities such as running competitively and snowboarding. In my free time, I enjoy activities such as hiking, biking, and kayaking.</p>
                </section>

                <section class = "elife boxy">
                    <h2>Early Life</h2>
                    <p>I was born in Washington D.C. but have always lived in Maryland with my parents and two younger brothers, who are twins. During the first 10 years of my life, my family and I lived in Bethesda, MD. While living there, I attended Rosemary Hills Elementary School. In 2009, my family and I moved further out from D.C. to Sandy Spring, MD. After the move, I attended Barrie School and James Hubert Blake High School. During high school, my interest in STEM grew, leading me to explore many subjects. Out of the courses I took during those 4 years, AP Computer Science piqued my interest the most, inspiring me to pursue it in college.</p>
                </section>

                <section class = "courses boxy">
                    <h2>Relevant CS Coursework</h2>
                    <ul>
                        <li>CSC 170: Intro to Web Development</li>
                        <li>CSC 171: Intro to Computing Science</li>
                        <li>CSC 172: Data Structures and Algorithms</li>
                        <li>CSC 210: Web Programming</li>
                    </ul>
                </section>

                <section class = "extrac boxy">
                    <h2>Extracurricular Activities</h2>
                    <ul>
                        <li>Member of ΣΦΕ (2019-Present)</li>
                        <li>Snowboarding (2012-Present)</li>
                        <li>Cross Country and Track (2011-2019)</li>
                    </ul>
                </section>
            </article>
        </main>

        <footer class = "foo">
            <div class="container">
                <a href="http://csc174.org/lab01/epollack/" target = "_blank" class="evan">Evan's Original Lab 1</a>
            </div>
        </footer>
        <?php include "inc/scripts.php"; ?>
    </body>
</html>