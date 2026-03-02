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
            <p class="text-secondary">4 profesionales apasionados por la tecnología</p>
        </div>
        
        <div class="row g-4 justify-content-center">
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
                        <p class="text-secondary small"><?= $miembro['descripcion_corta'] ?></p>
                        <span class="btn btn-outline-dark btn-sm">Ver perfil</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- MODALES DEL EQUIPO - VERSIÓN CORTA (SIN PDF) -->
<?php foreach ($integrantes as $miembro): 
    $modalId = 'modal' . $miembro['id'];
?>
<div class="modal fade" id="<?= $modalId ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
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
                             style="max-width: 120px; height: 120px; object-fit: cover;">
                        <p class="text-muted small"><?= $miembro['descripcion_corta'] ?></p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="mb-3">Descripción</h5>
                        <p><?= $miembro['descripcion_larga'] ?></p>
                        
                        <!-- HABILIDADES BLANDAS -->
                        <?php if (!empty($miembro['habilidades_blandas'])): ?>
                        <div class="mt-3">
                            <h6>Habilidades Blandas</h6>
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
                            <h6>Habilidades Técnicas</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <?php foreach ($miembro['habilidades_tecnicas'] as $habilidad): ?>
                                <span class="badge bg-dark"><?= $habilidad ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
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

<!-- ÚLTIMOS POSTS -->
<section class="latest-posts py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Últimos Artículos</h2>
            <p class="text-secondary">Compartimos nuestra experiencia y conocimientos</p>
        </div>
        
        <div class="row g-4">
            <?php 
            $ultimos_posts = array_slice($posts, 0, 3);
            foreach ($ultimos_posts as $post): 
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm" 
                     data-bs-toggle="modal" 
                     data-bs-target="#modalPost<?= preg_replace('/[^a-zA-Z0-9]/', '', $post['id']) ?>" 
                     style="cursor: pointer;">
                    <div class="card-body p-4">
                        <span class="badge bg-secondary mb-2"><?= $post['autor'] ?></span>
                        <h5 class="card-title fw-bold"><?= $post['titulo'] ?></h5>
                        <p class="card-text text-secondary small"><?= $post['resumen'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><?= $post['fecha'] ?></small>
                            <span class="btn btn-outline-dark btn-sm">Leer más</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-4">
            <a href="categorias.php" class="btn btn-outline-secondary">Ver todos los artículos</a>
        </div>
    </div>
</section>

<!-- MODALES DE LOS POSTS -->
<?php foreach ($posts as $post): 
    $modalId = 'modalPost' . preg_replace('/[^a-zA-Z0-9]/', '', $post['id']);
?>
<div class="modal fade" id="<?= $modalId ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title"><?= $post['titulo'] ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <strong>Por:</strong> <?= $post['autor'] ?> | 
                    <strong>Categoría:</strong> <?= $post['categoria'] ?> | 
                    <strong>Fecha:</strong> <?= $post['fecha'] ?>
                </div>
                <hr>
                <p class="lead"><?= $post['resumen'] ?></p>
                <p><?= $post['contenido'] ?? 'Contenido completo del artículo...' ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>