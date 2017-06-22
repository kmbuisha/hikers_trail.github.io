<?php
include '../includes/connection.php';
include '../includes/header.php';

$id = $_GET['id'];

if (isset($_POST['action']) && $_POST['action'] == 'insert') {
    print  'Your information has been submitted';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $insert_query = "INSERT INTO reviews (name, surname, rating, comment) VALUE ('$name','$surname','$rating', '$comment')";

    $result = mysqli_query($conn, $insert_query);

}

$select_query = "SELECT * FROM reviews";
$result = mysqli_query($conn, $select_query);

$row = mysqli_fetch_assoc($result);

mysqli_close($conn);

?>
<style>

    .container {
        border-bottom: 2px solid;
        border-top: 1px solid;
        margin-right: 50px;
    }
    .marker {
        margin-right: 50px;

    }
</style>
<div>
    <form>
        <div class="clearfix">
            <input type="hidden" name="action" value="insert">

            <div class="six columns">
                <img class="child-image" src="../images/1.jpg" alt="Image-not-found">
            </div>
            <div class="six columns">
                <label for="name">Name</label>
                <input class="u-full-width" type="text" placeholder="Name" name="name">
            </div>
            <div class="six columns">
                <label for="surname">Surname</label>
                <input class="u-full-width" type="text" placeholder="surname" name="name">
            </div>
            <div class="six columns">
                <label for="rating">Rating</label>
                <select class="u-full-width" id="exampleRecipientInput" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="six columns">
                <label for="exampleMessage">Review Image</label>
                <textarea name="comment" class="u-full-width"></textarea>
                <input class="button-primary" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>

<div class="container">
    <article class="marker"> Kevin Mbuisha 8</article>
    <p class="marker"> I found the hike to be amazing and would recommend it to many people.</p>
</div>

<div class="container">
    <article> Kevin Mbuisha 8</article>
    <p> I found the hike to be amazing and would recommend it to many people.</p>
</div>


<?php
include '../includes/footer.php';
?>
