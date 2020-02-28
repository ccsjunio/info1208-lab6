<?php

define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once(DOC_ROOT . "/data/dishes.php");

//call the function to fill the array of dishes
$dishes = fillDishes();

//build option components for dishes
$dishSelectionMarkup = "";
//iterate through the array of dishes to build to options markup
foreach ($dishes as $dish) {
    $dishSelectionMarkup .= "<option value=$dish->code>$dish->name</option>";
}

?>

<!doctype html>
<html lang="en">

<?php require_once(DOC_ROOT . "/artifacts/head.php"); ?>

<body>

    <?php require_once(DOC_ROOT . "/artifacts/navBar.php"); ?>

    <div class="container">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Survey</h1>
                <p class="lead">Please, we kind ask you to complete our survey. Thank you!</p>
            </div>
        </div>

        <form id="submissionForm" action="/api/processor.php" method="POST">
            <div class="form-group row">
                <label for="inputFullName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fullName" class="form-control" id="inputFullName">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderChoiceMale" value="0">
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderChoiceFemale" value="1">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderChoiceOther" value="2">
                            <label class="form-check-label" for="gridRadios3">
                                Other
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0">Choose your favourit dish</legend>
                <div class="col-sm-10">
                    <select id="inputDish" name="dish" class="form-control">
                        <option value="" selected>Choose...</option>
                        <?php echo $dishSelectionMarkup; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div><!-- end of div class container -->