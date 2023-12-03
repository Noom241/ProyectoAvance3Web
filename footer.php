<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        :root {
            --blanco: #FFFFFF;
            --negro: #20252D;
            --marron-claro: #D2B48C;
            --marron-grisaceo: #7C7163;
            --gris-claro: #E8E8E8;
        }

        footer {
            background-color: var(--negro);
            padding: 20px 0;
            color: var(--blanco);
        }

        .social-icons a {
            color: var(--blanco);
            margin-right: 15px;
        }

        .enlaces-utiles a {
            color: var(--blanco);
        }
    </style>
</head>
<body>

<!-- Contenido de la página -->

<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Redes Sociales</h5>
                <div class="social-icons">
                    <a href="https://www.facebook.com/muebleriajoaquiin?mibextid=2JQ9oc" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/muebleriajoaquin/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/+51920838291?text=<?php
    if (isset($_SESSION['user_id'])) {
        // Usuario autenticado, saludo personalizado
        echo 'Hola, mi nombre es ' . urlencode($_SESSION['user_name']) . ', me gustaría obtener más información';
    } else {
        // Usuario no autenticado, saludo genérico
        echo 'Hola, me gustaría obtener más información';
    }
?>" target="_blank"><i class="fab fa-whatsapp"></i></a>

                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Información de Contacto</h5>
                <p>Mega Muebles,San Martín de Porres, Lima-Perú</p>
                <p>Email: MuebleríaJoaquin@gmail.com</p>
                <p>Teléfono: +51 934 567 886</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Enlaces Útiles</h5>
                <ul class="list-unstyled enlaces-utiles">
                    <li><a href="https://muebleríajoaquín.site">Inicio</a></li>
                    <li><a href="https://muebleríajoaquín.site/Producto.php">Catálogo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr style="border-color: var(--blanco);">
    <p class="text-center">© 2023 Mueblería Joaquin. Todos los derechos reservados.</p>
</footer>
<script src="https://kit.fontawesome.com/1450a5c86e.js" crossorigin="anonymous"></script>

</body>
</html>
