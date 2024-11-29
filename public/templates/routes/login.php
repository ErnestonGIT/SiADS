<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>-Login-</title>
</head>
<body class=" d-flex flex-column">
    <!--<script src="./dist/js/demo-theme.min.js?1726507346"></script>-->
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <div class="img-responsive img-responsive-21x9">
                <img src="/images/logo.webp" alt="" width=100em height=100em>
            </div>
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Iniciar sesión</h2>
            <form action="/api/login.php" method="Post" autocomplete="off" novalidate="">
              <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="tu@email.com" autocomplete="off" name="username">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Contraseña
                  <span class="form-label-description">
                    <a href="./forgot-password.html" style="color:#6b1d47">Olvidé mi contraseña</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" placeholder="Tu password" autocomplete="off" name="password">
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                    </a>
                  </span>
                </div>
              </div>
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input">
                  <span class="form-check-label">Recordar en este dispositivo</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn w-100 text-purple-darken" >Iniciar sesión</button>
              </div>
            </form>
          </div>
          
        </div>
        <div class="text-center text-secondary mt-3">
         ¿Aún no estás inscrito? <a href="sign-up.php" tabindex="-1">Inscribirse</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
  
</body>
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

</html>