<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad 1 | Portafolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style/home.css">
</head>
<body>

<!-- BACKGROUND -->
<div id="bg">
    <canvas id="c1"></canvas>
    <div class="bg-image"></div>
    <div class="gradient-overlay"></div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">Unidad 1</div>
    <ul class="menu">
        <li><a href="perfil.php">Perfiles</a></li>
        <li><a href="unidad1.php" class="active">Unidad 1</a></li>
        <li><a href="unidad2.php">Unidad 2</a></li>
        <li><a href="unidad3.php">Unidad 3</a></li>
        <li><a href="unidad4.php">Unidad 4</a></li>
    </ul>
</nav>

<!-- CONTENIDO -->
<main class="center-box">
    <h1 class="neon">Introducción al Desarrollo Web Orientado a Servicios</h1>

    <div class="btn-group">
        <a href="pdf/saber1.pdf" class="btn" target="_blank">Saber</a>
        <a href="pdf/saber_hacer1.pdf" class="btn" target="_blank">Saber Hacer 1</a>
        <a href="pdf/saber_hacer2.pdf" class="btn" target="_blank">Saber Hacer 2</a>
    </div>
</main>


<!-- BOTÓN VOLVER ABAJO (NO ESTORBA) -->
<div class="bottom-back">
    <a href="actividades.php" class="btn secondary">Volver a Actividades</a>
</div>

<!-- SCRIPT CANVAS -->
<script>
(function(){
    const canvas = document.getElementById('c1');
    const ctx = canvas.getContext('2d');
    let w, h;
    const p = [];

    function resize(){
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    for(let i=0;i<50;i++){
        p.push({
            x: Math.random()*w,
            y: Math.random()*h,
            r: 1+Math.random()*2,
            vx:(Math.random()-.5)*.3,
            vy:(Math.random()-.5)*.3,
            a:.05+Math.random()*.1
        });
    }

    function draw(){
        ctx.clearRect(0,0,w,h);
        for(let i of p){
            i.x+=i.vx; i.y+=i.vy;
            if(i.x<0)i.x=w;if(i.x>w)i.x=0;
            if(i.y<0)i.y=h;if(i.y>h)i.y=0;

            const g=ctx.createRadialGradient(i.x,i.y,0,i.x,i.y,i.r*15);
            g.addColorStop(0,`rgba(0,234,255,${i.a})`);
            g.addColorStop(1,'rgba(0,234,255,0)');
            ctx.fillStyle=g;
            ctx.fillRect(i.x-i.r*15,i.y-i.r*15,i.r*30,i.r*30);
        }
        requestAnimationFrame(draw);
    }
    draw();
})();
</script>

</body>
</html>
