<?php
// ============================================
// FUNCIONES PARA EQUIPO - INDEX (MODAL CORTO)
// ============================================
function generarCardsEquipo($integrantes) {
    $html = '';
    foreach ($integrantes as $i) {
        $html .= '
        <div class="col-md-4 col-lg-3 col-xl-15">
            <div class="card h-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#modal'.$i['id'].'">
                <img src="'.$i['imagen'].'" class="rounded-circle mx-auto mt-3" width="120" height="120" alt="'.$i['nombre'].'">
                <div class="card-body">
                    <h5 class="card-title fw-bold">'.$i['nombre'].'</h5>
                    <p class="card-text text-secondary small">'.$i['rol'].'</p>
                    <div class="social-links">
                        
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

function generarModalesEquipoIndex($integrantes) {
    $html = '';
    foreach ($integrantes as $i) {
        $html .= '
        <div class="modal fade" id="modal'.$i['id'].'" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <img src="'.$i['imagen'].'" class="rounded-circle mb-3" width="100" height="100" alt="'.$i['nombre'].'">
                        <h3 class="fw-bold">'.$i['nombre'].'</h3>
                        <p class="text-primary mb-2">'.$i['rol'].'</p>
                        <p class="mt-2">'.$i['descripcion_corta'].'</p>
                        <div class="mt-4">
                            <a href="acerca.php" class="btn btn-outline-dark btn-sm">Ver perfil completo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

// ============================================
// FUNCIONES PARA EQUIPO - ACERCA (MODAL COMPLETO)
// ============================================
function generarCardsEquipoAcerca($integrantes) {
    $html = '';
    foreach ($integrantes as $i) {
        $html .= '
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm p-4" data-bs-toggle="modal" data-bs-target="#modal'.$i['id'].'">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="'.$i['imagen'].'" class="rounded-circle img-fluid mb-3 mb-md-0" width="150" height="150" alt="'.$i['nombre'].'">
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold">'.$i['nombre'].'</h3>
                        <p class="text-primary mb-2">'.$i['rol'].'</p>
                        <p class="text-secondary">'.$i['descripcion_corta'].'</p>
                        <div class="mt-2">
                            '.generarBadges(array_slice($i['habilidades'], 0, 4)).'
                        </div>
                        <span class="btn btn-outline-dark btn-sm mt-3">Ver perfil completo</span>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

function generarModalesEquipoAcerca($integrantes) {
    $html = '';
    foreach ($integrantes as $i) {
        $badges = generarBadges($i['habilidades']);
        $proyectos = generarListaProyectos($i['proyectos']);
        $redes = generarRedesSociales($i);
        
        $html .= '
        <div class="modal fade" id="modal'.$i['id'].'" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <img src="'.$i['imagen'].'" class="rounded-circle mb-3" width="120" height="120" alt="'.$i['nombre'].'">
                        <h3 class="fw-bold">'.$i['nombre'].'</h3>
                        <p class="text-primary mb-2">'.$i['rol'].'</p>
                        <p class="mt-3">'.$i['descripcion_larga'].'</p>
                        
                        <div class="mt-4 text-start">
                            <h6 class="fw-bold">Tecnologías</h6>
                            <div class="mt-2">'.$badges.'</div>
                        </div>
                        
                        <div class="mt-4 text-start">
                            <h6 class="fw-bold">Proyectos destacados</h6>
                            '.$proyectos.'
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

// ============================================
// FUNCIONES PARA POSTS
// ============================================
function generarCardsPosts($posts) {
    $html = '';
    foreach ($posts as $p) {
        $html .= '
        <div class="col-md-6 col-lg-4">
            <div class="card h-100" data-bs-toggle="modal" data-bs-target="#modal'.$p['id'].'">
                <div class="card-body p-4">
                    <span class="badge bg-secondary mb-2">'.$p['autor'].'</span>
                    <h5 class="card-title fw-bold">'.$p['titulo'].'</h5>
                    <p class="card-text text-secondary small">'.$p['resumen'].'</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">'.$p['fecha'].'</small>
                        <span class="btn btn-outline-dark btn-sm">Leer más</span>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

function generarModalesPosts($posts) {
    $html = '';
    foreach ($posts as $p) {
        $html .= '
        <div class="modal fade" id="modal'.$p['id'].'" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <span class="badge bg-secondary">'.$p['autor'].' · '.$p['categoria'].'</span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body p-4">
                        <h2 class="fw-bold mb-3">'.$p['titulo'].'</h2>
                        <p class="text-muted mb-4"><i class="bi bi-calendar3 me-2"></i>'.$p['fecha'].'</p>
                        
                        <img src="'.$p['imagen'].'" class="img-fluid rounded mb-4" alt="'.$p['titulo'].'">
                        
                        '.$p['contenido'].'
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $html;
}

// ============================================
// FUNCIONES AUXILIARES
// ============================================
function generarBadges($habilidades) {
    $html = '';
    foreach ($habilidades as $h) {
        $html .= '<span class="badge bg-light text-dark p-2 me-1 mb-1">'.$h.'</span>';
    }
    return $html;
}

function generarListaProyectos($proyectos) {
    $html = '<ul class="list-unstyled mt-3 text-start">';
    foreach ($proyectos as $p) {
        $html .= '<li><i class="bi bi-check-circle-fill text-primary me-2"></i>'.$p.'</li>';
    }
    $html .= '</ul>';
    return $html;
}

function generarRedesSociales($integrante) {
    $html = '';
    if (isset($integrante['github'])) {
        $html .= '<a href="'.$integrante['github'].'" class="btn btn-outline-dark btn-sm me-2" target="_blank"><i class="bi bi-github"></i> GitHub</a>';
    }
    if (isset($integrante['linkedin'])) {
        $html .= '<a href="'.$integrante['linkedin'].'" class="btn btn-outline-dark btn-sm me-2" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>';
    }
    if (isset($integrante['behance'])) {
        $html .= '<a href="'.$integrante['behance'].'" class="btn btn-outline-dark btn-sm" target="_blank"><i class="bi bi-behance"></i> Behance</a>';
    }
    return $html;
}
?>