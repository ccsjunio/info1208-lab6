<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
?>

<!doctype html>
<html lang="en">

<?php require_once(DOC_ROOT . "/artifacts/head.php"); ?>

<body>

    <?php require_once(DOC_ROOT . "/artifacts/navBar.php"); ?>

    <div class="container">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Sorry!</h1>
                <p class="lead">You should have filled all entries in the form!</p>
                <p class="lead">Go back <a href="/">here</a></p>
            </div>
        </div>
    </div> <!-- end of div class container -->