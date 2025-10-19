<!-- ===============================================================
// FILE: giorno1.php
// Lezione completa sul Modello Relazionale
// Include teoria, esercizi interattivi e risorse
// =============================================================== -->

<?php
$giorno = 1;
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Contenuto principale -->
<main class="container my-5">

    <!-- Header Giorno 1 -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-primary">
            <i class="fas fa-table me-3"></i>Giorno 1
        </h1>
        <p class="lead text-muted">Modello Relazionale - Fondamenti e Chiavi</p>
    </div>

    <!-- Progress indicator -->
    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;" 
             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>10% del percorso completato</small>
    </p>

    <!-- ============= SEZIONE 1: CONCETTI FONDAMENTALI ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-primary mb-4">
            <i class="fas fa-book-open me-2"></i>📘 Concetti Fondamentali
        </h3>
        
        <!-- Chiavi nel Modello Relazionale -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-key me-2"></i>Chiavi nel Modello Relazionale
                </h5>
            </div>
            <div class="card-body">
                <p class="lead">
                    Le chiavi sono fondamentali per identificare univocamente le <strong>tuple</strong> in una relazione.
                </p>
                
                <div class="row g-3 mt-3">
                    <!-- Superchiave -->
                    <div class="col-md-6">
                        <div class="card border-primary h-100">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">🔑 Superchiave</h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    Insieme di attributi che identifica <strong>univocamente</strong> le tuple.
                                </p>
                                <div class="alert alert-info mb-0">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        <code>(codice_fiscale, nome)</code> per la relazione <em>Persona</em>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chiave Candidata -->
                    <div class="col-md-6">
                        <div class="card border-success h-100">
                            <div class="card-header bg-success text-white">
                                <h6 class="mb-0">🎯 Chiave Candidata</h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    Superchiave <strong>minimale</strong> (non ridondante).
                                </p>
                                <div class="alert alert-success mb-0">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        <code>codice_fiscale</code> è minimale
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chiave Primaria -->
                    <div class="col-md-6">
                        <div class="card border-warning h-100">
                            <div class="card-header bg-warning text-dark">
                                <h6 class="mb-0">⭐ Chiave Primaria</h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    Chiave candidata <strong>scelta</strong> per identificare le tuple.
                                </p>
                                <div class="alert alert-warning mb-0">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        <code>matricola</code> in <em>Studente</em>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chiave Esterna -->
                    <div class="col-md-6">
                        <div class="card border-danger h-100">
                            <div class="card-header bg-danger text-white">
                                <h6 class="mb-0">🔗 Chiave Esterna (Foreign Key)</h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    Riferisce la chiave primaria di un'altra tabella.
                                </p>
                                <div class="alert alert-danger mb-0">
                                    <small>
                                        <strong>Esempio:</strong><br>
                                        <code>id_corso</code> in <em>Iscrizioni</em>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struttura di una Relazione -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-table me-2"></i>Struttura di una Relazione
                </h5>
            </div>
            <div class="card-body">
                <p>Una relazione (tabella) è composta da:</p>
                
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="text-center p-3 bg-light rounded">
                            <i class="fas fa-columns fa-2x text-info mb-2"></i>
                            <h6 class="fw-bold">Attributi</h6>
                            <p class="small mb-0">Colonne che definiscono le proprietà</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3 bg-light rounded">
                            <i class="fas fa-grip-lines fa-2x text-success mb-2"></i>
                            <h6 class="fw-bold">Tuple</h6>
                            <p class="small mb-0">Righe che contengono i dati</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3 bg-light rounded">
                            <i class="fas fa-list fa-2x text-warning mb-2"></i>
                            <h6 class="fw-bold">Dominio</h6>
                            <p class="small mb-0">Valori ammessi per un attributo</p>
                        </div>
                    </div>
                </div>

                <!-- Esempio SQL -->
                <div class="mt-4">
                    <h6 class="fw-bold mb-3">
                        <i class="fas fa-code me-2"></i>Esempio pratico in SQL:
                    </h6>
                    <pre class="bg-dark text-light p-3 rounded"><code>CREATE TABLE Studente (
    matricola INT PRIMARY KEY,         -- Chiave primaria
    nome VARCHAR(50) NOT NULL,         -- Attributo obbligatorio
    cognome VARCHAR(50) NOT NULL,
    data_nascita DATE,
    email VARCHAR(100) UNIQUE          -- Vincolo di unicità
);</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 2: ESERCIZIO INTERATTIVO ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-primary mb-4">
            <i class="fas fa-gamepad me-2"></i>🎮 Esercizio Interattivo
        </h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-question-circle me-2"></i>
                    Identifica le Chiavi nella Relazione
                </h5>
            </div>
            <div class="card-body">
                <p class="lead">
                    Data la seguente relazione <strong>Libro</strong>, seleziona le affermazioni corrette:
                </p>
                
                <!-- Tabella esempio -->
                <div class="table-responsive mb-4">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ISBN</th>
                                <th>Titolo</th>
                                <th>Autore</th>
                                <th>AnnoPubblicazione</th>
                                <th>Editore</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>978-88-123-4567-0</code></td>
                                <td>Database Fundamentals</td>
                                <td>Mario Rossi</td>
                                <td>2020</td>
                                <td>Editore A</td>
                            </tr>
                            <tr>
                                <td><code>978-88-123-4567-1</code></td>
                                <td>SQL Avanzato</td>
                                <td>Luigi Verdi</td>
                                <td>2021</td>
                                <td>Editore B</td>
                            </tr>
                            <tr>
                                <td><code>978-88-123-4567-2</code></td>
                                <td>Database Fundamentals</td>
                                <td>Maria Bianchi</td>
                                <td>2020</td>
                                <td>Editore A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Quiz -->
                <div class="mb-4">
                    <h6 class="fw-bold mb-3">Seleziona le affermazioni corrette:</h6>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="option1">
                        <label class="form-check-label" for="option1">
                            <strong>ISBN</strong> è una superchiave ✅
                        </label>
                    </div>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="option2">
                        <label class="form-check-label" for="option2">
                            <strong>Titolo</strong> è una chiave candidata ❌
                        </label>
                    </div>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="option3">
                        <label class="form-check-label" for="option3">
                            <strong>(Titolo, Autore)</strong> è una superchiave ✅
                        </label>
                    </div>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="option4">
                        <label class="form-check-label" for="option4">
                            <strong>AnnoPubblicazione</strong> è una chiave primaria ❌
                        </label>
                    </div>
                </div>
                
                <!-- Bottone verifica -->
                <button class="btn btn-primary btn-lg" onclick="checkAnswer()">
                    <i class="fas fa-check-circle me-2"></i>Verifica Risposta
                </button>
                
                <!-- Risultato -->
                <div id="exerciseResult" class="mt-4" style="display: none;"></div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 3: PREPARAZIONE GIORNO 2 ============= -->
    <section class="mb-5">
        <div class="card shadow-sm bg-light border-0">
            <div class="card-body p-4">
                <h3 class="fw-bold text-primary mb-4">
                    <i class="fas fa-clipboard-check me-2"></i>📝 Preparazione per il Giorno 2
                </h3>
                
                <div class="row g-4">
                    <!-- Compiti per oggi -->
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
                                        Rivedere i concetti di chiavi e vincoli
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Creare almeno 3 tabelle con diversi tipi di chiavi
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Identificare dipendenze funzionali
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Installare MySQL/PostgreSQL
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Prossimi argomenti -->
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
                                        Algebra relazionale e operatori
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Selezione, proiezione e join
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Conversione da algebra a SQL
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-angle-double-right text-primary me-2"></i>
                                        Esercizi pratici con query
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Alert suggerimento -->
                <div class="alert alert-info mt-4 d-flex align-items-center">
                    <i class="fas fa-lightbulb fa-2x me-3"></i>
                    <div>
                        <strong>💡 Suggerimento:</strong> Prima di passare al Giorno 2, assicurati di comprendere 
                        la differenza tra <strong>chiave primaria</strong>, <strong>candidata</strong> e <strong>superchiave</strong>.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= SEZIONE 4: RISORSE AGGIUNTIVE ============= -->
    <section class="mb-5">
        <h3 class="fw-bold text-primary mb-4">
            <i class="fas fa-book-reader me-2"></i>📚 Risorse per Approfondire
        </h3>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-book fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Documentazione</h5>
                        <p class="card-text text-muted">
                            Modello relazionale e teoria delle chiavi
                        </p>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fas fa-external-link-alt me-2"></i>Studia
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-code fa-3x text-success mb-3"></i>
                        <h5 class="card-title fw-bold">Esercizi Pratici</h5>
                        <p class="card-text text-muted">
                            Problemi risolti su chiavi e vincoli
                        </p>
                        <a href="#" class="btn btn-outline-success">
                            <i class="fas fa-dumbbell me-2"></i>Pratica
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-database fa-3x text-info mb-3"></i>
                        <h5 class="card-title fw-bold">Database Sandbox</h5>
                        <p class="card-text text-muted">
                            Ambiente per testare i concetti
                        </p>
                        <a href="#" class="btn btn-outline-info">
                            <i class="fas fa-play-circle me-2"></i>Accedi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigazione giorni -->
    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="index.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Torna alla Home
        </a>
        <a href="giorno2.php" class="btn btn-primary">
            Giorno 2 - Algebra Relazionale
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>