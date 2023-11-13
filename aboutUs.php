<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
    :root {
        --blanco: #FFFFFF;
        --negro: #20252D;
        --marron-claro: #D2B48C;
        --marron-grisaceo: #7C7163;
        --gris-claro: #E8E8E8;
        --boton-primario: #7C7163;
        /* Color del fondo para el botón */
    }

    hr {
        border: 2px solid black;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100vh;
        position: relative;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, var(--marron-claro) 50%, var(--gris-claro) 50%);
        z-index: -1;
    }

    .bg-container {
        background-color: rgba(250, 250, 250, 0.85);
    }

    .bg-container p {
        font-size:1.3em;
    }

    .about-section {
        padding: 50px 0;
    }

    .icon {
        font-size: 40px;
        color: var(--boton-primario);
    }

    .feature-item {
        margin-bottom: 20px;
    }

    .team-section {
        padding: 50px 0;
    }

    .team-member {
        text-align: center;
        margin-bottom: 20px;
    }

    .team-member img {
        max-width: 100%;
        border-radius: 50%;
    }

    .testimonial-section {
        padding: 50px 0;
    }

    .testimonial {
        text-align: center;
        margin-bottom:15px;
    }

    .history-section {
        padding: 50px 0;
    }

    h2 {
        margin-bottom: 1em;
    }

    .history-section img{
        object-fit: none;
    }

    .team-member img {
        width: 50%;
    }
</style>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container-fluid ">
        <div class="row col-md-10 mx-auto p-5 bg-container shadow">
            <div class="text-center p-4">
                <div class=" p-4">
                    <h2>Acerca de Nosotros</h2>
                    <p class="">En Muebleria Joaquin, nos enorgullece transformar casas en hogares, ofreciendo
                        una amplia gama de muebles que reflejan estilo, calidad y comodidad. Desde nuestros
                        inicios, hemos dedicado nuestro compromiso a superar las expectativas de nuestros
                        clientes, brindando soluciones de diseño excepcionales y duraderas.</p>
                </div>
                
            </div>

            <div class="row commitment-section text-center">
                <div class="col-md-12 text-center mb-4">
                    <hr>
                    <h2>Nuestro Compromiso</h2>
                </div>
                <div class="col-md-4 offset-md-2">
                    <i class="icon fas fa-handshake"></i>
                    <h4>Confianza</h4>
                    <p>Construimos relaciones basadas en la confianza y la transparencia con nuestros clientes.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon fas fa-heart"></i>
                    <h4>Calidad</h4>
                    <p>Nos comprometemos a ofrecer productos de alta calidad que superen las expectativas.</p>
                </div>

            </div>

            <div class="row about-section">
                <div class="col-md-4 feature-item text-center">
                    <i class="icon fas fa-couch"></i>
                    <h4>Variedad de Muebles</h4>
                    <p>Ofrecemos una amplia variedad de muebles para satisfacer todos los gustos y estilos.</p>
                </div>
                <div class="col-md-4 feature-item text-center">
                    <i class="icon fas fa-star"></i>
                    <h4>Calidad Premium</h4>
                    <p>Nuestros muebles están fabricados con materiales de alta calidad para garantizar durabilidad.</p>
                </div>
                <div class="col-md-4 feature-item text-center">
                    <i class="icon fas fa-users"></i>
                    <h4>Servicio Personalizado</h4>
                    <p>Brindamos un servicio al cliente excepcional para ayudarte a encontrar lo que necesitas.</p>
                </div>
            </div>

            <div class="row history-section text-center">
                <div class="col-md-12 text-center mb-4">
                    <hr>
                    <h2>Nuestra Historia</h2>
                </div>
                <div class="col-md-6 mx-auto">
                    <p>Muebleria Joaquin ha crecido desde sus modestos comienzos hasta convertirse en un referente en el mundo del mobiliario. Nuestra pasión por el diseño y la atención meticulosa a los detalles nos han permitido colaborar con los mejores artesanos y proveedores, garantizando productos que no solo son estéticamente atractivos, sino también funcionales y resistentes.</p>
                </div>
                <div class="col-md-4 mx-auto">
                    <img src="https://images.pexels.com/photos/6827155/pexels-photo-6827155.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row team-section col-12">
                <div class="col-md-12 text-center mb-4">
                    <hr>
                    <h2>Nuestro Equipo</h2>
                </div>
                <div class="col-md-4 team-member">
                    <img src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Team Member 1">
                    <h4>Laura García</h4>
                    <p>Diseñadora de Interiores</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Team Member 2">
                    <h4>Ricardo Méndez</h4>
                    <p>Experto en Muebles</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="https://freesvg.org/img/abstract-user-flat-4.png" alt="Team Member 3">
                    <h4>Isabel Sánchez</h4>
                    <p>Asesor de Diseño</p>
                </div>
            </div>

            <div class="row testimonial-section col-12">
                <div class="col-md-12 text-center mb-4">
                    <hr>
                    <h2>Testimonios</h2>
                </div>

                <div class="col-md-4 testimonial">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Excelente servicio y productos de calidad. Muebleria Joaquin ha
                                transformado mi hogar completamente. ¡Recomendado!"</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">- Cliente Satisfecho</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 testimonial">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Increíble variedad de muebles. Encontré exactamente lo que estaba
                                buscando para mi sala de estar."</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">- Cliente Feliz</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 testimonial">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"El equipo de Muebleria Joaquin realmente se preocupa por sus
                                clientes. Su atención al cliente es excepcional."</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">- Cliente Encantado</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="">
        <?php include 'footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>
