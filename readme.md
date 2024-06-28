# PHP-STRONG-PASSWORD-GENERATOR
- Dato un array di utenti, ovvero array associativi con username e password in chiaro
- Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
    1. un username
    2. una password
- La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
all pagina di login (login.php).
### Bonus 1:
- Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.
### Bonus 2:
- Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/'

## HUMAN-CODE

1. Assegno il valore degli <input type="text"> ad una variabile prevedendo anche il caso iniziale in cui la variabile non ha nessun valore
2. tramite array_filter, filtro l array users cercando un user che abbia lo stesso username e password di quelli assegnati alla variabile, e avrò in un nuovo array lo username e la password di chi ha effettuato l accesso
3. se la lunghezza del nuovo array è 1, vengo rediretto alla pagina index.php, altrimenti mi viene mostrato il messaggio di errore "username or password wrong"
    - nella pagina index.php mi verrà mostrato il mio username