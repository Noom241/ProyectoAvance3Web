<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mueblería Joaquín</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body class="bg-primary">
    <?php
        include 'navbar.php';
        ?>

    <div id="carouselExampleMobile" class="carousel slide mobile" data-ride="carousel">
        <?php
        $host = 'sql10.freesqldatabase.com';
        $port = 3306;
        $user = 'sql10657362';
        $password = 'EiL5HqgG7y';
        $database = 'sql10657362';

        $mysqli = new mysqli($host, $user, $password, $database, $port);

        if ($mysqli->connect_error) {
            die("La conexión a la base de datos falló: " . $mysqli->connect_error);
        }

        // Consulta SQL para obtener las URL de la tabla "desktop"
        $query = "SELECT url FROM mobile";
        $result = $mysqli->query($query);

        if ($result) {
            // Contador para establecer la clase 'active' en el primer elemento
            $count = 0;

            echo '<div class="carousel-inner hero-c">';

            while ($row = $result->fetch_assoc()) {
                $urlImagen = $row['url'];
                // Agregar la clase 'active' al primer elemento
                $activeClass = ($count === 0) ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img class="d-block w-100" src="' . $urlImagen . '" alt="Slide">';
                echo '</div>';
                $count++;
            }

            echo '</div>';

            $result->free();
        } else {
            echo "Error al consultar la base de datos: " . $mysqli->error;
        }

        $mysqli->close();
        ?>
        <a class="carousel-control-prev" href="#carouselExampleMobile" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleMobile" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="carouselExampleDesktop" class="carousel slide desktop" data-ride="carousel">
        <?php
        $host = 'sql10.freesqldatabase.com';
        $port = 3306;
        $user = 'sql10657362';
        $password = 'EiL5HqgG7y';
        $database = 'sql10657362';

        $mysqli = new mysqli($host, $user, $password, $database, $port);

        if ($mysqli->connect_error) {
            die("La conexión a la base de datos falló: " . $mysqli->connect_error);
        }

        // Consulta SQL para obtener las URL de la tabla "desktop"
        $query = "SELECT url FROM desktop";
        $result = $mysqli->query($query);

        if ($result) {
            // Contador para establecer la clase 'active' en el primer elemento
            $count = 0;

            echo '<div class="carousel-inner hero-c">';

            while ($row = $result->fetch_assoc()) {
                $urlImagen = $row['url'];
                // Agregar la clase 'active' al primer elemento
                $activeClass = ($count === 0) ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img class="d-block w-100" src="' . $urlImagen . '" alt="Slide">';
                echo '</div>';
                $count++;
            }

            echo '</div>';

            $result->free();
        } else {
            echo "Error al consultar la base de datos: " . $mysqli->error;
        }

        $mysqli->close();
        ?>
        <a class="carousel-control-prev" href="#carouselExampleDesktop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDesktop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="col-md-12 text-white bg-white">
        <div class="row p-5">
            <div class="col-md-6 p-5">
                <div style="font-family: Arial, sans-serif; margin: 0">
                    <section style="display: inline-block" class="text-dark">
                        <h2 class="text-primary text-center">Acerca de Nosotros</h2>
                        <p class="text-center">
                            Somos una empresa peruana de mueblería comprometida con la
                            satisfacción de nuestros clientes. Fundada en 1990, Mueblería
                            Joaquín se ha convertido en un referente en el mercado de
                            muebles de alta calidad en Perú. Nuestro objetivo es brindar
                            soluciones de mobiliario elegante y funcional para hogares y
                            oficinas.
                        </p>
                        <p class="text-center">
                            En Mueblería Joaquín, nos enorgullece ofrecer una amplia gama de
                            productos, desde sofás y sillas hasta mesas y armarios, todos
                            fabricados con los mejores materiales y con un enfoque en el
                            diseño y la durabilidad. Nuestro equipo de diseñadores y
                            artesanos trabaja incansablemente para asegurarse de que cada
                            pieza que sale de nuestra tienda cumple con los estándares más
                            altos de calidad.
                        </p>
                    </section>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide shadow-lg" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://i.imgur.com/uK5ld5v.jpg" alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://i.imgur.com/IeY5Idi.jpg" alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://i.imgur.com/K08bAHU.jpg" alt="Third slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-dark" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-dark" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mision">
        <div class="row p-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="https://magensa.pe/wp-content/uploads/2021/06/united-white.png" alt="..."
                            class="mis_vis">
                        <h2 class="text-dark">Misión</h2>
                        <p>
                            En Mueblería Joaquín, nuestra misión es proporcionar a nuestros
                            clientes muebles de dormitorio excepcionales que combinen
                            funcionalidad, durabilidad y estilo. Nos comprometemos a ofrecer
                            una experiencia de compra personalizada y sin igual, guiando a
                            nuestros clientes a través de nuestra amplia gama de opciones
                            para ayudarles a encontrar el juego de dormitorio perfecto que
                            se adapte a sus necesidades y gustos. Trabajamos con pasión y
                            dedicación para superar las expectativas de nuestros clientes en
                            términos de calidad, servicio y satisfacción.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="https://magensa.pe/wp-content/uploads/2021/06/furnitures-white.png" alt="..."
                            class="mis_vis">
                        <h2 class="text-dark">Visión</h2>
                        <p>
                            Ser reconocidos como líderes en la industria de muebles para
                            dormitorios, ofreciendo productos de alta calidad y diseño
                            exclusivo que transformen los espacios de nuestros clientes en
                            lugares de confort y belleza. Buscamos convertirnos en la
                            elección preferida de quienes buscan crear un ambiente acogedor
                            y armonioso en sus hogares.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-dark w-100 p-5 col-md-12">
        <h2 class="text-center text-warning">Opiniones de Nuestros Clientes</h2>
        <div class="row justify-content-center d-flex">
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        Los muebles que compré en Mueblería Joaquín transformaron mi
                        hogar. ¡Son maravillosos! La calidad y el servicio son
                        inigualables.
                    </p>
                    <footer class="blockquote-footer">María Rodríguez</footer>
                </div>
            </div>
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        Mueblería Joaquín superó mis expectativas. Los muebles son
                        elegantes y duraderos. ¡Recomiendo esta tienda a todos mis amigos!
                    </p>
                    <footer class="blockquote-footer">Luis Fernández</footer>
                </div>
            </div>
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        La experiencia de compra en Mueblería Joaquín es excepcional. Los
                        muebles son de alta calidad, y el personal es amable y servicial.
                        ¡Volveré por más!
                    </p>
                    <footer class="blockquote-footer">Ana Martínez</footer>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex">
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        No puedo estar más feliz con mis compras en Mueblería Joaquín. La
                        selección y el servicio son notables. ¡Mi hogar se ve increíble
                        gracias a ellos!
                    </p>
                    <footer class="blockquote-footer">Carlos Sánchez</footer>
                </div>
            </div>
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        Mueblería Joaquín es mi elección número uno para muebles de
                        calidad. Sus productos son impresionantes, y el personal siempre
                        está dispuesto a ayudar. ¡Gracias!
                    </p>
                    <footer class="blockquote-footer">Isabel Gómez</footer>
                </div>
            </div>
            <div class="card col-md-3 m-3">
                <div class="card-body">
                    <p class="mb-0">
                        Recomiendo encarecidamente Mueblería Joaquín. Sus muebles
                        transformaron mi hogar en un paraíso. ¡La mejor inversión que he
                        hecho!
                    </p>
                    <footer class="blockquote-footer">Manuel López</footer>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
        ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>