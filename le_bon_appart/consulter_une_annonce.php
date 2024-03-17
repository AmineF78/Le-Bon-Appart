<?php
require_once ("inc/init.php");
require_once ("inc/head.php");

// Vérifier si l'ID de l'annonce est passé en paramètre
if (isset($_GET['id'])) {
    $advertId = $_GET['id'];

    // Récupérer les détails de l'annonce
    $query = "SELECT * FROM advert WHERE id = '$advertId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Annonce non trouvée.";
        exit();
    }

    // Vérifier si le formulaire de réservation est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reservationMessage = $_POST["reservation_message"];

        // Mettre à jour le champ reservation_message de l'annonce
        $updateQuery = "UPDATE advert SET reservation_message = '$reservationMessage' WHERE id = '$advertId'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            echo "Réservation effectuée avec succès !";
            // Redirection vers la page "Consulter toutes les annonces" après la réservation
            header("Location: consulter_annonces.php");
            exit();
        } else {
            echo "Erreur lors de la réservation : " . mysqli_error($conn);
        }
    }
} else {
    echo "ID de l'annonce non spécifié.";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulter une annonce</title>
   
</head>
<body>
    <h1>Consulter une annonce</h1>

    <h2><?php echo strtoupper($row["title"]); ?></h2>
    <p>Description : <?php echo $row["description"]; ?></p>
    <p>Code postal : <?php echo $row["postal_code"]; ?></p>
    <p>Ville : <?php echo $row["city"]; ?></p>
    <p>Type : <?php echo $row["type"]; ?></p>
    <p>Prix : <?php echo $row["price"]; ?></p>

    <?php if (!empty($row["reservation_message"])) : ?>
        <p>Message de réservation : <?php echo $row["reservation_message"]; ?></p>
    <?php endif; ?>

    <form method="POST" action="consulter_annonce.php?id=<?php echo $advertId; ?>">
        <label for="reservation_message">Message de réservation :</label>
        <textarea name="reservation_message"></textarea><br><br>

        <input type="submit" value="Je réserve">
    </form>

<?php 
require_once ("inc/foot.php");
?>
