<?= require_once "./components/components.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chew Yi Xin</title>
        <?= head(); ?>
    </head>
    <body>
        <header>
            <?= navbar(); ?>
        </header>

        <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Name: <strong>Chew Yi Xin</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">Aspiring Developer</p>
            <img src="../static/img/portraitpic-01.jpg"  alt="a picture of me smiling" class="intro__img">
        </section>

        <!-- My interests, can change to fit whatever I want it to be -->
        <section class="my-interests" id="interests">
            <h2 class="section__title section__title--interests">Interests</h2>
            <div class="interests">
                <div class="interest">
                    <h3>Full-Stack Development, FinTech</h3>
                    <p>
                        I am able to code with Python, CSS, and HTML at the introductory level, with some 
                        knowledge in Python: Pandas as well which I picked up from taking up external courses on my own time.
                        I will be picking up SQL, Java and JS in the near future. I have a particularly keen interest in 
                        the development and software engineering side of things. I also have a slight interest in FinTech, as
                        the I find the world of finance deeply complex and intriguing.
                    </p>
                    <p>
                        I am a member of SMU .Hack, a student-led interest group related to tech, and I am 
                        excited to learn more, and hopefully offer something to others as well.
                    </p>
                </div>

                <div class="interest">
                    <h3>Non-Academic Interests</h3>
                    <p>
                        I also have an interest in sports in general and find it an effective way for me to stay active
                        and have fun at the same time. In my free time, I go to the gym occasionally and also practice Judo.
                        Currently, I am a member of SMU Judo.
                    </p>
                    <p>
                        Aside from sports and fitness, I also enjoy spending quality time with my friends, playing Mahjong, and 
                        having the occasional day or two to myself to indulge in netflix shows and TV series. Recently, 
                        I have also developed an interest in photography and editing, something which I do on my
                        own free time. 
                </div>
            </div>

            <div class="skill__buttons">
                <p>
                    <button class="skill__button--individual">Python</button>
                    <button class="skill__button--individual">Pandas</button>
                    <button class="skill__button--individual">HTML</button>
                    
                </p>
                <p>
                    <button class="skill__button--individual">CSS</button>
                    <button class="skill__button--individual">PHP</button>
                    <button class="skill__button--individual">MySQL</button>
                    <button class="skill__button--individual">Selenium</button>
                </p>
                
            </div>
        
            <a href="#showcase" class="btn_light">My Showcase</a>
            <a href="#project" class="btn_light">My Projects</a>
        </section>


        <!-- About Me -->
        <section class="about-me" id="about">
            <h2 class="section__title section__title--about">About Me</h2>
            <p class= "section__subtitle section__subtitle--about">Tech and Finance enthusiast <br/> Undergraduate, Singapore Management University</p>

            <div class="about-me__body">
                <p>Hey there! I am Yi Xin. Currently, I am studying in Singapore Management University, pursuing a degree
                    in Information Systems. I have a keen interest in both Tech and Finance, and would like to pursue a career
                    in either of these two industries. 
                </p>
                <p>In my free time, I enjoy doing both team and individual sports, watching videos, and spending quality 
                    time with my friends. Occasionally, I do Judo as well. I also have a slight interest in photography and 
                    editing photos too, but nothing too serious.
                </p>
                <p>This is the first project I've worked on so I do not have much to showcase. The images attached below are just some photos
                    I took in the past and edited in my free time. I will update this page again once I have more projects in 
                    the future. For now, do take a look at the photos below. Thanks for taking a look at my little project!  
                </p>

            </div>
            
            <img src="../static/img/portraitpic-02.jpg" width="265" height="340" alt="a picture of me smiling 2" class= "about-me__img">

        </section>


        <!-- My Showcase or any other heading, changeable -->
        <section class="my-showcase" id="showcase">
            <h2 class="section__title--showcase">Showcase</h2>
            <!-- <p class="section__subtitle">A selection of my range of photos</p> -->

            <div class="showcases">
                <!-- Portfolio item 01 -->
                <a href="../templates/showcase-1.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-1.jpg" alt="" width="" height="" class="showcase__img">
                </a>
                
                <!-- Portfolio item 02 -->
                <a href="../templates/showcase-2.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-2.jpg" alt="" width="" height="" class="showcase__img">
                </a>
                
                <!-- Portfolio item 03 -->
                <a href="../templates/showcase-3.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-3.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 04 -->
                <a href="../templates/showcase-4.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-4.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 05 -->
                <a href="../templates/showcase-5.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-5.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 06 -->
                <a href="../templates/showcase-6.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-6.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 07 -->
                <a href="../templates/showcase-7.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-7.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 08 -->
                <a href="../templates/showcase-8.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-8.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 09 -->
                <a href="../templates/showcase-9.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-9.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 10 -->
                <a href="../templates/showcase-10.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-10.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 11 -->
                <a href="../templates/showcase-11.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-11.jpg" alt="" width="" height="" class="showcase__img">
                </a>

                <!-- Portfolio item 12 -->
                <a href="../templates/showcase-12.php" class="showcase__item">
                    <img src="../static/img/showcase_images/showcase-12.jpg" alt="" width="" height="" class="showcase__img">
                </a>


            </div>
        </section>


        <!-- Coding projects -->
        <section class="my-project" id="project">
            <h2 class="section__title--project">Projects</h2>
            <!-- <p class="section__subtitle--projects">Projects that I've done so far</p> -->

            <div class="projects">
                <!-- Project item 01 -->
                <a href="../templates/project-1.php" class="project__item">
                    <img src="../static/img/project-1-images/project1-1.png" alt="" width="" height="" class="project__img">
                </a>

                <!-- <a href="../templates/portfolio-item-12.html" class="project__item">
                    <img src="../static/img/showcase_images/portfolio-12.jpg" alt="" width="" height="" class="project__img">
                </a> -->

            </div>

            <a href="#home" class="btn_dark">Back to Top</a>
            
        </section>
        

        <!-- Footer -->
        <?= footer(); ?>

    </body>
</html>