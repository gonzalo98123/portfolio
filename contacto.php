<?php 
    $pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
     <!--Bootstrap, FontAWS y syle-->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
     <!--Icono del proyecto-->
    <link rel="icon" type="image/x-icon" href="/images/gr-ico-grd.png">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>  
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
            <div class="class col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por WhatsApp</p>
            </div>
            <div class="class col-6">
                <Form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">

                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">

                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp"
                            class="form-control">

                    </div>
                    <textarea name="txtMensaje" id="txtMensaje" placeholder="Escriba aqui su mensaje"
                        class="form-control shadow"></textarea>
                    <div class="">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>

                </Form>
            </div>
        </div>
    </main>
    <!--Footer-->
    <footer class="container mt-auto pb-4">
        <div class="row ">
            <div class="col-3">
                <a href="https://github.com/gonzalo98123" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/gonzalo-romero-07360b15a/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>

            </div>
            <div class="col-3">
                Sponsor <a href="http://depcsuite.com">DePc Suite</a>
            </div>
            <div class="col-3">
                <a href="defqon1gonzalo@gmail.com">defqon1gonzalo@gmail.com</a>
            </div>
            <div class="whatsapp">
                <a href="https://api.whatsapp.com/send?phone=5493547677332" target="_blank" title="WhatsApp"><i
                        class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </footer>

</body>

</html>