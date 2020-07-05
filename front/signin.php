<?php
require_once("../phpfiles/functions.php");

$error = '';
$userName = '';
$userPass = '';
$userPhone = '';
$userStreet = '';
$userPostal = '';
$userCity = '';
$userCountry = '';

function cleanChains($chain)
{
    $chain = trim($chain);
    $chain = stripslashes($chain);
    $chain = strip_tags($chain, "");
    $chain = htmlspecialchars($chain);
    return $chain;
}

function formVal()
{
    global $error, $userName, $userPass, $userPhone, $userStreet, $userPostal, $userCity, $userCountry;
    $valida = true;

    if (empty($_POST['txtEmailS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The e-mail is empty, please fill it.</label></p>';
    } else {
        $userName = cleanChains($_POST['txtEmailS']);
    }

    if (empty($_POST['txtPasswordS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The password is empty, please fill it.</label></p>';
    } else {
        $userPass = cleanChains($_POST['txtPasswordS']);
    }

    if (empty($_POST['txtPhoneS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The phone is empty, please fill it.</label></p>';
    } else {
        $userPhone = cleanChains($_POST['txtPhoneS']);
    }

    if (empty($_POST['txtStreetS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The street name is empty, please fill it.</label></p>';
    } else {
        $userStreet = cleanChains($_POST['txtStreetS']);
    }

    if (empty($_POST['txtPostalS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The postal code is empty, please fill it.</label></p>';
    } else {
        $userPostal = cleanChains($_POST['txtPostalS']);
    }

    if (empty($_POST['txtCityS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The city is empty, please fill it.</label></p>';
    } else {
        $userCity = cleanChains($_POST['txtCityS']);
    }

    if (empty($_POST['txtCountryS'])) {
        $valida = false;
        $error .= '<p> <label class="text-danger">The country is empty, please fill it.</label></p>';
    } else {
        $userCountry = cleanChains($_POST['txtCountryS']);
    }


    return $valida;
}

if (isset($_POST['btnSubmit'])) {
    if (formVal()) {
        if (checkUser($userName)) {
?>
            <div class="row mb-3 mt-3">
                <div class="col">
                    <div class="alert alert-warning text-center" role="alert">
                        The user: <?= $userName; ?> already exists. Please <a href="reservation.php">login</a> or sign-up with another e-mail.
                    </div>
                </div>
            </div>
        <?php
        } else {
            addUser($userName, $userPass, $userPhone, $userStreet, $userPostal, $userCity, $userCountry);
        ?>
            <div class="row mb-3 mt-3">
                <div class="col">
                    <div class="alert alert-warning text-center" role="alert">
                        User succesfully created. You are being redirected to login page.
                    </div>
                </div>
            </div>
<?php
            header('Refresh:2; reservation.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
    <meta charset="utf-8" />
    <title>Hilbert Hotel - Sign in</title>
    <!-- metas -->
    <meta name="description" content="Hotel WebApp Proyect" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS:fontawesome, bootstrap, alertify custom -->
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/front.css" />
    <!-- JQuery, alertify, bootstrap bundle -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    ?>

    <main class="container">

        <div class="row justify-content-center text-center m-5">
            <div class="col-8" id="sign-in">
                <h4>Sign in</h4>
                <form action="<?php $_PHP_SELF ?>" method="POST">

                    <div class="form-group">
                        <label for="txtEmailS">Email address</label>
                        <input type="email" class="form-control" id="txtEmailS" name="txtEmailS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtPasswordS">Password</label>
                        <input type="password" class="form-control" id="txtPasswordS" name="txtPasswordS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtPhoneS">Phone</label>
                        <input type="text" class="form-control" id="txtPhoneS" name="txtPhoneS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtStreetS">Street name</label>
                        <input type="text" class="form-control" id="txtStreetS" name="txtStreetS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtPostalS">Postal code</label>
                        <input type="text" class="form-control" id="txtPostalS" name="txtPostalS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtCityS">City</label>
                        <input type="text" class="form-control" id="txtCityS" name="txtCityS" required />
                    </div>

                    <div class="form-group">
                        <label for="txtCountryS">Country</label>
                        <input type="text" class="form-control" id="txtCountryS" name="txtCountryS" required />
                    </div>

                    <button id="btnSubmit" name="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </main>

    <?php
    loadFooter();
    ?>

    <script>
        $(document).ready(function() {
            console.log("ready!");
        });
    </script>
</body>

</html>