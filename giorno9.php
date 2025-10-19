<?php
// ===============================================================
// FILE: giorno9.php - TECNOLOGIE AVANZATE
// ===============================================================

$giorno = 9;
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4 text-warning">
            <i class="fas fa-rocket me-3"></i>Giorno 9
        </h1>
        <p class="lead text-muted">Tecnologie Avanzate - Trigger e Stored Procedure</p>
    </div>

    <div class="progress mb-4" style="height: 10px;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;"></div>
    </div>
    <p class="text-center text-muted mb-5">90% completato</p>

    <section class="mb-5">
        <h3 class="fw-bold text-warning mb-4">
            <i class="fas fa-book-open me-2"></i>Trigger
        </h3>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Cosa sono i Trigger?</h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">
                    Un trigger è una procedura SQL che si esegue automaticamente quando si verifica un evento (INSERT, UPDATE, DELETE).
                </p>

                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <h6 class="mb-0">Sintassi di Base</h6>
                    </div>
                    <div class="card-body">
                        <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.85rem;"><code>CREATE TRIGGER trigger_name
AFTER INSERT ON tabella
FOR EACH ROW
BEGIN
  -- Azioni da eseguire
  UPDATE log SET ultimo_inserimento = NOW();
END;</code></pre>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Trigger BEFORE</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-2">Prima dell'operazione</p>
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>BEFORE INSERT
-- Valida dati prima 
-- di inserirli</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Trigger AFTER</h6>
                            </div>
                            <div class="card-body">
                                <p class="small mb-2">Dopo l'operazione</p>
                                <pre class="bg-dark text-light p-2 rounded" style="font-size: 0.75rem;"><code>AFTER UPDATE
-- Registra il cambio
-- in un log</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Caso d'uso: Aggiorna Timestamp</h5>
            </div>
            <div class="card-body">
                <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.85rem;"><code>CREATE TRIGGER aggiorna_modifica
BEFORE UPDATE ON Studenti
FOR EACH ROW
BEGIN
  SET NEW.data_modifica = NOW();
END;</code></pre>
                <p class="small text-muted mt-3">
                    Ogni volta che un record è modificato, aggiorna automaticamente data_modifica
                </p>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h3 class="fw-bold text-warning mb-4">
            <i class="fas fa-cog me-2"></i>Stored Procedure
        </h3>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Cosa sono le Stored Procedure?</h5>
            </div>
            <div class="card-body">
                <p class="lead mb-4">
                    Sono programmi SQL memorizzati nel database che eseguono operazioni complesse.
                </p>

                <pre class="bg-dark text-light p-3 rounded" style="font-size: 0.85rem;"><code>CREATE PROCEDURE trasferisci_soldi(
  IN da_conto INT,
  IN a_conto INT,
  IN importo DECIMAL
)
BEGIN
  UPDATE Conti SET saldo = saldo - importo 
    WHERE id = da_conto;
  UPDATE Conti SET saldo = saldo + importo 
    WHERE id = a_conto;
END;

-- Esecuzione:
CALL trasferisci_soldi(1, 2, 100);</code></pre>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5 pt-4 border-top">
        <a href="giorno8.php" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Giorno 8
        </a>
        <a href="giorno10.php" class="btn btn-warning">
            Giorno 10 - Progetto Finale
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
