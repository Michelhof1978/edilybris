<?php include("../head.php"); ?>

<title></title>
 <meta name="description" content="">

<style>
     include('C:/wamp64/www/edilybris/head.php');
   
</style>
</head>

 <?php   include('C:/wamp64/www/edilybris/header.php'); ?>

 <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

 <main>
        <article class="article-container">
            <section class="intro">
                <h1>Le Portrait de l'écrivain: [Nom de l'écrivain]</h1>
                <div class="author-image">
                    <img src="https://via.placeholder.com/400" alt="Image de l'écrivain">
                </div>
            </section>
            
            <section class="biographie">
                <h2>Biographie</h2>
                <p> [Contenu de la biographie de l'écrivain...] </p>
            </section>

            <section class="oeuvres">
                <h2>Les grandes œuvres de [Nom de l'écrivain]</h2>
                <ul>
                    <li><span class="work-title">[Titre de l'œuvre]</span> – [Date de publication]</li>
                    <li><span class="work-title">[Titre de l'œuvre]</span> – [Date de publication]</li>
                    <li><span class="work-title">[Titre de l'œuvre]</span> – [Date de publication]</li>
                </ul>
            </section>

            <section class="citation">
                <blockquote class="quote">
                    <p>“[Citation célèbre de l'écrivain]”</p>
                </blockquote>
            </section>

            <section class="conclusion">
                <p>Dans cet article, nous avons exploré la vie et les œuvres de [Nom de l'écrivain], un écrivain dont l'impact littéraire continue de résonner aujourd'hui.</p>
            </section>
        </article>
    </main>
    

   

 
 <?php include("include('C:/wamp64/www/edilybris/footer.php');"); ?>
 <script>document.addEventListener("DOMContentLoaded", function() {
    // Animation des sections au défilement
    const sections = document.querySelectorAll('.biographie, .oeuvres, .citation, .conclusion');

    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY + window.innerHeight;
        
        sections.forEach(section => {
            if (section.offsetTop < scrollPosition) {
                section.classList.add('visible');
            }
        });
    });

    // Classe visible pour activer l'animation
    const style = document.createElement('style');
    style.innerHTML = `
        .visible {
            opacity: 1 !important;
            transition: opacity 1s ease-out;
        }
    `;
    document.head.appendChild(style);
});
</script>
</body>
</html>