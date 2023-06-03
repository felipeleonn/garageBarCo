<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="precoct" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    nne

    <link rel="shortcut icon" href="/img/logo.png" />
    <!-- CSS Propio -->
    <link rel="stylesheet" href="./style.css" />
    <title>Garage Bauer Co | Nosotros</title>
  </head>
  <body>
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
                    <form action="validar_usuario.php" method="post">
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
                    <form action="enviar_registro.php" method="POST">
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

    <section class="container" id="seccionNosotros">
      <div class="row justify-content-center text-center" id="titulo">
        <h1 class="titulin">Nosotros</h1>
      </div>
      <div class="row justify-content-center">
        <!--Empieza el card N1-->

        <div class="card mb-3 Presentacion" style="max-width: 900px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="./img/equipo.PNG"
                class="img-fluid rounded-start"
                alt="equipo"
              />
            </div>
            <div class="col-md-8">
              <div class="card-body3">
                <h5 class="card-title3">Nuestro equipo</h5>
                <p class="card-text3">
                  La base de todo nuestro universo, ellos son quienes crean la
                  magia. Nuestro Masterbrewer y sus aliados siempre se las
                  ingenian para sorprendernos y llevarles la mejor birra que
                  puedan encontrar.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!--Termina el card N1-->

        <!--Empieza el card N2-->
        <div class="card mb-3 Presentacion" style="max-width: 900px">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body3">
                <h5 class="card-title4">Nuestra casa</h5>
                <p class="card-text4">
                  Hogar, dulce hogar. Como este buen dicho dice, este es nuestro
                  templo, nuestro dulce templo. Lugar de encuentros, risas y por
                  sobretodo, buena birra.
                </p>
              </div>
            </div>
            <div class="col-md-4 imagenes-card ">
              <img
                src="./img/garagecrafthaus.PNG"
                class="img-fluid rounded-start imagenes-card"
                alt="garagecfrathaus"
              />
            </div>
          </div>
        </div>

        <!--Termina el card N2-->

        <!--Empieza el card N3-->

        <div class="card mb-3 Presentacion" style="max-width: 900px">
          <div class="row g-0">
            <div class="col-md-4 ">
              <img
                src="./img/nuestra fabrica.PNG"
                class="img-fluid rounded-start imagenes-card"
                alt="garagefabrica"
              />
            </div>
            <div class="col-md-8">
              <div class="card-body3">
                <h5 class="card-title3">Nuestra fabrica</h5>
                <p class="card-text3">
                  La meca de nuestro elixir, el masterbrewer piensa y elabora
                  todas sus recetas en este hermoso lugar, donde la creatividad
                  vuela, la malta y el lúpulo se cocinan, creando el mosto
                  sagrado para todos nuestros amigos
                </p>
              </div>
            </div>
          </div>
        </div>

        <!--Termina el card N3-->

        <!--Empieza el card N4-->
        <div class="card mb-3 Presentacion" style="max-width: 900px">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body3">
                <h5 class="card-title4">Nuestros valores</h5>
                <p class="card-text4">
                  Nuestros cimientos estan bien marcados, pero este universo no
                  sería posible sin todos ustedes. Por eso, el equipo completo
                  de garage sabe que ante todo, amor por ustedes, nuestros
                  clientes.
                </p>
              </div>
            </div>
            <div class="col-md-4 ">
              <img
                src="./img/Nosotros2.jpg"
                class="img-fluid rounded-start img3 "
                alt="valores"
              />
            </div>
          </div>
        </div>

        <!--Termina el card N4-->
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
