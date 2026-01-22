<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Evidencias</title>

    <!-- CSS ASOMBROSO -->
    <link rel="stylesheet" href="style/actividades.css">
</head>
<body>

<!-- BACKGROUND (se reutiliza el mismo efecto visual) -->
<div id="bg">
    <canvas id="c1"></canvas>
    <div class="bg-image"></div>
    <div class="gradient-overlay"></div>
</div>

<!-- NAV -->
<nav>
    <nav class="navbar">
    <div class="logo">Lizeth Guadalupe y Fatima Estefania</div>

    <ul class="menu">
        <li><a href="perfil.php">Perfiles</a></li>
        <li><a href="unidad1.php">Unidad 1</a></li>
        <li><a href="unidad2.php">Unidad 2</a></li>
        <li><a href="unidad3.php">Unidad 3</a></li>
        <li><a href="unidad4.php">Unidad 4</a></li>
    </ul>
</nav>

</nav>

<!-- CONTENIDO CENTRAL -->
<main class="center-box">
    <h1 class="neon">Portafolio de Evidencias</h1>

    <!-- VOLVER -->
    <div style="margin-top:50px;">
        <a class="btn" href="index.php">Volver a la Portada</a>
    </div>
</main>

<!-- SECCIÓN INFORMATIVA (SCROLL) -->
<section class="info-cards">

    <div class="card-info">
        <h3>Propósito del Portafolio</h3>
        <p>
            Presentar de manera organizada y visual las evidencias académicas
            desarrolladas durante la materia de Desarrollo Web Orientado a Servicios.
        </p>
    </div>

    <div class="card-info">
        <h3>¿Qué aprenderá el usuario?</h3>
        <p>
            Conceptos de arquitectura SOA, implementación y desarrollo de APIs,
            integración de servicios web y buenas prácticas en aplicaciones web.
        </p>
    </div>

    <div class="card-info">
        <h3>Objetivo del Proyecto</h3>
        <p>
            Diseñar y desarrollar una aplicación web funcional que concentre
            los conocimientos adquiridos en el curso.
        </p>
    </div>

</section>


<!-- SCRIPT DEL CANVAS (MISMO QUE EN INDEX) -->
<script>
(function(){
    const canvas = document.getElementById('c1');
    const ctx = canvas.getContext('2d');
    let w, h;
    const particles = [];

    function resize(){
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    for(let i=0;i<60;i++){
        particles.push({
            x: Math.random()*w,
            y: Math.random()*h,
            r: 1 + Math.random()*2,
            vx: (Math.random()-0.5)*0.3,
            vy: (Math.random()-0.5)*0.3,
            a: 0.06 + Math.random()*0.1
        });
    }

    function draw(){
        ctx.clearRect(0,0,w,h);

        for(let p of particles){
            p.x += p.vx;
            p.y += p.vy;

            if(p.x<0) p.x=w;
            if(p.x>w) p.x=0;
            if(p.y<0) p.y=h;
            if(p.y>h) p.y=0;

            const g = ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,p.r*15);
            g.addColorStop(0, `rgba(0,234,255,${p.a})`);
            g.addColorStop(1, 'rgba(0,234,255,0)');
            ctx.fillStyle = g;
            ctx.fillRect(p.x-p.r*15,p.y-p.r*15,p.r*30,p.r*30);
        }

        requestAnimationFrame(draw);
    }
    draw();
})();
</script>

</body>
</html>
