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

        <!-- CARDS DEL EQUIPO -->
        <div class="row g-4">
            <?php foreach ($integrantes as $miembro): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center"
                        data-bs-toggle="modal"
                        data-bs-target="#modal<?= $miembro['id'] ?>"
                        style="cursor: pointer;">
                        <div class="card-body p-4">
                            <img src="assets/img/<?= $miembro['foto'] ?>"
                                alt="<?= $miembro['nombre'] ?>"
                                class="rounded-circle mb-3"
                                width="120"
                                height="120"
                                style="object-fit: cover;">
                            <h4 class="fw-bold"><?= $miembro['nombre'] ?></h4>
                            <p class="small"><?= $miembro['descripcion_corta'] ?></p>
                            <span class="btn btn-outline-dark btn-sm">Ver perfil</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- MODALES DEL EQUIPO -->
        <?php foreach ($integrantes as $miembro):
            $modalId = 'modal' . $miembro['id'];
            $ruta_pdf = 'assets/uploads/' . $miembro['pdf'];
        ?>
            <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title"><?= $miembro['nombre'] ?></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 text-center mb-3 mb-md-0">
                                    <img src="assets/img/<?= $miembro['foto'] ?>"
                                        alt="<?= $miembro['nombre'] ?>"
                                        class="img-fluid rounded-circle mb-3"
                                        style="max-width: 150px; height: 150px; object-fit: cover;">

                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Acerca de mí</h4>
                                    <p class="lead"><?= $miembro['descripcion_larga'] ?></p>

                                    <!-- HABILIDADES BLANDAS -->
                                    <?php if (!empty($miembro['habilidades_blandas'])): ?>
                                        <div class="mt-4">
                                            <h5>Habilidades Blandas</h5>
                                            <div class="d-flex flex-wrap gap-2">
                                                <?php foreach ($miembro['habilidades_blandas'] as $habilidad): ?>
                                                    <span class="badge bg-secondary"><?= $habilidad ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- HABILIDADES TÉCNICAS -->
                                    <?php if (!empty($miembro['habilidades_tecnicas'])): ?>
                                        <div class="mt-3">
                                            <h5>Habilidades Técnicas</h5>
                                            <div class="d-flex flex-wrap gap-2">
                                                <?php foreach ($miembro['habilidades_tecnicas'] as $habilidad): ?>
                                                    <span class="badge bg-dark"><?= $habilidad ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- BOTÓN DE DESCARGA DE HOJA DE VIDA -->
                                    <div class="mt-4 p-3 bg-light rounded">
                                        <h5 class="mb-3">
                                            📄 Hoja de Vida
                                        </h5>

                                        <a href="<?= $ruta_pdf ?>"
                                            class="btn btn-success"
                                            download="CV_<?= $miembro['nombre'] ?>.pdf">
                                            ⬇️ Descargar CV (PDF)
                                        </a>

                                        <p class="text-muted small mt-2 mb-0">
                                            <i class="bi bi-info-circle"></i>
                                            Formato PDF - Última actualización: 2024
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php include 'includes/footer.php'; ?>