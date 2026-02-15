<?php include 'includes/header.php'; ?>
<?php include 'data/equipo.php'; ?>
<?php include 'data/posts.php'; ?>
<?php include 'includes/funciones.php'; ?>

<!-- HERO SECTION -->
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold text-dark">Blog Profesional</h1>
                <p class="lead text-secondary">Compartimos conocimiento sobre tecnología, desarrollo web y diseño.</p>
                <hr class="w-25 mx-auto border-secondary">
            </div>
        </div>
    </div>
</section>

<!-- EQUIPO SECTION -->
<section class="team py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nuestro Equipo</h2>
            <p class="text-secondary">5 profesionales apasionados por la tecnología</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?= generarCardsEquipo($integrantes) ?>
        </div>
    </div>
</section>

<!-- MODALES DEL EQUIPO - VERSIÓN CORTA -->
<?= generarModalesEquipoIndex($integrantes) ?>

<!-- ÚLTIMOS POSTS -->
<section class="latest-posts py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Últimos Artículos</h2>
            <p class="text-secondary">Compartimos nuestra experiencia y conocimientos</p>
        </div>
        
        <div class="row g-4">
            <?= generarCardsPosts(array_slice($posts, 0, 3)) ?>
        </div>
        
        <div class="text-center mt-4">
            <a href="categorias.php" class="btn btn-outline-secondary">Ver todos los artículos</a>
        </div>
    </div>
</section>

<!-- MODALES DE LOS POSTS -->
<?= generarModalesPosts($posts) ?>

<?php include 'includes/footer.php'; ?>