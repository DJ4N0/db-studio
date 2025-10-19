<?php
// ===============================================================
// FILE: giorno4.php
// SQL Avanzato - GROUP BY, HAVING, Aggregate Functions
// ===============================================================

$giorno = 4;
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container my-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-warning">
            <i class="fas fa-cogs me-3"></i>Giorno 4
        </h1>
        <p class="lead text-muted">SQL Avanzato - Aggregazioni e Raggruppamenti</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" 
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>40% del percorso completato</small>
    </p>

    <!-- ============= SEZIONE 1: FUNZIONI AGGREGATE ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-warning mb-4">
            <i class="fas fa-calculator me-2"></i>Funzioni Aggregate
        </h3>
        
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="fas fa-sum me-2"></i>Funzioni di Aggregazione
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Le funzioni aggregate operano su un set di valori e restituiscono un singolo risultato.</p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">COUNT() - Conteggio</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT COUNT(*) FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Ritorna il numero totale di righe
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">SUM() - Somma</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT SUM(saldo) FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Somma tutti i saldi dei clienti
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">AVG() - Media</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT AVG(saldo) FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Calcola la media dei saldi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">MIN() - Minimo</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT MIN(saldo) FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Il saldo più basso
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">MAX() - Massimo</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT MAX(saldo) FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Il saldo più alto
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">DISTINCT - Valori Unici</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT DISTINCT città FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Elimina i duplicati
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info">
                    <strong>Importante:</strong> Le funzioni aggregate ignorano i valori NULL
                </div>
            </div>
        </div>

        <!-- GROUP BY -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-object-group me-2"></i>GROUP BY - Raggruppamento
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">GROUP BY raggruppa le righe secondo uno o più attributi.</p>

                <div class="card mb-3">
                    <div class="card-body">
                        <p class="small mb-2"><strong>Sintassi:</strong></p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT colonna_raggruppamento, COUNT(*)
FROM tabella
GROUP BY colonna_raggruppamento;</code></pre>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Clienti per Città</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT città, COUNT(*) as numero
FROM Clienti
GROUP BY città;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Conta quanti clienti per ogni città
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Saldo Medio per Città</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT città, AVG(saldo) as media
FROM Clienti
GROUP BY città;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Media del saldo per città
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HAVING -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">
                    <i class="fas fa-filter me-2"></i>HAVING - Filtrare Aggregati
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">HAVING filtra i risultati di GROUP BY (come WHERE ma per aggregati).</p>

                <div class="alert alert-warning mb-3">
                    <strong>Differenza:</strong> WHERE filtra PRIMA del raggruppamento, HAVING DOPO
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Città con 2+ Clienti</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT città, COUNT(*) as n
FROM Clienti
GROUP BY città
HAVING COUNT(*) >= 2;</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Città con Saldo Medio > 15000</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT città, AVG(saldo) as media
FROM Clienti
GROUP BY città
HAVING AVG(saldo) > 15000;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 2: ESERCIZIO ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-warning mb-4">
            <i class="fas fa-gamepad me-2"></i>Esercizio: Query con Aggregati
        </h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="fas fa-code me-2"></i>Scrivi la Query
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Es. 1</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    <strong>Richiesta:</strong> Saldo medio per città
                                </p>
                                <textarea class="form-control form-control-sm" rows="3"></textarea>
                                <button class="btn btn-sm btn-warning mt-2">Verifica</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Es. 2</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    <strong>Richiesta:</strong> Città con più di 2 clienti
                                </p>
                                <textarea class="form-control form-control-sm" rows="3"></textarea>
                                <button class="btn btn-sm btn-warning mt-2">Verifica</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigazione -->
    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno3.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 3
        </a>
        <a href="giorno5.php" class="btn btn-warning">
            Giorno 5 - Normalizzazione
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>