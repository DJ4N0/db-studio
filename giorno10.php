<?php
// ===============================================================
// FILE: giorno10.php - PROGETTO FINALE
// ===============================================================

$giorno = 10;
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-danger">
            <i class="fas fa-trophy me-3"></i>Giorno 10
        </h1>
        <p class="lead text-muted">Progetto Finale - E-Commerce Database</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;"></div>
    </div>
    <p class="text-center text-muted mb-5">
        <small><i class="fas fa-chart-line me-1"></i>100% Completato!</small>
    </p>

    <section class="mb-5">
        <h3 class="fw-bold text-danger mb-4">
            <i class="fas fa-tasks me-2"></i>Obiettivo del Progetto
        </h3>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <p class="lead mb-4">
                    Progetta e implementa un database completo per un e-commerce che gestisce:
                </p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Clienti:</strong> Nome, email, indirizzo</li>
                    <li class="list-group-item"><strong>Prodotti:</strong> Nome, prezzo, categoria, stock</li>
                    <li class="list-group-item"><strong>Ordini:</strong> Data, totale, stato</li>
                    <li class="list-group-item"><strong>Dettagli Ordini:</strong> Prodotto, quantità, prezzo unitario</li>
                    <li class="list-group-item"><strong>Pagamenti:</strong> Metodo, data, importo</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-danger mb-4">
            <i class="fas fa-list-check me-2"></i>Requisiti
        </h3>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h6 class="mb-0">Fase 1: Progettazione</h6>
                    </div>
                    <div class="card-body">
                        <ol class="small">
                            <li>Disegna il diagramma E-R</li>
                            <li>Identifica le entità e relazioni</li>
                            <li>Definisci le cardinalità</li>
                            <li>Normalizza lo schema (3NF)</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="mb-0">Fase 2: Implementazione</h6>
                    </div>
                    <div class="card-body">
                        <ol class="small">
                            <li>Scrivi il codice DDL (CREATE TABLE)</li>
                            <li>Crea indici appropriati</li>
                            <li>Inserisci dati di test</li>
                            <li>Scrivi le query principali</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h6 class="mb-0">Fase 3: Query Avanzate</h6>
                    </div>
                    <div class="card-body">
                        <ol class="small">
                            <li>Total vendite per cliente</li>
                            <li>Prodotti più venduti</li>
                            <li>Ordini non ancora spediti</li>
                            <li>Revenue per categoria</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h6 class="mb-0">Fase 4: Sicurezza</h6>
                    </div>
                    <div class="card-body">
                        <ol class="small">
                            <li>Trigger per audit log</li>
                            <li>Transazioni per operazioni critiche</li>
                            <li>Vincoli d'integrità referenziale</li>
                            <li>View per proteggere dati sensibili</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-danger mb-4">
            <i class="fas fa-code me-2"></i>Template DDL Base
        </h3>

        <div class="card shadow-sm">
            <div class="card-body">
                <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.8rem;"><code>-- Clienti
CREATE TABLE Clienti (
  id_cliente INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE,
  indirizzo VARCHAR(255),
  data_registrazione DATE,
  CONSTRAINT email_valida CHECK (email LIKE '%@%.%')
);

-- Prodotti
CREATE TABLE Prodotti (
  id_prodotto INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  prezzo DECIMAL(10,2),
  categoria VARCHAR(50),
  stock INT DEFAULT 0,
  data_creazione DATE
);

-- Ordini
CREATE TABLE Ordini (
  id_ordine INT PRIMARY KEY AUTO_INCREMENT,
  id_cliente INT NOT NULL,
  data_ordine DATE,
  totale DECIMAL(10,2),
  stato ENUM('pendente','spedito','consegnato'),
  FOREIGN KEY(id_cliente) REFERENCES Clienti(id_cliente)
);

-- Dettagli Ordini
CREATE TABLE DettagliOrdini (
  id_dettaglio INT PRIMARY KEY AUTO_INCREMENT,
  id_ordine INT NOT NULL,
  id_prodotto INT NOT NULL,
  quantita INT,
  prezzo_unitario DECIMAL(10,2),
  FOREIGN KEY(id_ordine) REFERENCES Ordini(id_ordine),
  FOREIGN KEY(id_prodotto) REFERENCES Prodotti(id_prodotto)
);

-- Indici
CREATE INDEX idx_cliente_ordini ON Ordini(id_cliente);
CREATE INDEX idx_prodotto ON DettagliOrdini(id_prodotto);
CREATE INDEX idx_categoria ON Prodotti(categoria);</code></pre>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="card shadow-sm bg-light border-0">
            <div class="card-body p-5">
                <h3 class="fw-bold text-center text-danger mb-4">
                    <i class="fas fa-star me-2"></i>Congratulazioni!
                </h3>
                <p class="lead text-center mb-4">
                    Hai completato il corso di 10 giorni sui Database Relazionali!
                </p>
                <p class="text-center mb-4">
                    Hai imparato: modello relazionale, algebra, SQL, normalizzazione, E-R, 
                    indicizzazione, transazioni e tecnologie avanzate.
                </p>
                <div class="text-center">
                    <a href="index.php" class="btn btn-danger btn-lg">
                        <i class="fas fa-home me-2"></i>Torna alla Home
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'includes/footer.php'; ?>