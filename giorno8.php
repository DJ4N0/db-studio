<?php
// ===============================================================
// FILE: giorno8.php - TRANSAZIONI
// ===============================================================

$giorno = 8;
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-info">
            <i class="fas fa-exchange-alt me-3"></i>Giorno 8
        </h1>
        <p class="lead text-muted">Transazioni - ACID e Controllo della Concorrenza</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-info" role="progressbar" style="width: 80%;"></div>
    </div>
    <p class="text-center text-muted mb-5">80% completato</p>

    <section class="mb-5">
        <h3 class="fw-bold text-info mb-4">
            <i class="fas fa-book-open me-2"></i>Proprietà ACID
        </h3>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="mb-0">Atomicity (Atomicità)</h6>
                    </div>
                    <div class="card-body">
                        <p class="small mb-3">
                            Tutto o niente. La transazione si completa totalmente o non si fa affatto.
                        </p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>BEGIN;
  UPDATE Conto1 SET saldo = saldo - 100;
  UPDATE Conto2 SET saldo = saldo + 100;
COMMIT;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h6 class="mb-0">Consistency (Coerenza)</h6>
                    </div>
                    <div class="card-body">
                        <p class="small mb-3">
                            I dati rimangono coerenti. I vincoli d'integrità sono sempre rispettati.
                        </p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>-- Vincolo: saldo >= 0
-- Non posso prelevare più di quanto ho</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h6 class="mb-0">Isolation (Isolamento)</h6>
                    </div>
                    <div class="card-body">
                        <p class="small mb-3">
                            Le transazioni concorrenti non si disturbano. Ogni transazione è isolata.
                        </p>
                        <p class="small text-muted">
                            Livelli: Dirty Read, Non-Repeatable Read, Phantom Read
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h6 class="mb-0">Durability (Durabilità)</h6>
                    </div>
                    <div class="card-body">
                        <p class="small mb-3">
                            Una volta committata, la transazione è permanente anche con crash.
                        </p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>COMMIT; -- È permanente!</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-info mb-4">Comandi Base</h3>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.8rem;"><code>BEGIN;
-- Operazioni
COMMIT;</code></pre>
                        <p class="small text-muted">Esecuzione riuscita</p>
                    </div>

                    <div class="col-md-4">
                        <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.8rem;"><code>BEGIN;
-- Operazioni
ROLLBACK;</code></pre>
                        <p class="small text-muted">Annulla tutto</p>
                    </div>

                    <div class="col-md-4">
                        <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.8rem;"><code>BEGIN;
-- Savepoint S1
ROLLBACK TO S1;</code></pre>
                        <p class="small text-muted">Rollback parziale</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno7.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 7
        </a>
        <a href="giorno9.php" class="btn btn-info">
            Giorno 9 - Tecnologie Avanzate
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
