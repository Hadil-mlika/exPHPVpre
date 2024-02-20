<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rendezvous";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion à la base de données
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Récupérer la liste des rendez-vous depuis la base de données

$sqlRendezVous = "SELECT id_rendezvous, daterendezvous FROM rendezvouspatients";
$resultRendezVous = $conn->query($sqlRendezVous);
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
    <link rel = "stylesheet" href = "css/styles.css">
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



    <div class="container mt-4">
        <br>

        <h1>Liste des Rendez-vous</h1>
        <!-- Responsive Table Section -->
        <form action="traitement_accepter_refuser.php" method="post">
        <table class="responsive-table">
            <!-- Responsive Table Header Section -->
            <thead class="responsive-table__head">
            <tr class="responsive-table__row">
                <th class="responsive-table__head__title responsive-table__head__title--status">ID</th>
                <th class="responsive-table__head__title responsive-table__head__title--date">Date</th>
                <th class="responsive-table__head__title responsive-table__head__title--actions">Actions</th>
            </tr>
            </thead>
            <!-- Responsive Table Body Section -->


            <tbody class="responsive-table__body">
            <?php
            while ($row = $resultRendezVous->fetch_assoc()) {
                echo "<tr class='responsive-table__row'>";
                echo "<td class='responsive-table__body__cell'>{$row['id_rendezvous']}</td>";
                echo "<td class='responsive-table__body__cell'>{$row['daterendezvous']}</td>";
                echo "<td class='responsive-table__body__cell'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";

                // Use Bootstrap styled select element
                echo "<select name='decision_{$row['id_rendezvous']}' class='custom-select'>";
                echo "<option value='accepté'>Accepter</option>";
                echo "<option value='refusé'>Refuser</option>";
                echo "</select>";

                echo "</div>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>

        </table>

        <button type="submit" class="btn btn-primary mt-3 col-12">
            <i class="fas fa-arrow-right"></i> Valider
        </button>
        </form>
        <br>
    </div>




    <?php
    //
    $conn->close();
    ?>



</main>
<br>


<!-- custom js -->
<script src = "js/script.js"></script>
</body>
</html>