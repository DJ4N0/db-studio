<!-- ===============================================================
// FILE: includes/navbar.php
// Navbar responsive con dropdown per i giorni e indicatore progresso
// Mostra il giorno corrente evidenziato
// =============================================================== -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-database me-2 fa-lg"></i>
            <span class="fw-bold">Database Trainer</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link <?= (!isset($giorno)) ? 'active' : '' ?>" href="index.php">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>

                <!-- Dropdown Giorni 1-5 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGiorni1" data-bs-toggle="dropdown">
                        <i class="fas fa-book me-1"></i>Giorni 1-5
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <li>
                                <a class="dropdown-item <?= (isset($giorno) && $giorno == $i) ? 'active' : '' ?>" 
                                   href="giorno<?= $i ?>.php">
                                    <i class="fas fa-circle-notch me-2"></i>Giorno <?= $i ?>
                                    <?php if(isset($giorno) && $giorno == $i): ?>
                                        <i class="fas fa-check-circle text-success float-end"></i>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </li>

                <!-- Dropdown Giorni 6-10 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGiorni2" data-bs-toggle="dropdown">
                        <i class="fas fa-graduation-cap me-1"></i>Giorni 6-10
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php for($i = 6; $i <= 10; $i++): ?>
                            <li>
                                <a class="dropdown-item <?= (isset($giorno) && $giorno == $i) ? 'active' : '' ?>" 
                                   href="giorno<?= $i ?>.php">
                                    <i class="fas fa-circle-notch me-2"></i>Giorno <?= $i ?>
                                    <?php if(isset($giorno) && $giorno == $i): ?>
                                        <i class="fas fa-check-circle text-success float-end"></i>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </li>

                <!-- Progress Indicator (Solo su desktop) -->
                <?php if(isset($giorno)): ?>
                <li class="nav-item d-none d-lg-block ms-3">
                    <div class="progress" style="width: 150px; height: 8px; margin-top: 10px;">
                        <div class="progress-bar bg-success" 
                             style="width: <?= ($giorno * 10) ?>%"
                             title="Progresso: <?= ($giorno * 10) ?>%">
                        </div>
                    </div>
                    <small class="text-light d-block text-center" style="font-size: 0.7rem;">
                        Giorno <?= $giorno ?>/10
                    </small>
                </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumb per orientamento -->
<?php if(isset($giorno)): ?>
<nav aria-label="breadcrumb" class="bg-light py-2">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Giorno <?= $giorno ?></li>
        </ol>
    </div>
</nav>
<?php endif; ?>