<?php include 'includes/header.php'; ?>
<?php include 'data/equipo.php'; ?>
<?php include 'includes/funciones.php'; ?>

<section class="py-5">
    <div class="container">
        <!-- TÍTULO -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Acerca de nosotros</h1>
            <p class="lead text-secondary">Conoce al equipo detrás del blog</p>
            <hr class="w-25 mx-auto">
        </div>

        <!-- DESCRIPCIÓN DEL EQUIPO -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <p class="fs-5">Somos 4 desarrolladores y diseñadores apasionados por la tecnología. Creamos soluciones digitales funcionales, atractivas y escalables. ¿Tienes un proyecto? <a href="contacto.php" class="text-decoration-none">Contáctanos</a>.</p>
            </div>
        </div>

        <!-- CARDS DEL EQUIPO - VERSIÓN GRANDE -->
        <div class="row g-4">
            <?= generarCardsEquipoAcerca($integrantes) ?>
        </div>

        <!-- MODALES DEL EQUIPO - VERSIÓN COMPLETA -->
        <?= generarModalesEquipoAcerca($integrantes) ?>

    </div>
</section>

<?php include 'includes/footer.php'; ?>