<?php include 'includes/header.php'; ?>
<?php include 'data/posts.php'; ?>
<?php include 'includes/funciones.php'; ?>

<section class="py-5" style="min-height: 80vh;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Categorías</h1>
            <p class="lead text-secondary">Explora nuestros artículos por tema</p>
            <hr class="w-25 mx-auto">
        </div>

        <?php
        // Obtener categorías únicas de los posts
        $categorias = [];
        foreach ($posts as $post) {
            $categorias[$post['categoria']] = ($categorias[$post['categoria']] ?? 0) + 1;
        }
        ?>

        <!-- LISTA DE CATEGORÍAS -->
        <div class="row g-4 mb-5">
            <?php foreach ($categorias as $categoria => $total): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm" data-bs-toggle="collapse" data-bs-target="#cat-<?= strtolower(str_replace(' ', '', $categoria)) ?>" style="cursor: pointer;">
                    <div class="card-body text-center p-4">
                        <h3 class="fw-bold"><?= $categoria ?></h3>
                        <p class="text-secondary"><?= $total ?> artículos</p>
                        <span class="btn btn-outline-dark btn-sm">Ver artículos</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- POSTS POR CATEGORÍA (COLLAPSE) -->
        <?php foreach ($categorias as $categoria => $total): ?>
        <div class="collapse mt-4" id="cat-<?= strtolower(str_replace(' ', '', $categoria)) ?>">
            <div class="bg-light p-4 rounded">
                <h2 class="fw-bold mb-4"><?= $categoria ?></h2>
                <div class="row g-4">
                    <?php foreach ($posts as $post): ?>
                        <?php if ($post['categoria'] === $categoria): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100" data-bs-toggle="modal" data-bs-target="#modal<?= preg_replace('/[^a-zA-Z0-9]/', '', $post['id']) ?>" style="cursor: pointer;">
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
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- MODALES DE POSTS -->
        <?= generarModalesPosts($posts) ?>

    </div>
</section>

<?php include 'includes/footer.php'; ?>