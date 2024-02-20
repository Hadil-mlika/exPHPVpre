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
<!---->
<!--        <div class = "header-inner text-white text-center">-->
<!--            <div class = "container grid">-->
<!--                <div class = "header-inner-left">-->
<!--                    <h1>your most trusted<br> <span>health partner</span></h1>-->
<!--                    <p class = "lead">the best match services for you</p>-->
<!--                    <p class = "text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, nulla odit esse necessitatibus corporis voluptatem?</p>-->
<!--                    <div class = "btn-group">-->
<!--                        <a href = "#" class = "btn btn-white">Learn More</a>-->
<!--                        <a href = "#" class = "btn btn-light-blue">Sign In</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class = "header-inner-right">-->
<!--                    <img src = "images/header.png">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
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

        <!-- contact section -->
        <section id = "contact" class = "contact py">
            <div class = "container grid">

                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">Prendre Rendez vous </h3>
                        <p class = "text text-md">Bienvenue </p>
                    </div>
                    <form  action="traitement_formulaire.php" method="post" onsubmit="return validateForm()">
                        <div class = "form-element">
                            <input type = "text" id="nom" name="nom" required class = "form-control" placeholder="nom">

                        </div>

                        <div class = "form-element">
                            <input type="text"  id = "prenom" name="prenom" required class = "form-control" placeholder="prenom">
                        </div>
                        <div class = "form-element">
                            <input type="email"  id ="email"  name="email" required  class = "form-control" placeholder="Your email">
                        </div>
                        <div class = "form-element">
                            <input type="tel" id ="numero_telephone"  name="numero_telephone" class = "form-control" placeholder="Your phone"required>

                        </div>

                        <div class = "form-element">
                            <input  type="date"  name="date_rendezvous" required class = "form-control" required>

                        </div>
                        <button type = "submit" class = "btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Send
                        </button>
                    </form>




                    <script>
                        function validateForm() {

                            var emailformat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            var phoneformat =
                                /^(00216|\+216)?(97|95|96|20)\d{6}$|(00216|\+216)?\d{8}$/;

                            var emailInput = document.getElementById('email');
                            var phoneInput = document.getElementById('numero_telephone');

                            if (!emailformat.test(emailInput.value)) {
                                alert('Veuillez entrer une adresse email valide.');
                                return false;
                            }

                            if (!phoneformat.test(phoneInput.value.replace(/\s/g, ''))) {
                                alert('Veuillez entrer un numéro de téléphone mobile tunisien valide.');
                                return false;
                            }

                            return true;
                        }
                    </script>


                </div>
            </div>
        </section>



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

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "images/logo.png">
                    </div>
                    <p class = "text text-md">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis saepe incidunt fugiat optio corporis ea!</p>
                    <address>
                        Medic Clinic <br>
                        69 Deerpark Rd, Mount Merrion <br>
                        Co. Dublin, A94 E9D3 <br>
                        Ireland
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        <li><a href = "#" class = "text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <p class = "text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, omnis.</p>
                    <ul class = "appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class = "fas fa-envelope"></i>
                            <span>revomedic@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class = "footer-links">
                <ul class = "flex">
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>