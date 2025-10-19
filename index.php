<!-- ===============================================================
// FILE: index.php
// Homepage con panoramica completa del percorso
// Include card interattive per ogni giorno e statistiche
// =============================================================== -->

<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container my-5">
    
    <!-- Hero Section -->
    <header class="text-center mb-5 p-5 bg-gradient-primary rounded-4 shadow-lg">
        <div class="hero-content">
            <h1 class="fw-bold display-3 mb-3">
                <i class="fas fa-database me-3"></i>
                Database Relazionali
            </h1>
            <p class="lead fs-4 mb-4">
                Padroneggia i database in <span class="badge bg-warning text-dark fs-5">10 giorni</span>
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
                <span class="badge bg-light text-primary px-3 py-2">Modello Relazionale</span>
                <span class="badge bg-light text-primary px-3 py-2">SQL</span>
                <span class="badge bg-light text-primary px-3 py-2">Normalizzazione</span>
                <span class="badge bg-light text-primary px-3 py-2">Transazioni</span>
            </div>
            <a href="giorno1.php" class="btn btn-warning btn-lg px-5 py-3 shadow">
                <i class="fas fa-play-circle me-2"></i>Inizia Subito
            </a>
        </div>
    </header>

    <!-- Stats Overview -->
    <section class="mb-5">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                        <h3 class="fw-bold">10</h3>
                        <p class="text-muted mb-0">Giorni di Formazione</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-tasks fa-3x text-success mb-3"></i>
                        <h3 class="fw-bold">50+</h3>
                        <p class="text-muted mb-0">Esercizi Pratici</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-code fa-3x text-info mb-3"></i>
                        <h3 class="fw-bold">100+</h3>
                        <p class="text-muted mb-0">Query SQL</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-project-diagram fa-3x text-warning mb-3"></i>
                        <h3 class="fw-bold">1</h3>
                        <p class="text-muted mb-0">Progetto Finale</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodo di Studio -->
    <section class="mb-5 p-4 bg-warning bg-opacity-10 border-start border-warning border-5 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-2 text-center">
                <i class="fas fa-lightbulb fa-4x text-warning"></i>
            </div>
            <div class="col-md-10">
                <h2 class="fw-bold text-warning mb-3">
                    <i class="fas fa-brain me-2"></i>Approccio "Pratica Prima"
                </h2>
                <p class="lead mb-3">
                    Questo corso segue il metodo <strong>"Learn by Doing"</strong>: 
                    prima pratichi su un database reale, poi approfondisci la teoria.
                </p>
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                            <div>
                                <h5 class="fw-bold">Cosa Fare</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-arrow-right text-success me-2"></i>Esegui ogni esercizio</li>
                                    <li><i class="fas fa-arrow-right text-success me-2"></i>Sperimenta sul database</li>
                                    <li><i class="fas fa-arrow-right text-success me-2"></i>Analizza i risultati</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-times-circle text-danger fa-2x me-3"></i>
                            <div>
                                <h5 class="fw-bold">Cosa Evitare</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-arrow-right text-danger me-2"></i>Non solo teoria</li>
                                    <li><i class="fas fa-arrow-right text-danger me-2"></i>Non copiare senza capire</li>
                                    <li><i class="fas fa-arrow-right text-danger me-2"></i>Non saltare esercizi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Percorso Giorni con Card -->
    <section class="mb-5">
        <h2 class="fw-bold text-center mb-5">
            <i class="fas fa-route me-2"></i>Il Tuo Percorso di 10 Giorni
        </h2>

        <?php
        // Definizione completa dei contenuti
        $contenuti = [
            1 => [
                'titolo' => 'Modello Relazionale',
                'descrizione' => 'Tabelle, tuple, attributi, chiavi primarie e vincoli',
                'icona' => 'fa-table',
                'colore' => 'primary',
                'durata' => '3-4 ore'
            ],
            2 => [
                'titolo' => 'Algebra Relazionale',
                'descrizione' => 'Selezione, proiezione, join e operatori relazionali',
                'icona' => 'fa-project-diagram',
                'colore' => 'success',
                'durata' => '4-5 ore'
            ],
            3 => [
                'titolo' => 'SQL Fondamentale',
                'descrizione' => 'SELECT, WHERE, ORDER BY, GROUP BY, HAVING',
                'icona' => 'fa-code',
                'colore' => 'info',
                'durata' => '5-6 ore'
            ],
            4 => [
                'titolo' => 'SQL Avanzato',
                'descrizione' => 'Subquery, JOIN complessi, funzioni aggregate',
                'icona' => 'fa-cogs',
                'colore' => 'warning',
                'durata' => '5-6 ore'
            ],
            5 => [
                'titolo' => 'Normalizzazione',
                'descrizione' => '1NF, 2NF, 3NF, BCNF - progettazione ottimale',
                'icona' => 'fa-sitemap',
                'colore' => 'danger',
                'durata' => '4-5 ore'
            ],
            6 => [
                'titolo' => 'Modello E-R',
                'descrizione' => 'Entità, relazioni, cardinalità, progettazione concettuale',
                'icona' => 'fa-share-alt',
                'colore' => 'primary',
                'durata' => '4-5 ore'
            ],
            7 => [
                'titolo' => 'Indicizzazione',
                'descrizione' => 'B-Tree, Hash, ottimizzazione performance',
                'icona' => 'fa-search-plus',
                'colore' => 'success',
                'durata' => '3-4 ore'
            ],
            8 => [
                'titolo' => 'Transazioni',
                'descrizione' => 'ACID, concorrenza, locking, isolamento',
                'icona' => 'fa-exchange-alt',
                'colore' => 'info',
                'durata' => '4-5 ore'
            ],
            9 => [
                'titolo' => 'Tecnologie Avanzate',
                'descrizione' => 'Trigger, stored procedure, viste materializzate',
                'icona' => 'fa-rocket',
                'colore' => 'warning',
                'durata' => '5-6 ore'
            ],
            10 => [
                'titolo' => 'Progetto Finale',
                'descrizione' => 'Database completo: e-commerce o gestionale',
                'icona' => 'fa-trophy',
                'colore' => 'danger',
                'durata' => '8-10 ore'
            ]
        ];

        // Raggruppa in righe da 5
        $righe = array_chunk($contenuti, 5, true);
        foreach($righe as $indiceRiga => $riga):
        ?>
            <div class="row g-4 mb-4">
                <?php foreach($riga as $numGiorno => $info): ?>
                    <div class="col-md-2-4 col-lg-2-4">
                        <a href="giorno<?= $numGiorno ?>.php" class="text-decoration-none">
                            <div class="card h-100 shadow-sm hover-lift border-<?= $info['colore'] ?> border-2">
                                <div class="card-header bg-<?= $info['colore'] ?> text-white text-center">
                                    <h5 class="mb-0">
                                        <i class="fas <?= $info['icona'] ?> me-2"></i>
                                        Giorno <?= $numGiorno ?>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title fw-bold text-<?= $info['colore'] ?>">
                                        <?= $info['titolo'] ?>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        <?= $info['descrizione'] ?>
                                    </p>
                                    <div class="mt-3">
                                        <small class="text-muted">
                                            <i class="fas fa-clock me-1"></i><?= $info['durata'] ?>
                                        </small>
                                    </div>
                                </div>
                                <div class="card-footer bg-light text-center">
                                    <small class="text-<?= $info['colore'] ?> fw-bold">
                                        Vai al Giorno <i class="fas fa-arrow-right ms-1"></i>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Call to Action -->
    <section class="text-center p-5 bg-dark text-white rounded-4 shadow-lg">
        <h2 class="fw-bold mb-3">Pronto a Diventare un Esperto di Database?</h2>
        <p class="lead mb-4">Inizia oggi il tuo percorso verso la padronanza dei database relazionali</p>
        <a href="giorno1.php" class="btn btn-warning btn-lg px-5 py-3">
            <i class="fas fa-rocket me-2"></i>Inizia il Giorno 1
        </a>
    </section>

</div>

<?php include 'includes/footer.php'; ?>