# Descrizione del Progetto

Il sito è un'applicazione web sviluppata con Laravel che permette agli utenti di pubblicare e gestire annunci, fornendo funzionalità avanzate come gestione delle immagini, revisione degli annunci e selezione multilingue. Di seguito sono illustrate le principali funzionalità del progetto.

## [Link al sito]("https://prestolego.marcodevito.it)

## Funzionalità del Sito

### 1. Registrazione e Inserimento Annunci (US 1)
- Gli utenti possono registrarsi e accedere al portale per inserire i loro annunci.
- Ogni annuncio deve contenere almeno:
  - Un titolo
  - Un prezzo
  - Una descrizione
- L'inserimento degli annunci è limitato agli utenti autenticati.
- Il sistema offre una selezione di categorie predefinite per organizzare gli annunci.
- La relazione tra utenti, categorie e annunci è gestita tramite una struttura relazionale 1 a N.
- Dopo l'inserimento, un messaggio di conferma viene visualizzato all'utente.
  
### 2. Visualizzazione Annunci (US 2)
- Gli utenti possono visualizzare tutti gli annunci presenti sul portale in ordine dal più recente al più vecchio.
- In homepage sono mostrati gli ultimi 4-6 annunci con il titolo, il prezzo e la categoria.
- Ogni annuncio ha una pagina dettagliata che include un carosello di immagini.
- Gli utenti possono filtrare gli annunci in base alla categoria selezionata.

### 3. Richiesta di Diventare Revisore (US 3)
- Gli utenti registrati possono richiedere di diventare revisori attraverso una sezione "Lavora con noi".
- Il modulo di richiesta invia una mail automatica con i dettagli della richiesta.
- I revisori hanno accesso a una sezione dedicata dove possono visualizzare gli annunci da revisionare.
- Possibilità di accettare o rifiutare gli annunci tramite appositi bottoni.

### 4. Selezione della Lingua (US 4)
- Il sito offre un sistema multilingue con un selettore di lingua rappresentato da bandiere.
- Le lingue disponibili includono:
  - Italiano (IT)
  - Inglese (EN)
  - Altre lingue extra a scelta del team di sviluppo.

### 5. Gestione delle Immagini (US 5)
- Gli utenti possono caricare più immagini contemporaneamente per i loro annunci.
- È possibile rimuovere le immagini caricate una alla volta.
- Un'anteprima delle immagini viene mostrata all'utente prima della pubblicazione.
- Il sistema utilizza Laravel File Storage per la gestione sicura ed efficiente delle immagini.

### 6. Ridimensionamento delle Immagini (US 6)
- Le immagini caricate vengono automaticamente ridimensionate a una dimensione predefinita (es. 300x600).
- Il ridimensionamento può essere personalizzato dal team di sviluppo.
- Il processo di resize avviene in modo asincrono, per non rallentare l'upload delle immagini.

### 7. Analisi delle Immagini con AI (US 7)
- Integrazione con l'API Google Vision per l'analisi delle immagini caricate.
- Il file di credenziali `google_credential.json` è incluso nel `.gitignore` per proteggere le informazioni sensibili.
- L'analisi tramite AI avviene in modo asincrono, garantendo una gestione efficiente delle risorse.
- L'interfaccia utente è stata progettata per offrire un'esperienza fluida ed efficace.

### 8. Censura Automatica dei Volti (US 8)
- Utilizzo dell'intelligenza artificiale per rilevare e applicare automaticamente un’immagine di censura sui volti nelle immagini caricate, garantendo la privacy e la conformità alle normative sulla protezione dei dati.

### 9. Watermark sulle Immagini (US 9)
- Le immagini caricate vengono automaticamente dotate di un watermark per proteggerne l'originalità.
- La posizione e la visibilità del watermark sono a discrezione del team di sviluppo.

### 10. Ricerca Avanzata (US 10)
- Implementazione di una ricerca full-text per permettere agli utenti di trovare facilmente gli annunci in base a:
  - Titolo
  - Descrizione
  - Categoria