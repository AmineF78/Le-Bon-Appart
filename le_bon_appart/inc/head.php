<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
    <style>
        /* Styles pour la barre de navigation */
        .navbar {
            background-color: #333;
            padding: 10px;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar li {
            margin-right: 10px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .dropdown-content a{
            color: black;
        }
        .navbar .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .navbar .dropdown:hover .dropdown-content {
            display: block;
        }
        /* Styles pour les annonces */
        .annonce-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        
        .annonce h2 {
            font-weight: bold;
            text-transform: uppercase;
        }
        .annonce p {
            margin-top: 10px;
        }
        .annonce {
         width: calc(33.33% - 10px);
        background-color: #f9f9f9;
        float: left;
        box-sizing: border-box;
        padding: 10px;
        margin-bottom: 20px;

        }

        .reservation-label {
  display: inline-block;
  padding: 4px 8px;
  background-color: #333;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  border-radius: 4px;
}

.reservation-label::before,
.reservation-label::after {
  content: "";
  display: block;
  width: 16px;
  height: 2px;
  background-color: #fff;
  margin: 2px 0;
}

.reservation-label::before {
  transform: rotate(45deg);
}

.reservation-label::after {
  transform: rotate(-45deg);
}



@media (max-width: 768px) {
    .annonce {
        width: 50%;
    }
}

@media (max-width: 480px) {
    .annonce {
        width: 100%;
    }
}

    </style>
</head>
<body>
    <!-- Barre de navigation -->
    <div class="navbar">
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li class="dropdown">
                <a href="#">Annonces</a>
                <div class="dropdown-content">
                    <a href="ajouter_annonce.php">Ajouter une annonce</a>
                    <a href="consulter_annonces.php">Consulter toutes les annonces</a>
                </div>
            </li>
        </ul>
    </div>