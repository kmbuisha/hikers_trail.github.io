<?php
include '../includes/connection.php';
include '../includes/header.php';

$id = $_GET['id'];
$insert_query = "INSERT INTO `images` (name) VALUES ('Lions Head'), ('Table Mountain')";
$result = mysqli_query($conn, $insert_query);

$select_query = "SELECT * FROM images where id = $id";
$result = mysqli_query($conn, $select_query);

mysqli_close($conn);

?>
        <div class="row" id="content">
            <a class="a" href="../php/reviews_page.php">
                <img class="main-image" src="../images/1.jpg" alt="Image-not-found" name="image">
            </a>
            <article class="rainbow"><?php echo $row['name'] ?></article>
        </div>

<?php
require '../includes/footer.php';
?>