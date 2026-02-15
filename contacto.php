<?php include 'includes/header.php'; ?>

<section class="py-5" style="min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bold">Contacto</h1>
                    <p class="lead text-secondary">¿Tienes un proyecto? Escríbenos</p>
                    <hr class="w-25 mx-auto">
                </div>

                <div class="card border-0 shadow-sm p-4">
                    <div class="card-body">
                        
                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success text-center">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                ¡Mensaje enviado con éxito! Te responderemos pronto.
                            </div>
                            <div class="text-center mt-4">
                                <a href="index.php" class="btn btn-outline-dark">Volver al inicio</a>
                            </div>
                        <?php else: ?>

                            <!-- CAMBIA ESTE URL POR TU FORMSPREE -->
                            <form action="https://formspree.io/f/mbdagyva" method="POST">     
                                <input type="hidden" name="_subject" value="Nuevo mensaje desde Blog Profesional">
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Nombre completo</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ej: Ana Pérez" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Correo electrónico</label>
                                        <!-- CAMBIADO DE 'email' A '_replyto' -->
                                        <input type="email" name="_replyto" class="form-control" placeholder="ejemplo@correo.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Asunto</label>
                                        <input type="text" name="asunto" class="form-control" placeholder="¿Sobre qué nos quieres escribir?">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Mensaje</label>
                                        <textarea name="mensaje" class="form-control" rows="5" placeholder="Cuéntanos tu proyecto o consulta..." required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-dark w-100 py-2">
                                            <i class="bi bi-send me-2"></i>Enviar mensaje
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>