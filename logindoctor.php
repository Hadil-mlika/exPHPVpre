<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revo</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>










<!-- header -->
<header class = "header bg-blue">
    <nav class = "navbar bg-blue">
        <div class = "container flex">
            <a href = "index.html" class = "navbar-brand">
                <img src = "images/logo.png" alt = "site logo">
            </a>
            <button type = "button" class = "navbar-show-btn">
                <img src = "images/ham-menu-icon.png">
            </button>

            <div class = "navbar-collapse bg-white">
                <button type = "button" class = "navbar-hide-btn">
                    <img src = "images/close-icon.png">
                </button>
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">About</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Service</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Doctors</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Departments</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Blog</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">Contact</a>
                    </li>
                </ul>
                <div class = "search-bar">
                    <form>
                        <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "images/search-icon-dark.png">
                                </span>
                            <input type = "search" class = "search-control" placeholder="Search here">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>


</header>
<!-- end of header -->

<main>

    <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert notice">

    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php
        unset($_SESSION['message']); // Clear the session message after displaying
    }
    ?>

        </div>
    </label>

    <!-- sign in doctor  -->
    <section id = "contact" class = "contact py">
        <div class = "container grid">

            <div class = "contact-right text-white text-center bg-blue">
                <div class = "contact-head">

                    <h1>Connexion Médecin</h1>
                </div>
                <form action="traitement_login_medecin.php" method="post" onsubmit="return validateLoginForm()">

                    <div class = "form-element">
                        <input type="email"  id ="email" name="email" required  class = "form-control" placeholder="Your email">
                    </div>
                    <div class = "form-element">
                        <input type="password" id="mot_de_passe" name="mot_de_passe" required class = "form-control" placeholder="Your password"required>

                    </div>

                    <button type = "submit" class = "btn btn-white btn-submit">
                        <i class = "fas fa-arrow-right"></i> se connecter

                    </button>
                </form>


                <script>
                    function validateLoginForm() {

                        var emailInput = document.getElementById('email');
                        var passwordInput = document.getElementById('mot_de_passe');

                        if (emailInput.value.trim() === '' || passwordInput.value.trim() === '') {
                            alert('Veuillez remplir tous les champs.');
                            return false;
                        }

                        return true;
                    }
                </script>


            </div>
        </div>
    </section>
    <!-- end of contact section -->

    <!-- banner one -->
    <section id = "banner-one" class = "banner-one text-center">
        <div class = "container text-white">
            <blockquote class = "lead"><i class = "fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class = "fas fa-quote-right"></i></blockquote>
            <small class = "text text-sm">- Anonim Nano</small>
        </div>
    </section>
    <!-- end of banner one -->





    <!-- doctors section -->
    <section id = "doc-panel" class = "doc-panel py">
        <div class = "container">
            <div class = "section-head">
                <h2>Our Doctor Panel</h2>
            </div>

            <div class = "doc-panel-inner grid">
                <div class = "doc-panel-item">
                    <div class = "img flex">
                        <img src = "images/doc-1.png" alt = "doctor image">
                        <div class = "info text-center bg-blue text-white flex">
                            <p class = "lead">samuel goe</p>
                            <p class = "text-lg">Medicine</p>
                        </div>
                    </div>
                </div>

                <div class = "doc-panel-item">
                    <div class = "img flex">
                        <img src = "images/doc-2.png" alt = "doctor image">
                        <div class = "info text-center bg-blue text-white flex">
                            <p class = "lead">elizabeth ira</p>
                            <p class = "text-lg">Cardiology</p>
                        </div>
                    </div>
                </div>

                <div class = "doc-panel-item">
                    <div class = "img flex">
                        <img src = "images/doc-3.png" alt = "doctor image">
                        <div class = "info text-center bg-blue text-white flex">
                            <p class = "lead">tanya collins</p>
                            <p class = "text-lg">Medicine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of doctors section -->



</main>

<!-- custom js -->
<script src = "js/script.js"></script>
</body>
</html>