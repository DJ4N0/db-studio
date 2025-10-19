<?php
// ===============================================================
// FILE: giorno2.php
// Lezione sull'Algebra Relazionale
// Operatori: selezione, proiezione, join, unione, differenza
// ===============================================================

$giorno = 2;
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container my-5">

    <!-- Header Giorno 2 -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-success">
            <i class="fas fa-project-diagram me-3"></i>Giorno 2
        </h1>
        <p class="lead text-muted">Algebra Relazionale - Operatori e Query</p>
    </div>

    <!-- Progress indicator -->
    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" 
             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>20% del percorso completato</small>
    </p>

    <!-- ============= SEZIONE 1: CONCETTI FONDAMENTALI ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-success mb-4">
            <i class="fas fa-book-open me-2"></i>📘 Operatori di Algebra Relazionale
        </h3>
        
        <!-- Operatori Base -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="fas fa-cogs me-2"></i>Operatori Base
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    
                    <!-- Selezione (SELECT) -->
                    <div class="col-md-6">
                        <div class="card border-success h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-success fw-bold">
                                    <i class="fas fa-filter me-2"></i>Selezione (σ) - SELECT
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Seleziona le <strong>righe</strong> (tuple) che soddisfano una condizione.</p>
                                <div class="alert alert-success mb-3">
                                    <strong>Notazione:</strong> σ<sub>condizione</sub>(Relazione)
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        σ<sub>stipendio > 30000</sub>(Dipendenti)<br><br>
                                        <code>SELECT * FROM Dipendenti WHERE stipendio > 30000;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Riduce le <strong>righe</strong>, mantiene tutte le colonne
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Proiezione (PROJECT) -->
                    <div class="col-md-6">
                        <div class="card border-info h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-info fw-bold">
                                    <i class="fas fa-columns me-2"></i>Proiezione (π) - PROJECT
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Seleziona le <strong>colonne</strong> (attributi) desiderati.</p>
                                <div class="alert alert-info mb-3">
                                    <strong>Notazione:</strong> π<sub>attributi</sub>(Relazione)
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        π<sub>nome,stipendio</sub>(Dipendenti)<br><br>
                                        <code>SELECT nome, stipendio FROM Dipendenti;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Riduce le <strong>colonne</strong>, elimina duplicati
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Unione (UNION) -->
                    <div class="col-md-6">
                        <div class="card border-warning h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-warning fw-bold">
                                    <i class="fas fa-plus-circle me-2"></i>Unione (∪) - UNION
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Combina due relazioni senza duplicati.</p>
                                <div class="alert alert-warning mb-3">
                                    <strong>Notazione:</strong> R ∪ S
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        Gerenti ∪ Direttori<br><br>
                                        <code>SELECT * FROM Gerenti UNION SELECT * FROM Direttori;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-exclamation-triangle me-1"></i>
                                    Schema deve essere compatibile
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Differenza (EXCEPT) -->
                    <div class="col-md-6">
                        <div class="card border-danger h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-danger fw-bold">
                                    <i class="fas fa-minus-circle me-2"></i>Differenza (-) - EXCEPT
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Tuple di R che non sono in S.</p>
                                <div class="alert alert-danger mb-3">
                                    <strong>Notazione:</strong> R - S
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        Dipendenti - Manager<br><br>
                                        <code>SELECT * FROM Dipendenti EXCEPT SELECT * FROM Manager;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Sottrazione tra insiemi
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Intersezione (INTERSECT) -->
                    <div class="col-md-6">
                        <div class="card border-primary h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-primary fw-bold">
                                    <i class="fas fa-compress-alt me-2"></i>Intersezione (∩) - INTERSECT
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Tuple comuni a entrambe le relazioni.</p>
                                <div class="alert alert-primary mb-3">
                                    <strong>Notazione:</strong> R ∩ S
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        Dipendenti ∩ Manager<br><br>
                                        <code>SELECT * FROM Dipendenti INTERSECT SELECT * FROM Manager;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Elementi comuni
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Prodotto Cartesiano (CROSS JOIN) -->
                    <div class="col-md-6">
                        <div class="card border-secondary h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-secondary fw-bold">
                                    <i class="fas fa-times-circle me-2"></i>Prodotto Cartesiano (×)
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-3">Combina ogni tupla di R con ogni tupla di S.</p>
                                <div class="alert alert-secondary mb-3">
                                    <strong>Notazione:</strong> R × S
                                </div>
                                <div class="bg-dark text-light p-3 rounded mb-3">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        Se R ha 5 tuple e S ha 3 tuple<br>
                                        R × S avrà 5 × 3 = 15 tuple<br><br>
                                        <code>SELECT * FROM Dipendenti CROSS JOIN Progetti;</code>
                                    </small>
                                </div>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-warning me-1"></i>
                                    Molto costoso computazionalmente!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JOIN Operations -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-link me-2"></i>Operazioni JOIN
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">
                    Il JOIN è la combinazione di <strong>Prodotto Cartesiano</strong> + <strong>Selezione</strong>
                </p>

                <div class="row g-3">
                    <!-- INNER JOIN -->
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-info text-white">
                                <h6 class="mb-0">
                                    <i class="fas fa-equals me-2"></i>INNER JOIN
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    Solo le tuple con valori corrispondenti
                                </p>
                                <pre class="bg-dark text-light p-2 rounded mb-3" style="font-size: 0.8rem;"><code>SELECT *
FROM Dipendenti d
INNER JOIN Dipartimenti dep
  ON d.id_dept = dep.id;</code></pre>
                                <p class="small text-muted mb-0">
                                    Elimina tuple senza corrispondenza
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- LEFT OUTER JOIN -->
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-warning text-dark">
                                <h6 class="mb-0">
                                    <i class="fas fa-arrow-left me-2"></i>LEFT OUTER JOIN
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    Tutte le tuple della tabella sinistra + match dalla destra
                                </p>
                                <pre class="bg-dark text-light p-2 rounded mb-3" style="font-size: 0.8rem;"><code>SELECT *
FROM Dipendenti d
LEFT JOIN Progetti p
  ON d.id = p.id_dipendente;</code></pre>
                                <p class="small text-muted mb-0">
                                    Aggiunge NULL dove non ci sono match
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- NATURAL JOIN -->
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h6 class="mb-0">
                                    <i class="fas fa-handshake me-2"></i>NATURAL JOIN
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    Join automatico su attributi con lo stesso nome
                                </p>
                                <pre class="bg-dark text-light p-2 rounded mb-3" style="font-size: 0.8rem;"><code>SELECT *
FROM Dipendenti
NATURAL JOIN Dipartimenti;</code></pre>
                                <p class="small text-muted mb-0">
                                    Non ripete colonne comuni
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FULL OUTER JOIN -->
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h6 class="mb-0">
                                    <i class="fas fa-expand me-2"></i>FULL OUTER JOIN
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    Tutte le tuple da entrambe le tabelle
                                </p>
                                <pre class="bg-dark text-light p-2 rounded mb-3" style="font-size: 0.8rem;"><code>SELECT *
FROM Dipendenti d
FULL OUTER JOIN Manager m
  ON d.id = m.id_dip;</code></pre>
                                <p class="small text-muted mb-0">
                                    Unione con NULL dove mancano match
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 2: ESERCIZIO INTERATTIVO ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-success mb-4">
            <i class="fas fa-gamepad me-2"></i>🎮 Esercizio Interattivo
        </h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="fas fa-question-circle me-2"></i>
                    Abbina gli Operatori alle Query
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">
                    Per ogni query SQL, indica quale operatore di algebra relazionale corrisponde:
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">Query 1</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.85rem;"><code>SELECT nome, stipendio
FROM Dipendenti;</code></pre>
                                <p class="small mt-2 mb-0">
                                    <strong>Operatore:</strong>
                                    <select class="form-select form-select-sm mt-2">
                                        <option selected>-- Seleziona --</option>
                                        <option>π (Proiezione)</option>
                                        <option>σ (Selezione)</option>
                                        <option>∪ (Unione)</option>
                                        <option>⋈ (Join)</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">Query 2</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.85rem;"><code>SELECT *
FROM Dipendenti
WHERE stipendio > 50000;</code></pre>
                                <p class="small mt-2 mb-0">
                                    <strong>Operatore:</strong>
                                    <select class="form-select form-select-sm mt-2">
                                        <option selected>-- Seleziona --</option>
                                        <option>π (Proiezione)</option>
                                        <option>σ (Selezione)</option>
                                        <option>∪ (Unione)</option>
                                        <option>⋈ (Join)</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">Query 3</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.85rem;"><code>SELECT *
FROM Dipendenti d
INNER JOIN Dipartimenti dep
  ON d.id_dept = dep.id;</code></pre>
                                <p class="small mt-2 mb-0">
                                    <strong>Operatore:</strong>
                                    <select class="form-select form-select-sm mt-2">
                                        <option selected>-- Seleziona --</option>
                                        <option>π (Proiezione)</option>
                                        <option>σ (Selezione)</option>
                                        <option>∪ (Unione)</option>
                                        <option>⋈ (Join)</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 fw-bold">Query 4</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.85rem;"><code>SELECT * FROM Gerenti
UNION
SELECT * FROM Direttori;</code></pre>
                                <p class="small mt-2 mb-0">
                                    <strong>Operatore:</strong>
                                    <select class="form-select form-select-sm mt-2">
                                        <option selected>-- Seleziona --</option>
                                        <option>π (Proiezione)</option>
                                        <option>σ (Selezione)</option>
                                        <option>∪ (Unione)</option>
                                        <option>⋈ (Join)</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success btn-lg">
                    <i class="fas fa-check-circle me-2"></i>Verifica Risposte
                </button>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 3: PREPARAZIONE GIORNO 3 ============= -->
    <section class="mb-5">
        <div class="card shadow-sm bg-light border-0">
            <div class="card-body p-4">
                <h3 class="fw-bold text-success mb-4">
                    <i class="fas fa-clipboard-check me-2"></i>📝 Preparazione per il Giorno 3
                </h3>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-success">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">
                                    <i class="fas fa-tasks me-2"></i>Compiti per Oggi
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Memorizzare i 6 operatori base
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Disegnare diagrammi di Venn per unione e intersezione
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Convertire 5 query in notazione algebrica
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Comprendere la differenza tra INNER e OUTER JOIN
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-primary">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">
                                    <i class="fas fa-arrow-right me-2"></i>Prossimi Argomenti
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Introduzione a SQL (Structured Query Language)
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Primo comando: SELECT
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Clacola WHERE, ORDER BY e LIMIT
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Implementare gli operatori in SQL
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info mt-4 d-flex align-items-center">
                    <i class="fas fa-lightbulb fa-2x me-3"></i>
                    <div>
                        <strong>💡 Suggerimento:</strong> L'algebra relazionale è il <strong>fondamento teorico</strong> 
                        di SQL. Padroneggiarla ora ti renderà più efficiente con le query!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigazione giorni -->
    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno1.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 1
        </a>
        <a href="giorno3.php" class="btn btn-success">
            Giorno 3 - SQL Fondamentale
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>