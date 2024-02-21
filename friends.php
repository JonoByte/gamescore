<?php

require __DIR__ . '/src/config/pdo.php';
require_once('src/model/database/dao/FriendsDAO.php');

// Replace with your database connection details
$host = 'localhost:3308';
$dbname = 'gamescore';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Instantiate the FriendsDAO with the database connection
$friendsDAO = new FriendsDAO($pdo);

// Replace 'user_id' with the actual user ID
$userId = 'user_id';

// Retrieve the list of friends
$friends = $friendsDAO->getFriendsByUserId($userId);
?>

<?php

//måste vara inloggad för att komma åt friends
/* //Användaren är inte inloggad, omdirigera till login-sidan

// session_start();
// if (!isset($_SESSION['username'])) {
//     header('Location: login.php');
//     exit;
// } */
?>

<!doctype html>
<html lang="en">

<head>
    <title>Gamescore</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="CSS/friends.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-xxl">
        <header>
            <!-- <img src="img/header-pic.jpg" alt="lololol"> -->
            <div class=header-text>
                <h1>Gamescore</h1>
                <h2>Play, Review, Connect Your Gaming Community Awaits!</h2>
                <h3>Home</h3>
            </div>
        </header>
        <div class="nav">
            <a href="main.php">Home</a>
            <a href="browse.php">Browse</a>
            <a href="forum/forums.html">Forum</a>
            <a href="friends.php">Friends</a>
            <a href="login.php">Login</a>
        </div>

        <div class="main">
            <div class="container">
                <img class="profile" src="img/profile.jpg" alt="profile picture">
                <h1>Username</h1>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Friend</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Friend</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Friends Username:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="friendsrequests.php"><button type="button" class="btn btn-primary">Friends Requests</button></a>
        </div>

        <div id="friend">
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach ($friends as $friend) : ?>
                        echo '<div class="col-lg-3 col-md-3 col-sm-6">';
                            echo '<div class="card mb-4">';
                                echo '<img src="' . $friend['profilepic'] . '" alt="Profile Picture">';
                                echo '<div class="card-body">';
                                    echo '<p><?php echo $friend['id']; ?></p>';
                                    echo '<a href="#" class="btn btn-primary">Send message</a>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>











    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>