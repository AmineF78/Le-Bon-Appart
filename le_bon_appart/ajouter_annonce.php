<?php
require_once ("inc/init.php");
?>


<?php 
require_once ("inc/head.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $title = $_POST["title"];
    $description = $_POST["description"];
    $postalCode = $_POST["postal_code"];
    $city = $_POST["city"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $reservationMessage = $_POST["reservation_message"];


    // Insérer les données dans la base de données
    $query = "INSERT INTO advert (title, description, postal_code, city, type, price, reservation_message) VALUES ('$title', '$description', '$postalCode', '$city', '$type', '$price','$reservationMessage')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Annonce ajoutée avec succès
        echo "Annonce ajoutée avec succès !";
    } else {
        // Erreur lors de l'ajout de l'annonce
        echo "Erreur lors de l'ajout de l'annonce : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une annonce</title>
 
</head>
<body>
    <h1>Ajouter une annonce</h1>
    
    <form method="POST" action="ajouter_annonce.php">
        <label for="title">Titre de l'annonce :</label>
        <input type="text" name="title" required><br><br>
        
        <label for="description">Description de l'annonce :</label>
        <textarea name="description" required></textarea><br><br>
        
        <label for="postal_code">Code postal :</label>
        <input type="text" name="postal_code" required><br><br>
        
        <label for="city">Ville :</label>
        <input type="text" name="city" required><br><br>
        
        <label for="type">Type d'annonce :</label>
        <select name="type" required>
            <option value="location">Location</option>
            <option value="vente">Vente</option>
        </select><br><br>
        
        <label for="price">Prix :</label>
        <input type="number" name="price" required><br><br>

        <label for="reservation_message">Message de réservation :</label>
        <input type="hidden" name="reservation_message"><br><br>
        


        
        <input type="submit" value="Ajouter l'annonce">
    </form>
</body>
</html>

<?php 
require_once ("inc/foot.php");
?>