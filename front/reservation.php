<?php
require_once("../phpfiles/functions.php");
?>

<!DOCTYPE html>
<html lang="en-UK">

<head>
    <meta charset="utf-8" />
    <title>Santa Clara - Hotel</title>
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
        <section class="row text-center m-5">
            <div class="col-6" id="login">
                <h4>Log in</h4>
                <form>
                    <div class="form-group">
                        <label for="txtEmailL">Email address</label>
                        <input type="email" class="form-control" id="txtEmailL" name="txtEmailL">
                    </div>
                    <div class="form-group">
                        <label for="txtPasswordL">Password</label>
                        <input type="password" class="form-control" id="txtPasswordL" name="txtPasswordL">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6" id="sign-in">
                <h4>Sign in</h4>
                <form>
                    <div class="form-group">
                        <label for="txtEmailS">Email address</label>
                        <input type="email" class="form-control" id="txtEmails" name="txtEmailS">
                    </div>
                    <div class="form-group">
                        <label for="txtPasswordS">Password</label>
                        <input type="password" class="form-control" id="txtPasswordS" name="txtPasswordS">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <?php
    loadFooter();
    ?>

</body>

</html>

</html>