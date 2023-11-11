<style>
.stylePerso{
    background-color: #E8E8E8 !important;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light stylePerso">
    
<a class="navbar-brand" href="index.php">
    <img src="https://i.imgur.com/MVMden7.png" height="40" alt="">
  </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <?php
                          session_start(); // Inicia la sesión para verificar si el usuario ha iniciado sesión
                          if (isset($_SESSION['user_id'])) {
                            // Usuario autenticado, muestra su nombre
                            echo '<a class="nav-link" href="#">' . $_SESSION['user_name'] . '</a>';
                          } else {
                            // Usuario no autenticado, deja el espacio en blanco
                            echo '<a class="nav-link" href="#"></a>';
                          }
                          ?>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="index.php">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="Producto.php">Productos</a>
                                  </li>
                                  <li class="nav-item">
                                      <?php
                          if (isset($_SESSION['user_id'])) {
                            // Si el usuario ha iniciado sesión, muestra el botón para cerrar sesión como texto plano
                            echo '<a class="nav-link" href="logout.php">Cerrar Sesión</a>';
                          } else {
                            // Si el usuario no ha iniciado sesión, muestra un botón para iniciar sesión
                            echo '<a class="nav-link" href="login.html">Iniciar Sesión</a>';
                          }
                          ?>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>