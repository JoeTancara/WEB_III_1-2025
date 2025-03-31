<?php
include 'config.php';
?>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; height: 100vh; position: fixed;">
    <div class="text-center mb-4">
        <a href="<?php echo PAGE_INICIO; ?>" class="d-flex flex-column align-items-center link-dark text-decoration-none">
            <img src="<?php echo LOGO_URL; ?>" alt="Logo" style="width: 50px; height: 50px; object-fit: contain; margin-bottom: 10px;">
            <span class="fs-4 fw-bold">JoeDev</span>
        </a>
    </div>
    <hr class="my-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?php echo PAGE_INICIO; ?>" class="nav-link d-flex align-items-center">
                <i class="bi bi-house me-2"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo PAGE_1; ?>" class="nav-link d-flex align-items-center">
                <i class="bi bi-file-earmark me-2"></i>
                <span>Página 1</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo PAGE_2; ?>" class="nav-link d-flex align-items-center">
                <i class="bi bi-file-earmark me-2"></i>
                <span>Página 2</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo PAGE_3; ?>" class="nav-link d-flex align-items-center">
                <i class="bi bi-file-earmark me-2"></i>
                <span>Página 3</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo PAGE_4; ?>" class="nav-link d-flex align-items-center">
                <i class="bi bi-file-earmark me-2"></i>
                <span>Página 4</span>
            </a>
        </li>
    </ul>
</div>