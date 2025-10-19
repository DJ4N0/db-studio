
<?php
// ===============================================================
// FILE: giorno7.php - INDICIZZAZIONE
// ===============================================================

$giorno = 7;
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-success">
            <i class="fas fa-search-plus me-3"></i>Giorno 7
        </h1>
        <p class="lead text-muted">Indicizzazione - Ottimizzazione delle Query</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-success" role="progressbar" style="width: 70%;"></div>
    </div>
    <p class="text-center text-muted mb-5">70% completato</p>

    <section class="mb-5">
        <h3 class="fw-bold text-success mb-4">
            <i class="fas fa-book-open me-2"></i>Tipi di Indici
        </h3>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Indice Primario vs Secondario</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Indice Primario</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>CREATE UNIQUE INDEX 
  idx_matricola 
  ON Studenti(matricola);</code></pre>
                                <p class="small text-muted mt-2">
                                    Basato sulla chiave primaria. Veloce ma può esservene solo uno.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Indice Secondario</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>CREATE INDEX 
  idx_cognome 
  ON Studenti(cognome);</code></pre>
                                <p class="small text-muted mt-2">
                                    Su qualsiasi colonna. Utile per query frequenti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Alberi B+ vs Hash</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">B+ Tree</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li>✅ Range query efficienti</li>
                                    <li>✅ ORDER BY veloce</li>
                                    <li>✅ Equilibrato automaticamente</li>
                                    <li>❌ Più complesso</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Hash Index</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li>✅ Ricerca esatta velocissima</li>
                                    <li>✅ Semplice</li>
                                    <li>❌ Range query lente</li>
                                    <li>❌ Fragile con collisioni</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Indici Compositi (Multipli Attributi)</h5>
            </div>
            <div class="card-body">
                <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.9rem;"><code>-- Indice su più colonne
CREATE INDEX idx_cognome_nome 
  ON Studenti(cognome, nome);

-- Utile per query come:
SELECT * FROM Studenti 
  WHERE cognome = 'Rossi' AND nome = 'Mario';</code></pre>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-success mb-4">Esercizio: Analizza le Query</h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Quale indice creeresti?</h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Per queste query frequenti:</p>
                
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="small mb-2">Query 1:</p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT * FROM Clienti 
  WHERE email = 'mario@test.com';</code></pre>
                        <textarea class="form-control form-control-sm mt-2" rows="2" placeholder="Proponi un indice..."></textarea>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <p class="small mb-2">Query 2:</p>
                        <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.8rem;"><code>SELECT * FROM Ordini 
  WHERE data BETWEEN '2024-01-01' AND '2024-12-31';</code></pre>
                        <textarea class="form-control form-control-sm mt-2" rows="2" placeholder="Proponi un indice..."></textarea>
                    </div>
                </div>

                <button class="btn btn-success">Verifica</button>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno6.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 6
        </a>
        <a href="giorno8.php" class="btn btn-success">
            Giorno 8 - Transazioni
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</main>
<?php include 'includes/footer.php'; ?>