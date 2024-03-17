<?php
require_once ("inc/init.php");
require_once ("inc/head.php");

$query = "SELECT * FROM advert ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="annonce">
        <h2><?php echo strtoupper($row["title"]); ?></h2>
        <p>Description: <?php echo $row["description"]; ?></p>
        <p>Code postal: <?php echo $row["postal_code"]; ?></p>
        <p>Ville: <?php echo $row["city"]; ?></p>
        <p>Type: <?php echo $row["type"]; ?></p>
        <p>Prix: <?php echo $row["price"]; ?></p>

        <?php if (!empty($row["reservation_message"])) : ?>
            <p class="reservation-label">Réservé</p>
        <?php endif; ?>

        <a href="consulter_une_annonce.php?id=<?php echo $row["id"]; ?>">Consulter l'annonce</a>
    </div>
<?php endwhile; ?>

<?php 
require_once ("inc/foot.php");
?>
