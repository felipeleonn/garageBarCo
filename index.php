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
    <title>Garage Bauer Co | Inicio</title>
  </head>
  <body>
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
                          maxlength="40"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required=""
                          type="password"
                          id="password"
                          name="password"
                          placeholder="Contraseña"
                          maxlength="60"
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
                    <form action="enviar_registro.php" method="POST">
                      <div class="mb-3">
                        <input
                          required
                          name="username"
                          id="username"
                          type="text"
                          placeholder="Usuario"
                          maxlength="40"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          name="nombre"
                          id="nombre"
                          type="text"
                          placeholder="Nombre"
                          maxlength="40"
                        />
                        <input
                          required
                          name="apellido"
                          id="apellido"
                          type="text"
                          placeholder="Apellido"
                          maxlength="60"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="email"
                          id="password"
                          name="correo"
                          placeholder="Correo Electronónico"
                          maxlength="100"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="password"
                          id="password"
                          name="password"
                          placeholder="Contraseña"
                          maxlength="60"
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          required
                          type="password"
                          id="password"
                          name="password2"
                          placeholder="Repetir Contraseña"
                          maxlength="60"
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
                          if(isset($_GET['error_ingreso'])) {
                        ?>
                          <div id="alertHeader" class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>El Usuario no está registrado</p> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        <?php
                        }
                        ?>
                        <?php
                          if(isset($_GET['error_validar'])) {
                        ?>
                          <div id="alertHeader" class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>Contraseña Incorrecta, intentá de nuevo</p> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        <?php
                        }
                        ?>

                        <?php
                          if(isset($_GET['ok'])) { 
                        ?>

                          <div id="alertHeader" class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>Usuario Registrado</p> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        <?php  
                        } 
                        ?>

                        <?php
                          if(isset($_GET['error'])) {
                        ?>
                          <div id="alertHeader" class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>Las contraseñas deben coincidir</p> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        <?php
                        }
                        ?>
    
    <div id="imagenPrincipal">
      <div class="container" id="textoHero">
        <h1>Garage Bauer Co.</h1>
        <h3></h3>
        <a href="./productos.php"><button id="botonProductos" class="btn btn-dark"> conocé nuestros productos</button></a>
      </div>
    </div>

    <section class="container-fluid row" id="info-pagina">
      </div>
      <!-- Envios Gratis -->
      <div class="col-12 col-md-4 col-lg-3">
        <svg
          class="svg-info"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 88 69.96"
        >
          <path
            d="M87.93,34.84a.5.5,0,0,0-.08-.12.59.59,0,0,0-.1-.17l-16-18.23A1,1,0,0,0,71,16H60.53V6.65A6.63,6.63,0,0,0,53.9,0H6.63A6.63,6.63,0,0,0,0,6.65V49.19a6.64,6.64,0,0,0,6.63,6.64h3.64a10.7,10.7,0,1,0,20.24,0H63a10.7,10.7,0,1,0,20.24,0H87a1,1,0,0,0,1-1V35.21A1.16,1.16,0,0,0,87.93,34.84ZM70.58,18,84.8,34.21H60.53V18ZM20.39,68a8.71,8.71,0,1,1,8.7-8.71A8.72,8.72,0,0,1,20.39,68Zm0-19.41a10.7,10.7,0,0,0-9.2,5.25H6.63A4.63,4.63,0,0,1,2,49.19V6.65A4.63,4.63,0,0,1,6.63,2H53.9a4.64,4.64,0,0,1,4.64,4.64V53.83h-29A10.69,10.69,0,0,0,20.39,48.58ZM73.07,68a8.71,8.71,0,1,1,8.7-8.71A8.72,8.72,0,0,1,73.07,68Zm9.19-14.16a10.67,10.67,0,0,0-18.38,0H60.53V36.21H86V53.83Z"
          ></path>
        </svg>
        <p class="title">Envíos Gratis</p>
        <p class="subtitle">Envíos a todo CABA</p>
      </div>

      <!-- Aceptamos todas las tarjetas -->
      <div class="col-12 col-md-4 col-lg-3">
        <svg
          class="svg-info"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 89.72 69.42"
        >
          <path
            d="M83.21.29H6.79A6.65,6.65,0,0,0,.14,6.93V63.07a6.65,6.65,0,0,0,6.65,6.64H83.21a6.65,6.65,0,0,0,6.65-6.64V6.93A6.65,6.65,0,0,0,83.21.29Zm-81.07,15H87.86V28.76H2.14Zm4.65-13H83.21a4.65,4.65,0,0,1,4.65,4.64v6.4H2.14V6.93A4.65,4.65,0,0,1,6.79,2.29ZM83.21,67.71H6.79a4.65,4.65,0,0,1-4.65-4.64V30.76H87.86V63.07A4.65,4.65,0,0,1,83.21,67.71ZM29.68,51.9H14.25a1,1,0,0,0,0,2H29.68a1,1,0,0,0,0-2Zm30.86,0H34.82a1,1,0,0,0,0,2H60.54a1,1,0,0,0,0-2Z"
          ></path>
        </svg>
        <p class="title">Aceptamos todas las tarjetas</p>
        <p class="subtitle">Trabajamos con todos los bancos</p>
      </div>

      <!-- Sitio Seguro -->
      <div class="col-12 col-md-4 col-lg-3">
        <svg
          class="svg-info-3"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 79.82 86"
        >
          <path
            d="M40,86a1,1,0,0,1-.34-.06C8,74.58-1.59,35.33.32,16.84A1,1,0,0,1,.94,16L39.62.07a1.1,1.1,0,0,1,.76,0L79.06,16a1,1,0,0,1,.62.83C81.59,35.33,72,74.58,40.34,85.94A1,1,0,0,1,40,86ZM2.26,17.63C.67,35.75,10,72.92,40,83.94c30-11,39.33-48.19,37.74-66.31L40,2.08ZM33.1,58.69a1,1,0,0,1-.71-.29L16.78,42.85a1,1,0,1,1,1.41-1.42L33.1,56.28,64.19,25.44a1,1,0,0,1,1.41,1.42L33.8,58.4A1,1,0,0,1,33.1,58.69Z"
          ></path>
        </svg>
        <p class="title">Sitio Seguro</p>
        <p class="subtitle">Protegemos tus datos</p>
      </div>
    </section>
<!--Empieza footer-->
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
<!--Termina footer-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
