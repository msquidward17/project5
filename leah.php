<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php include "inc/html-top.php";?>

    <body class = "student-page">
        <header class="static">
            <div class = "container">
                <h1>Leah Goodwin</h1>
            </div>
        </header>
        <nav id="cssmenu">
            <div class="container">
                <ul>    
                    <li class="current">Leah</li>
                    <li><a href = "list.php">Showcase</a></li>
                    <li><a href = "index.php" > Home </a></li>
                </ul>
            </div>
        </nav>
        <main>
            <article  class="gcontainer glayout">
                
                <section class = "intro boxy">
                    <img class  = "propic reverse" src="images/me.jpg" alt="leah">
                    <p>I'm currently a student at the University of Rochester, class of 2021. I'm majoring in Computer Science with a focus in Human Computer Interaction. I'm also minoring in International Relations. When I'm not busy building complex worlds, I like to write and draw in my spare time. My main goal is to pursue a career in the "creative side" of computer science, more specifically Front-End Web Development and Video Game Development.</p>
                </section>

                <section class = "elife boxy">
                    <h2>Early Life</h2>
                    <p>Ever since I was young, I've had a natural affinity for writing, creative writing specifically. So I spent years creating complex worlds and figuring out how they would operate if it was the setting for a video game. It wasn't until I was introduced to the book series "The 39 Clues" that I realized how websites could be used as a medium for creativity. The series had a website dedicated to expanding the world presented inside the book in ways I had never seen before, with games, puzzles and an overall interactive website that engaged users. It was then that I started writing designs for websites for worlds I created, thus marking my start into being interested in visual media.</p>
                </section>

                <section class = "courses boxy">
                    <h2>Relevant CS Coursework</h2>
                    <ul>
                        <li>CSC 170: Intro to Web Development</li>
                        <li>CSC 171: Intro to Computing Science</li>
                        <li>CSC 172: Data Structures and Algorithms</li>
                        <li>CSC 173: Computation and Formal Systems</li>
                        <li>CSC 186: Video Game Development</li>
                        <li>CSC 273W: Writing in Computer Science</li>
                    </ul>
                </section>

                <section class = "extrac boxy">
                    <h2>Extracurricular Activities</h2>
                    <ul>
                        <li>Archery (2018-Present)</li>
                        <li>Table Tennis (2018-Present)</li>
                        <li>Juggling (2018-Present)</li>
                    </ul>
                </section>
            </article>
        </main>

        <footer class = "foo">
        	<div class="container">
          		<a href="http://csc174.org/lab01/lgoodwi3/" target="_blank" class="leah">Leah's Original Lab 1</a>
      	    </div>
        </footer>
        <?php include "inc/scripts.php"; ?>
    </body>
</html>