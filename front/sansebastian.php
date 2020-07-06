<?php

	if(isset($_POST['btnEnviar'])){
		$email = $_POST['txtEmail'];
		$subject = $_POST['txtSubject'];
		$message = $_POST['txtArea'];

		$destinatario = "info@fruteria.com";
		$asunto = "Contacto desde la web";

		//versión del protocolo de email
		$headers = "MIME-Version; 1.0 \r\n";
		//Tipo de email, texto plano o html y la codfificacion de caracteres
		$headers .= "Content-type: text/html; charset=iso-utf-8 \r\n";

		//De:
		$headers .= "From: ".$name." <".$email. "> \r\n";

		//direccion de resupuesta
		$headers .= "Reply-To: ".$name." <".$email. "> \r\n";

		//Copia
		$headers .= "Cc: marketing@fruteria.com; ventas@fruteria.com\r\n";

		//Copia oculta
		$headers .= "Bcc: marketing@fruteria.com; ventas@fruteria.com\r\n";

	$cuerpo = '<h2 style="color:#11111;font-size:14px">' . $subject . "</h2>";
	$cuerpo .= "El usuario " . $name . " con email " . $email . " Se ha puesto en contacto mediante el formulario web. Este es su comentario: <br>" . $message;

	if ( mail($destinatario,$asunto,$cuerpo,$headers) ){
		echo "El email se ha enviado correctamente. Gracias por contactarnos!";
	}else{
		echo "Ha habido un problema al enviar el correo. Por favor inténtelo más tarde";
	}

}

?>

<?php
require_once("../phpfiles/functions.php");
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

    <!-- ======= Carousel ======= -->
    <div id="carousel" class="carousel slide mb-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/misc/San_Sebastian_Donostia_Panoramic_1190583.jpg" class="d-block w-100 sliderImg" alt="Donostia panorama">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/donostia-2040819_1920.jpg" class="d-block w-100 sliderImg" alt="Raining in Donostia">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/san-sebastian2-1999686_1280.jpg" class="d-block w-100 sliderImg" alt="Coast line">
            </div>
            <div class="carousel-item">
                <img src="../img/misc/Pasarela_en_el_Puerto_de_Donostia.jpg" class="d-block w-100 sliderImg" alt="Port">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ======= End carousel ======= -->

    <main>
        <section class="row align-items-center m-3">
            <!-- Picture -->
            <div class="col-6 text-center">
                <img src="../img/misc/640px-San_Sebastian_Beach.jpg" alt="Donostia beach" class="w-75" />
            </div>
            <!-- End Picture -->
            <div class="col-4 text-center">
                <form action="<?php $_PHP_SELF ?>" method="POST">
                    <h6>Contact us!</h6>
                    <div class="form-group">
                        <input class="form-control" name="txtEmail" id="txtEmail" type="email" placeholder="Your e-mail" requiered>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="txtSubject" id="txtSubject" type="text" placeholder="The subject" requiered>
                    </div>
                    <textarea class="form-control" name="txtArea" id="txtArea" placeholder="Your message"></textarea>
                    <button type="submit" name="btnSubmit" class="btn btn-primary m-1">Submit</button>
                </form>
            </div>
        </section>

        <section class="row"></section>
    </main>

    <?php
    loadFooter();
    ?>

</body>

</html>

</html>