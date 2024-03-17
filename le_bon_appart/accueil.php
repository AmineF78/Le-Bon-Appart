<?php
require_once ("inc/init.php");

// Récupérer les 15 dernières annonces dans l'ordre antéchronologique
$query = "SELECT * FROM advert ORDER BY id DESC LIMIT 15";
$result = mysqli_query($conn, $query);

?>
<?php 
require_once ("inc/head.php");
?>

    <!-- Liste des annonces -->
    <div class="annonce-container">
        </style>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="annonce">
                <h2><?php echo strtoupper($row["title"]); ?></h2>
                <p>Description: <?php echo $row["description"]; ?></p>
                <p>Code postal: <?php echo $row["postal_code"]; ?></p>
                <p>Ville: <?php echo $row["city"]; ?></p>
                <p>Type: <?php echo $row["type"]; ?></p>
                <p>Prix: <?php echo $row["price"]; ?></p>
                <a href="consulter_une_annonce.php?id=<?php echo $row["id"]; ?>">Consulter l'annonce</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php 
require_once ("inc/foot.php");
?>
