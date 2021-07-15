<?= require_once "./components/components.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Showcase 12</title>
        <?= head(); ?>
    </head>
    <body>
        <header>
            <?= navbar(); ?>
        </header>
    

        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                The title of <strong>showcase 12</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">A short subtitle</p>
            <img src="../static/img/showcase_images/showcase-12.jpg"  alt="showcase-intro-img" class="intro__img">
            
        </section>

        <div class="portfolio-item-individual">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe et amet tenetur! 
                Fugit sequi optio corrupti fugiat ducimus consequatur incidunt?</p>
            <img src="../static/img/showcase_images/showcase-12.jpg" alt="" class="intro__display__img">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe et amet tenetur! 
                Fugit sequi optio corrupti fugiat ducimus consequatur incidunt?</p>
            <p>Voluptatibus, soluta blanditiis! Incidunt ea unde itaque illo molestiae eligendi 
                sint culpa nobis voluptas sapiente voluptate, magnam ipsum eius earum?</p>
            
            <a href="./index.php" class="btn_home">back to home</a>
            
        </div>

        <div class="comments"></div>
        
        <!-- Footer -->
        <?= footer() ?>

        <script>
            const comments_page_id = 12; // This number should be unique on every page
            fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
                document.querySelector(".comments").innerHTML = data;
                document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
                    element.onclick = event => {
                        event.preventDefault();
                        document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
                        document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
                        document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
                    };
                });
                document.querySelectorAll(".comments .write_comment form").forEach(element => {
                    element.onsubmit = event => {
                        event.preventDefault();
                        fetch("comments.php?page_id=" + comments_page_id, {
                            method: 'POST',
                            body: new FormData(element)
                        }).then(response => response.text()).then(data => {
                            element.parentElement.innerHTML = data;
                        });
                    };
                });
            });
        </script>


    </body>
</html>