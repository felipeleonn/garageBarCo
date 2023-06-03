<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
    <link rel="precoct" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    nne
    <link rel="stylesheet" href="./style.css" />
    <title>Garage Bauer Co | Productos</title>
  </head>
  <body id="bodyProductos">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-header">
        <div class="container">
          <a class="navbar-brand" href="./index.php"
            ><img src="./img/logo.png" alt="Logo Garage Bauer Co" id="logo"
          /></a>

          <!-- Menú Hamburguesa -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="containerPaginas">
              <li class="nav-item">
                <a class="nav-link" href="./nosotros.php">NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./productos.php">PRODUCTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contacto.php">CONTACTO</a>
              </li>

              <?php if(isset($_SESSION['cliente'])) { ?> 
              <li class="nav-item">
                <a class="nav-link" href="./cerrar_sesion.php">Cerrar Sesión</a>
              </li>
              <?php } ?>


            </ul>
            <button
              type="button"
              class="btn btn-dark"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              data-bs-whatever="@getbootstrap"
              id="login-button"
            >
              Iniciar Sesion
            </button>
            <?php
              if(isset($_SESSION['cliente'])) { ?>
              <p>Usuario: <?php echo $_SESSION['cliente'];?></p>
              <?php } ?>
            <!-- MODAL - INICIAR SESION -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                      Iniciar Sesion
                    </h1>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <!-- FORMULARIO -->
                    <form action="validar_usuario.php" method="POST">
                      <div class="mb-3">
                        <input
                          required=""
                          name="username"
                          id="username"
                          type="text"
                          placeholder="Usuario"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required=""
                          type="password"
                          id="password"
                          name="password"
                          placeholder="Contraseña"
                        />
                      </div>
                      <input type="submit" value="Ingresar" class="btn btn-dark"></input>
                    </form>
                    <!-- TERMINA FORMULARIO -->
                  </div>
                  <div class="modal-footer">
                    <p>No tenes Usuario? Registrate</p>
                    <button
                      type="button"
                      class="btn btn-dark"
                      data-bs-toggle="modal"
                      data-bs-target="#modalRegistro"
                      data-bs-whatever="@getbootstrap"
                    >
                      Registrarse
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- MODAL - REGISTRARSE -->
            <div
              class="modal fade"
              id="modalRegistro"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                      Registrate!
                    </h1>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <!-- FORMULARIO -->
                    <form action="#" method="post">
                      <div class="mb-3">
                        <input
                          required
                          name="username"
                          id="username"
                          type="text"
                          placeholder="Usuario"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          name="nombre"
                          id="nombre"
                          type="text"
                          placeholder="Nombre"
                          maxlength="30"
                        />
                        <input
                          required
                          name="apellido"
                          id="apellido"
                          type="text"
                          placeholder="Apellido"
                          maxlength="40"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="email"
                          id="password"
                          name="correo"
                          placeholder="Correo Electronónico"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="password"
                          id="password"
                          name="password"
                          placeholder="Contraseña"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="password"
                          id="password"
                          name="password2"
                          placeholder="Repetir Contraseña"
                        />
                      </div>
                      <input type="submit" value="Registrarme" class="btn btn-dark">
                      </input>
                    </form>
                    <!-- TERMINA FORMULARIO -->
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-dark"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                      data-bs-whatever="@getbootstrap"
                    >
                      Volver Atras
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <?php
      if(isset($_SESSION['cliente'])) {
    ?>

    <section>
      <!-- FILA 1 -->
      <div class="container-flex" id="contenedorTituloProductos">
        <h2 class="productos-etiquetas">BEBIDAS</h2>
      </div>
      <div class="container" id="contenedorProductos">
        <div class="row justify-content-around" id="grilla">
          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <!-- empieza el card -->
            <img
              src="./img/pintas.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">PINTA AL PASO</h5>
              <p class="card-text">En todas nuestras sedes, pinta.</p>
              <!-- Add additional card content as needed -->
            </div>
            <!-- termina el card -->
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/latas2.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">LATAS</h5>
              <p class="card-text">Estilos de cerveza disponibles enlatadas</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/growler.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">GROWLERS</h5>
              <p class="card-text">
                Ofrecemos el servicio de venta y recarga de growlers
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- FILA 2 -->
      <div class="container-flex comidas" id="contenedorTituloProductos">
        <h2 class="productos-etiquetas">COMIDAS</h2>
      </div>
      <div class="container" id="contenedorProductos">
        <div class="row justify-content-around" id="grilla">
          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/morfi1.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Morfi</h5>
              <p class="card-text">Amplio menú para que disfrutes</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/snacks.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Snacks</h5>
              <p class="card-text">Si solo queres picar, tenemos snacks</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/foodtruck.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Foodtruck</h5>
              <p class="card-text">
                Cumpleaños? Casamiento? Garage donde quieras!
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- FILA 3 -->
      <div class="container-flex extras" id="contenedorTituloProductos">
        <h2 class="productos-etiquetas">EXTRAS</h2>
      </div>
      <div class="container" id="contenedorProductos">
        <div class="row justify-content-around" id="grilla">
          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/takeaway.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Takeaway</h5>
              <p class="card-text">Venis, cargas, te vas</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/latasamigos2.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Variedades</h5>
              <p class="card-text">
                Cervezas de todo el mundo, al alcance de tus manos
              </p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-6 col-sm-12" id="productos">
            <img
              src="./img/espirituosas.jpg"
              class="card-img-top img-fluid"
              alt="Image 1"
            />

            <div class="card-body">
              <h5 class="card-title">Espirituosas</h5>
              <p class="card-text">
                Variedad de bebidas alcoholicas para tu casa
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php         
      } else {  
    ?>
      <div id="containerProductosSinSesion">
        <p>Registrate para ver los productos</p>
        <button
          type="button"
          class="btn btn-dark"
          data-bs-toggle="modal"
          data-bs-target="#modalRegistro"
          data-bs-whatever="@getbootstrap"
          >
          Registrarse
        </button>
      </div>
      
    <?php 
      }
    ?>
    
<!--Empieza Footer-->
<footer>
  <section class="container" id="footer">
    <div
      class="row justify-content-center align-items-center d-flex flex-wrap"
    >
      <div class="col-12 col-lg" id="redes">
        <div class="card text-center mb-3 cardfooter">
          <div class="card-body2">
            <img
              src="./img/fb_logo.png"
              class="iconosrrss"
              alt="facebook"
            />
            <img
              src="./img/ig_logo.png"
              class="iconosrrss"
              alt="instagram"
            />
            <img
              src="./img/wp_logo.png"
              class="iconosrrss"
              alt="Whatsapp"
            />
            <h5 class="card-title2">Navegación</h5>
            <a href="./nosotros.html" class="card-link">Nosotros</a>
            <a href="./productos.html" class="card-link">Productos</a>
            <a href="./contacto.html" class="card-link">Contacto</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg text-center" id="logoAbajo">
        <img
          src="./img/logo_footer.png"
          class="logofooter"
          alt="logogarage"
        />
      </div>
      <div class="col-12 col-lg justify-content-center text-center" id="suscribite">
        <div class="cardfooter">
          <div class="card-body2" id="cardSuscribir">
            <h5 class="card-title2">Suscríbete a nuestro boletín</h5>
            <p class="card-text2">
              Recibí nuestras últimas ofertas especiales en tu correo
              electrónico.
            </p>
            <form action="#" method="POST">
              <input class="mail"
                type="email"
                name="email"
                placeholder="Ingresa tu correo electrónico"
                required
              />
              <button type="submit" class="btn btn-primary">
                Suscribirse
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>


    <!--Termina Footer-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>