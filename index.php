<!-- 
  Milestone 1
  Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
  Scriviamo tutto (logica e layout) in un unico file index.php

  Milestone 2
  Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

  Milestone 3 (BONUS)
  Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

  Milestone 4 (BONUS)
  Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
  Dare all’utente anche la  possibilità di permettere o meno la ripetizione di caratteri uguali. 
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <title>PHP Strong Password Generator</title>
</head>

<body class=" bg-black text-light">
  <div class="container">

    <header class="text-center py-5">
      <h1 class="display-3 text-secondary fw-bold mb-4">PHP Strong Password Generator</h1>
      <h2 class="display-5">Genera una password sicura</h2>
    </header>

    <main class="py-5 container">

      <form class="row g-3" action="index.php" method="GET">

        <div class="row mb-3">
          <label for="pwdLengthInput" class="col-sm-2 col-lg-6 col-form-label">Lunghezza Password: </label>
          <div class="col-sm-10 col-lg-6">
            <input type="number" class="form-control" id="pwdLengthInput" name="pwdLength">
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 col-lg-6 pt-0">Includi:</legend>
          <div class="col-sm-10 col-lg-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="letters" id="lettersCheck">
              <label class="form-check-label" for="lettersCheck">
                Lettere
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="numbers" id="numbersCheck">
              <label class="form-check-label" for="numbersCheck">
                Numeri
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="symbols" id="symbolsCheck">
              <label class="form-check-label" for="symbolsCheck">
                Simboli
              </label>
            </div>
          </div>
        </fieldset>

        <div class="row mb-3">
          <div class="col-sm-12 offset-sm-2 offset-lg-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="repetitions" id="repetitionsCheck">
              <label class="form-check-label" for="repetitionsCheck">
                Includi Ripetizioni
              </label>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>

      </form>

    </main>

  </div>
</body>

</html>