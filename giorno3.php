<?php
// ===============================================================
// FILE: giorno3.php
// Lezione SQL Fondamentale
// SELECT, WHERE, ORDER BY, GROUP BY, HAVING, LIMIT
// ===============================================================

$giorno = 3;
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container my-5">

    <!-- Header Giorno 3 -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-info">
            <i class="fas fa-code me-3"></i>Giorno 3
        </h1>
        <p class="lead text-muted">SQL Fondamentale - Primi Comandi</p>
    </div>

    <!-- Progress indicator -->
    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-info" role="progressbar" style="width: 30%;" 
             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>30% del percorso completato</small>
    </p>

    <!-- ============= SEZIONE 1: STRUTTURA SELECT ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-info mb-4">
            <i class="fas fa-book-open me-2"></i>📘 Struttura Base di SQL
        </h3>
        
        <!-- Tabella Database di Esempio -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-database me-2"></i>Database di Esempio: Clienti Banca
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-3">Utilizzeremo questi dati per gli esempi:</p>
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>id_cliente</th>
                                <th>nome</th>
                                <th>cognome</th>
                                <th>città</th>
                                <th>saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mario</td>
                                <td>Rossi</td>
                                <td>Milano</td>
                                <td>€5,000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Luigi</td>
                                <td>Verdi</td>
                                <td>Roma</td>
                                <td>€15,000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Maria</td>
                                <td>Bianchi</td>
                                <td>Milano</td>
                                <td>€25,000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Andrea</td>
                                <td>Ferrari</td>
                                <td>Napoli</td>
                                <td>€10,000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Francesca</td>
                                <td>Russo</td>
                                <td>Milano</td>
                                <td>€30,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SELECT Statement -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-mouse-pointer me-2"></i>SELECT - Comando Base
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">SELECT è il comando per recuperare dati dal database.</p>

                <div class="row g-3 mb-4">
                    <!-- Sintassi -->
                    <div class="col-md-6">
                        <div class="card border-info h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-info fw-bold">
                                    <i class="fas fa-keyboard me-2"></i>Sintassi Base
                                </h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.85rem;"><code>SELECT colonna1, colonna2, ...
FROM tabella
WHERE condizione
ORDER BY colonna
LIMIT numero;</code></pre>
                            </div>
                        </div>
                    </div>

                    <!-- Ordine di Esecuzione -->
                    <div class="col-md-6">
                        <div class="card border-warning h-100">
                            <div class="card-header bg-light">
                                <h6 class="mb-0 text-warning fw-bold">
                                    <i class="fas fa-list-ol me-2"></i>Ordine di Esecuzione
                                </h6>
                            </div>
                            <div class="card-body">
                                <ol class="mb-0">
                                    <li>FROM - Quale tabella?</li>
                                    <li>WHERE - Quali righe?</li>
                                    <li>SELECT - Quali colonne?</li>
                                    <li>ORDER BY - In che ordine?</li>
                                    <li>LIMIT - Quante righe?</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Esempi Pratici -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esempio 1: Tutti i dati</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Recupera tutte le righe e colonne
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esempio 2: Colonne specifiche</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT nome, cognome FROM Clienti;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    <i class="fas fa-arrow-right me-1"></i>
                                    Solo nome e cognome
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WHERE Clause -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="fas fa-filter me-2"></i>WHERE - Filtrare i Dati
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">WHERE seleziona solo le righe che soddisfano una condizione.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Operatori di Confronto</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li><code>=</code> - Uguale a</li>
                                    <li><code>!=</code> o <code>&lt;&gt;</code> - Non uguale a</li>
                                    <li><code>&gt;</code> - Maggiore di</li>
                                    <li><code>&lt;</code> - Minore di</li>
                                    <li><code>&gt;=</code> - Maggiore o uguale a</li>
                                    <li><code>&lt;=</code> - Minore o uguale a</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Operatori Logici</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li><code>AND</code> - Entrambe le condizioni vere</li>
                                    <li><code>OR</code> - Almeno una condizione vera</li>
                                    <li><code>NOT</code> - Inverte la condizione</li>
                                    <li><code>IN</code> - Valore in una lista</li>
                                    <li><code>BETWEEN</code> - Tra due valori</li>
                                    <li><code>LIKE</code> - Ricerca parziale</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esempio 1: Semplice</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
WHERE città = 'Milano';</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Solo clienti di Milano
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esempio 2: Multipla</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
WHERE saldo > 10000 AND città = 'Milano';</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Saldo > 10000 E a Milano
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ORDER BY -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">
                    <i class="fas fa-sort me-2"></i>ORDER BY - Ordinare i Risultati
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">ORDER BY ordina i risultati in ordine crescente (ASC) o decrescente (DESC).</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Ordine Crescente (ASC)</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
ORDER BY saldo ASC;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Dal saldo più basso al più alto (default)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Ordine Decrescente (DESC)</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
ORDER BY saldo DESC;</code></pre>
                                <p class="small text-muted mt-2 mb-0">
                                    Dal saldo più alto al più basso
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LIMIT -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-cut me-2"></i>LIMIT - Limitare i Risultati
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">LIMIT restringe il numero di righe restituite.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Primi 3 Clienti</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
LIMIT 3;</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Top 5 per Saldo</h6>
                            </div>
                            <div class="card-body">
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>SELECT * FROM Clienti
ORDER BY saldo DESC
LIMIT 5;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 2: ESERCIZIO INTERATTIVO ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-info mb-4">
            <i class="fas fa-gamepad me-2"></i>Esercizio: Scrivi la Query
        </h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-code me-2"></i>Scrivi la Query SQL Corretta
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Per ogni richiesta, scrivi la query SQL corretta:</p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esercizio 1</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    <strong>Richiesta:</strong> Mostra tutti i clienti di Milano ordinati per saldo decrescente
                                </p>
                                <textarea class="form-control form-control-sm" rows="4" placeholder="SELECT ..."></textarea>
                                <button class="btn btn-sm btn-info mt-2">Verifica</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esercizio 2</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-3">
                                    <strong>Richiesta:</strong> Mostra i Top 3 clienti per saldo
                                </p>
                                <textarea class="form-control form-control-sm" rows="4" placeholder="SELECT ..."></textarea>
                                <button class="btn btn-sm btn-info mt-2">Verifica</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 3: PREPARAZIONE GIORNO 4 ============= -->
    <section class="mb-5">
        <div class="card shadow-sm bg-light border-0">
            <div class="card-body p-4">
                <h3 class="fw-bold text-info mb-4">
                    <i class="fas fa-clipboard-check me-2"></i>Preparazione per il Giorno 4
                </h3>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-info">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-0">
                                    <i class="fas fa-tasks me-2"></i>Compiti per Oggi
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-info me-2"></i>
                                        Eseguire 10 query SELECT con WHERE
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-info me-2"></i>
                                        Combinare AND, OR, NOT nelle condizioni
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-info me-2"></i>
                                        Ordinare risultati con ASC e DESC
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-info me-2"></i>
                                        Usare LIMIT per paginazione
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
                                        GROUP BY e aggregazioni
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Funzioni: COUNT, SUM, AVG, MIN, MAX
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        HAVING per filtri su aggregati
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        JOIN tra tabelle
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info mt-4 d-flex align-items-center">
                    <i class="fas fa-lightbulb fa-2x me-3"></i>
                    <div>
                        <strong>Suggerimento:</strong> Pratica scrivendo query ogni giorno. 
                        SQL si impara facendo, non leggendo!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigazione giorni -->
    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno2.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 2
        </a>
        <a href="giorno4.php" class="btn btn-info">
            Giorno 4 - SQL Avanzato
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>