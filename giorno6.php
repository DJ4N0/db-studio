<?php
// ===============================================================
// FILE: giorno6.php
// Modello E-R (Entity-Relationship)
// Entità, Relazioni, Cardinalità, Attributi
// ===============================================================

$giorno = 6;
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container my-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-primary">
            <i class="fas fa-share-alt me-3"></i>Giorno 6
        </h1>
        <p class="lead text-muted">Modello E-R - Progettazione Concettuale</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" 
             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>60% del percorso completato</small>
    </p>

    <section class="mb-5">
        <h3 class="fw-bold text-primary mb-4">
            <i class="fas fa-book-open me-2"></i>Concetti Fondamentali del Modello E-R
        </h3>

        <!-- Entità -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-cube me-2"></i>Entità
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Un'entità è un oggetto del mondo reale che possiede proprietà.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Esempio: Studente</h6>
                            </div>
                            <div class="card-body">
                                <div class="bg-dark text-light p-3 rounded" style="text-align: center; min-height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <div>
                                        <strong style="border: 2px solid white; padding: 10px 20px; display: inline-block;">
                                            STUDENTE
                                        </strong>
                                    </div>
                                </div>
                                <p class="small text-muted mt-3 mb-0">
                                    Nel diagramma E-R, le entità si rappresentano con rettangoli
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Attributi di Studente</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li>
                                        <i class="fas fa-circle text-primary me-2"></i>
                                        <strong>matricola</strong> (Chiave primaria)
                                    </li>
                                    <li>
                                        <i class="fas fa-circle text-secondary me-2"></i>
                                        nome
                                    </li>
                                    <li>
                                        <i class="fas fa-circle text-secondary me-2"></i>
                                        cognome
                                    </li>
                                    <li>
                                        <i class="fas fa-circle text-secondary me-2"></i>
                                        data_nascita
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Relazioni -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-link me-2"></i>Relazioni
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Una relazione associa due o più entità tra loro.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Rappresentazione</h6>
                            </div>
                            <div class="card-body">
                                <div class="bg-dark text-light p-3 rounded text-center">
                                    <div style="display: flex; align-items: center; justify-content: space-around; margin: 20px 0;">
                                        <strong style="border: 2px solid white; padding: 10px;">STUDENTE</strong>
                                        <span style="border: 2px solid white; padding: 10px; border-radius: 5px; background: #444;">ISCRITTO</span>
                                        <strong style="border: 2px solid white; padding: 10px;">CORSO</strong>
                                    </div>
                                </div>
                                <p class="small text-muted mt-3 mb-0">
                                    Le relazioni si rappresentano con rombi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Tipi di Relazioni</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled small">
                                    <li class="mb-2">
                                        <strong>Uno-a-Uno (1:1)</strong><br>
                                        <small class="text-muted">Es: Persona - Passaporto</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Uno-a-Molti (1:N)</strong><br>
                                        <small class="text-muted">Es: Dipartimento - Dipendenti</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Molti-a-Molti (N:M)</strong><br>
                                        <small class="text-muted">Es: Studenti - Corsi</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cardinalità -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="fas fa-arrows-alt me-2"></i>Cardinalità
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">La cardinalità indica quante istanze di un'entità possono partecipare a una relazione.</p>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">1:1 Uno-a-Uno</h6>
                            </div>
                            <div class="card-body">
                                <div class="bg-dark text-light p-3 rounded text-center" style="min-height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <div style="font-size: 0.9rem;">
                                        <strong>PERSONA</strong> → 1 → <strong>PATENTE</strong>
                                    </div>
                                </div>
                                <p class="small text-muted mt-3 mb-0">
                                    Una persona ha UNA sola patente
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">1:N Uno-a-Molti</h6>
                            </div>
                            <div class="card-body">
                                <div class="bg-dark text-light p-3 rounded text-center" style="min-height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <div style="font-size: 0.9rem;">
                                        <strong>DIPT</strong> → 1:N → <strong>DIP</strong>
                                    </div>
                                </div>
                                <p class="small text-muted mt-3 mb-0">
                                    Un dipartimento ha MOLTI dipendenti
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">N:M Molti-a-Molti</h6>
                            </div>
                            <div class="card-body">
                                <div class="bg-dark text-light p-3 rounded text-center" style="min-height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <div style="font-size: 0.9rem;">
                                        <strong>STU</strong> → N:M → <strong>CORSO</strong>
                                    </div>
                                </div>
                                <p class="small text-muted mt-3 mb-0">
                                    Molti studenti, molti corsi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Da E-R a Schema Relazionale -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="fas fa-arrow-right me-2"></i>Conversione E-R a Schema Relazionale
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Come convertire un diagramma E-R in tabelle SQL.</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Relazione 1:N</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-2"><strong>E-R:</strong> DIPARTIMENTO (1) - DIPENDENTE (N)</p>
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.7rem;"><code>CREATE TABLE Dipendenti (
  id INT PRIMARY KEY,
  nome VARCHAR(50),
  id_dipt INT,
  FOREIGN KEY(id_dipt) 
    REFERENCES Dipartimenti(id)
);</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Relazione N:M</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-2"><strong>E-R:</strong> STUDENTE (N) - CORSO (M)</p>
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.7rem;"><code>CREATE TABLE Iscrizioni (
  id_studente INT,
  id_corso INT,
  data_iscrizione DATE,
  PRIMARY KEY(id_st, id_c),
  FOREIGN KEY(id_st) 
    REFERENCES Studenti(id),
  FOREIGN KEY(id_c)
    REFERENCES Corsi(id)
);</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-primary mb-4">
            <i class="fas fa-gamepad me-2"></i>Esercizio: Disegna il Diagramma E-R
        </h3>
        
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-pencil me-2"></i>Caso di Studio: Biblioteca
                </h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">Descrizione: Una biblioteca ha LIBRI. Ogni libro ha AUTORI (molti). I LETTORI prendono in prestito LIBRI.</p>

                <div class="alert alert-info mb-4">
                    <strong>Domande:</strong>
                    <ul class="mb-0 mt-2">
                        <li>Quante entità identifichi?</li>
                        <li>Quali sono le relazioni?</li>
                        <li>Qual è la cardinalità di ogni relazione?</li>
                        <li>Come si convertono in tabelle SQL?</li>
                    </ul>
                </div>

                <textarea class="form-control" rows="6" placeholder="Scrivi qui il tuo diagramma E-R o la lista di tabelle..."></textarea>
                <button class="btn btn-primary btn-lg mt-3">
                    <i class="fas fa-check-circle me-2"></i>Verifica Soluzione
                </button>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno5.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 5
        </a>
        <a href="giorno7.php" class="btn btn-primary">
            Giorno 7 - Indicizzazione
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>