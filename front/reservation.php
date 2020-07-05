<?php
require_once("../phpfiles/functions.php");

///////LOGIN VALIDATION/////////
$error = '';
$userName = '';
$userPass = '';

function cleanChains($chain) {
    $chain = trim($chain); 
    $chain = stripslashes($chain); 
    $chain = strip_tags($chain, ""); 
    $chain = htmlspecialchars($chain); 
    return $chain;
}

function formVal() {
    global $error, $userName, $userPass;
    $valida = true;

    if( empty($_POST['txtEmailL']) ) {
        $valida = false;
        $error .= '<p> <label class="text-danger">Your email address is mandatory</label></p>';
    } else {
        $userName = cleanChains($_POST['txtEmailL']);
    }

    if( empty($_POST['txtPasswordL']) ) {
        $valida = false;
        $error .= '<p> <label class="text-danger">La contraseña no puede estar vacía</label></p>';
    } else {
        $userPass = cleanChains($_POST['txtPasswordL']);
    }

    return $valida;
}

if ( isset($_POST['btnSubmit']) ) {
    if (formVal()) {
        doLogin();
    }
}
?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
    <meta charset="utf-8" />
    <title>Hilbert Hotel</title>
    <!-- metas -->
    <meta name="description" content="Hotel WebApp Proyect" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS:fontawesome, bootstrap, custom -->
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/front.css" />
    <!-- JQuery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    loadNavbar();
    ?>

    <main class="container">
        <section class="row h-100 text-center m-5">
            <div class="col-6" id="login">
                <h4>Log in</h4>
                <form action="<?php $_PHP_SELF ?>" method="POST">
                    <div class="form-group">
                        <label for="txtEmailL">Email address</label>
                        <input type="email" class="form-control" id="txtEmailL" name="txtEmailL">
                    </div>
                    <div class="form-group">
                        <label for="txtPasswordL">Password</label>
                        <input type="password" class="form-control" id="txtPasswordL" name="txtPasswordL">
                    </div>
                    <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-6 my-auto">
                <p>If you are already our client you can log in with your e-mail and password.</p>
                <p>If you had never been in our hotel, please sign up and book a romm</p>
                <a href="signin.php" class="btn btn-info">Sign in</a>
            </div>

        </section>
    </main>

    <?php
    loadFooter();
    ?>

    <script>
        $(document).ready(function() {
            //console.log("ready");
            // following 4 changes the color of the focused text input field LOGIN
            $("#txtEmailL").focus(function() {
                $("#txtEmailL").addClass("colorea");
            });

            $("#txtEmailL").blur(function() {
                $("#txtEmailL").removeClass("colorea");
            });

            $("#txtPasswordL").focus(function() {
                $("#txtPasswordL").addClass("colorea");
            });

            $("#txtPasswordL").blur(function() {
                $("#txtPasswordL").removeClass("colorea");
            });


        });
    </script>

</body>

</html>

</html>