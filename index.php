<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio web</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body class="container" style="background-color:#212529;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Portafolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/PAGINA EN LINEA/CRUD/index.php">Venta de articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="CHAT EN VIVO/Interfaz/Ingresar.php">Chat en vivo</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section id="inicio" class="inicio" style="height: auto;">
        <div class="contenido-banner">
            <div class="contenedor-img">
              <div class="rol">
                <img src="hamster.png">
              </div>
            </div>
            <h1>Erick Jean Pier Ramos Vera</h1>
            <h2>Ingeniero de Software</h2>
            <div class="redes">
                <a href="#" class="facebook"><img src="facebook.svg" width="30" height="30"></a>
                <a href="#" class="x"><img src="x-twitter.svg" width="30" height="30"></a>
                <a href="#"class="skype"><img src="skype.svg" width="30" height="30"></a>
                <a href="#"class="telegram"><img src="telegram.svg" width="30" height="30"></a>
                <a href="#" class="github"><img src="github.svg" width="30" height="30"></a>
            </div>
        </div>
    </section>
    

      <br>
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading" style="color: #2ef8a0;" >Hey te encontraste con mi <span class="text-muted" style="color:#01c4e7">Pagina Web.</span></h2>
          <p class="lead" style="color:#1cedae">Soy un estudiante de ingenieria de sistemas e informatica de la universidad nacional de moquegua, estoy atento ante cualquier comunicado.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="smwv5a92l0e0u3c5yrwe9c4v4js2.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Universidad-Nacional-de-Moquegua-UNAM.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Aula virtual</h5>
              <p class="card-text">Para administrar nuestras tareas :D</p>
              <a href="http://sigeun.unam.edu.pe/modulos/modaulavirtual/seguridad/login" class="btn btn-primary"> algo</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Universidad-Nacional-de-Moquegua-UNAM.jpg" class="img-fluid rounded-start" alt="">
            <div class="card-body">
              <h5 class="card-title">Modulo Estudiante</h5>
              <p class="card-text">Para adminitrar nuestros datos :D</p>
              <a href="https://sigeun.unam.edu.pe/modulos/modestudiante/#/sessions/signin" class="btn btn-primary"> algo</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="Universidad-Nacional-de-Moquegua-UNAM.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Pagina oficial de la unam</h5>
              <p class="card-text">La pagina oficial de la unam :D</p>
              <a href="https://unam.edu.pe" class="btn btn-primary"> algo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="script.js"></script>

  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>