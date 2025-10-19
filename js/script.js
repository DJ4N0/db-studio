function checkAnswer() {
    const option1 = document.getElementById('option1');
    const option2 = document.getElementById('option2');
    const option3 = document.getElementById('option3');
    const option4 = document.getElementById('option4');
    const resultDiv = document.getElementById('exerciseResult');

    let correct = true;
    let message = '';

    if (!option1.checked) {
        correct = false;
        message += '<p>❌ ISBN è una superchiave</p>';
    } else {
        message += '<p>✅ Corretto! ISBN è una superchiave</p>';
    }

    if (option2.checked) {
        correct = false;
        message += '<p>❌ Titolo non è una chiave candidata</p>';
    } else {
        message += '<p>✅ Corretto! Titolo non è una chiave candidata</p>';
    }

    if (!option3.checked) {
        correct = false;
        message += '<p>❌ (Titolo, Autore) è una superchiave</p>';
    } else {
        message += '<p>✅ Corretto! (Titolo, Autore) è una superchiave</p>';
    }

    if (option4.checked) {
        correct = false;
        message += '<p>❌ AnnoPubblicazione non è una chiave primaria</p>';
    } else {
        message += '<p>✅ Corretto! AnnoPubblicazione non è una chiave primaria</p>';
    }

    if (correct) {
        resultDiv.innerHTML = '<div class="alert alert-success"><strong>Complimenti!</strong> Tutte le risposte sono corrette!</div>' + message;
    } else {
        resultDiv.innerHTML = '<div class="alert alert-warning"><strong>Alcune risposte sono errate.</strong> Controlla la spiegazione:</div>' + message;
    }

    resultDiv.style.display = 'block';
}