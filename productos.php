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
    <link rel="stylesheet" href="./styles.css" />
    <title>Garage Bauer Co | Productos</title>
  </head>
  <body id="bodyProductos">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-header">
        <div class="container">
          <a href="./index.php"
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
            </ul>
            <button
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              data-bs-whatever="@getbootstrap"
              id="login-button"
            >
              <svg class="sesionSvg" width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 21H14V19C14 18.2044 13.6839 17.4413 13.1213 16.8787C12.5587 16.3161 11.7956 16 11 16H5C4.20435 16 3.44129 16.3161 2.87868 16.8787C2.31607 17.4413 2 18.2044 2 19V21H0V19C0 17.6739 0.526784 16.4021 1.46447 15.4645C2.40215 14.5268 3.67392 14 5 14H11C12.3261 14 13.5979 14.5268 14.5355 15.4645C15.4732 16.4021 16 17.6739 16 19V21ZM8 12C7.21207 12 6.43185 11.8448 5.7039 11.5433C4.97595 11.2417 4.31451 10.7998 3.75736 10.2426C3.20021 9.68549 2.75825 9.02405 2.45672 8.2961C2.15519 7.56815 2 6.78793 2 6C2 5.21207 2.15519 4.43185 2.45672 3.7039C2.75825 2.97595 3.20021 2.31451 3.75736 1.75736C4.31451 1.20021 4.97595 0.758251 5.7039 0.456723C6.43185 0.155195 7.21207 -1.17411e-08 8 0C9.5913 2.37122e-08 11.1174 0.632141 12.2426 1.75736C13.3679 2.88258 14 4.4087 14 6C14 7.5913 13.3679 9.11742 12.2426 10.2426C11.1174 11.3679 9.5913 12 8 12ZM8 10C9.06087 10 10.0783 9.57857 10.8284 8.82843C11.5786 8.07828 12 7.06087 12 6C12 4.93913 11.5786 3.92172 10.8284 3.17157C10.0783 2.42143 9.06087 2 8 2C6.93913 2 5.92172 2.42143 5.17157 3.17157C4.42143 3.92172 4 4.93913 4 6C4 7.06087 4.42143 8.07828 5.17157 8.82843C5.92172 9.57857 6.93913 10 8 10Z" fill="black"/>
              </svg>


            </button>
            <?php
              if(isset($_SESSION['cliente'])) { ?>
              <p class="nombreUsuario"><?php echo $_SESSION['cliente'];?> </p>
              
              <?php } ?>
              
              <?php if(isset($_SESSION['cliente'])) { ?> 
                <a id="cerrarSesion" class="nav-link" href="./cerrar_sesion.php">Cerrar Sesión</a>
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
      <div class="containerProductosSinSesion">
        <p>¡Registrarte para ver nuestros productos!</p>
        <button
          type="button"
          class="btn btn-dark"
          data-bs-toggle="modal"
          data-bs-target="#modalRegistro"
          data-bs-whatever="@getbootstrap"
          id ="form-button"
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
