<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página en mantenimiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/mantenimiento.css">
</head>
<body>

<!-- BACKGROUND -->
<div id="bg">
    <canvas id="c1"></canvas>
    <div class="bg-image"></div>
    <div class="gradient-overlay"></div>
</div>

<!-- NAV -->
<nav class="navbar">
    <div class="logo" id="unidadTitulo">Unidad</div>
    <ul class="menu">
        <li><a href="perfil.php">Perfiles</a></li>
        <li><a href="unidad1.php">Unidad 1</a></li>
        <li><a href="unidad2.php">Unidad 2</a></li>
        <li><a href="unidad3.php">Unidad 3</a></li>
        <li><a href="unidad4.php">Unidad 4</a></li>
    </ul>
</nav>

<!-- CONTENIDO -->
<main class="center-box">
    <h1 class="neon">Página en mantenimiento</h1>
    <p class="subtitle">
        Esta sección se encuentra actualmente en desarrollo.<br>
        Próximamente estará disponible.
    </p>

    <div class="maintenance-icon">⚙️</div>
</main>

<!-- BOTÓN VOLVER -->
<div class="bottom-back">
    <a href="actividades.php" class="btn secondary">Volver a Actividades</a>
</div>

<!-- CANVAS SCRIPT -->
<script>
(function(){
    const canvas = document.getElementById('c1');
    const ctx = canvas.getContext('2d');
    let w, h;
    function resize(){
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    function draw(){
        ctx.clearRect(0,0,w,h);
        requestAnimationFrame(draw);
    }
    draw();
})();
</script>

</body>
</html>
