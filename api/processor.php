<?php

// load the document root to a constant
// to be used for reference to relative
// paths to other files
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

// require the data reference for dishes
require_once(DOC_ROOT . "/data/dishes.php");

// load $params with the parameters passed
$params = $_POST;

// sanitize the parameters
$fullName = htmlentities($params['fullName']);
$genderCode = htmlentities($params['gender']);
$dishCode = htmlentities($params['dish']);

// if one or more of the parameters were not supplied,
// redirect to 406 page
if (trim($fullName) == "" || $genderCode == "" || $dishCode == "") {
    header("Location:/views/406.php");
}

//declare globals
$genderCode;
$genderPronoun;

//prepare the pronoun to be adequate to gender
if ($genderCode == 0) {
    $genderPronoun = "he";
} else if ($genderCode == 1) {
    $genderPronoun = "she";
} else if ($genderCode == 2) {
    $genderPronoun = "they";
} else {
    $genderPronoun = "xe";
}

// check which dish was selected through
// the code submitted and build the
// markup accordingly
switch ($dishCode) {
    case 0:
        $dishMarkup = buildRecomendationMarkup(0);
        break;
    case 1:
        $dishMarkup = buildRecomendationMarkup(1);
        break;
    case 2:
        $dishMarkup = buildRecomendationMarkup(2);
        break;
}

// function that builds the markup for the response to 
// the user according to the choice made in the form
// and submitted
function buildRecomendationMarkup($dishCode)
{
    $dishes = fillDishes(); // load the array of dishes to $dishes
    $dish = $dishes[$dishCode]; // get the dish chosen by the user

    $dishName = $dish->name; // get the dish name
    $restaurantName = $dish->restaurant; // get the restaurant name that serves the dish
    $website = $dish->website; // get the website of the dish
    $map = $dish->map; // get the google maps reference for the restaurant
    $city = $dish->city; // get the restaurant's city
    $country = $dish->country; // get the restaurant's country
    $fullName = $GLOBALS["fullName"]; // get the full name of the user according to submission


    //build a card with the recomendation and return the code
    return <<<EOT

        <p> 
        <strong>$fullName</strong> has indicated that  would prefer having <strong>$dishName</strong>, so we have the following recommendations below. Enjoy!</p>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">$restaurantName</h5>
                <p class="card-text">This restaurant is located in <strong>$city</strong>, <strong>$country</strong>.</p>
                <p class="card-text">Visit their website <a href="$website" target="_new">here<a></p>
                <p class="card-text"><small class="text-muted">Below is how to get there.</small></p>
            </div>
            <iframe class="card-img-top" src="$map" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <a class="btn btn-primary btn-lg" href="$website" target="_new" role="button">Learn more</a>

EOT;
} // end of function buildRecomendationMarkup


?>

<!doctype html>
<html lang="en-US">
<?php require_once(DOC_ROOT . "/artifacts/head.php"); ?>

<body>

    <?php require_once(DOC_ROOT . "/artifacts/navBar.php"); ?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Thank you for your form submission!</h1>
            <p class="lead"></p>
            <hr class="my-4">
            <!-- get the dish information markup to feedback to the user -->
            <?php echo $dishMarkup; ?>
        </div>
    </div>
</body> <?php require_once(DOC_ROOT . "/artifacts/footer.php"); ?>

</html>