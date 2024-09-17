## [Link al sito](https://prestolego.marcodevito.it)
# Funzionalità del Sito
Il sito offre un’esperienza completa e intuitiva per la pubblicazione e la gestione di annunci. Gli utenti possono registrarsi e accedere a un'area dedicata dove possono creare e pubblicare i loro annunci. Ogni annuncio include informazioni dettagliate come titolo, prezzo e descrizione, e il sistema consente agli utenti di selezionare da una lista di categorie predefinite per facilitare la ricerca e l'organizzazione degli annunci.

Una volta effettuato l'accesso, gli utenti possono aggiungere più immagini ai loro annunci in un'unica operazione e visualizzare un'anteprima delle immagini prima della pubblicazione. Nel caso in cui sia necessario apportare modifiche, è possibile rimuovere le immagini singolarmente. Le immagini vengono automaticamente ridimensionate per mantenere un aspetto coerente e ottimizzato sul sito, senza rallentare l’esperienza dell’utente, poiché questo processo avviene in modo asincrono.

Il sito implementa inoltre un sistema avanzato di gestione degli annunci attraverso una funzione di revisione. Gli utenti possono fare richiesta per diventare revisori tramite una sezione “Lavora con noi” dedicata, che prevede l'invio di una mail con i dettagli della richiesta. I revisori hanno quindi accesso a una sezione speciale del sito dove possono esaminare gli annunci in attesa, con la possibilità di accettarli o rifiutarli in modo semplice e immediato.

L’interfaccia del sito è multilingue, offrendo agli utenti la possibilità di selezionare la lingua preferita tramite un sistema di bandiere. Attualmente, sono supportate l'italiano, l'inglese e lo spagnolo, con la possibilità di aggiungere altre lingue extra secondo le esigenze.

Per migliorare ulteriormente l’esperienza utente, il sito integra l'intelligenza artificiale di Google Vision per analizzare le immagini caricate. Questa funzionalità permette di rilevare i volti nelle immagini e applicare automaticamente una censura per garantire la privacy degli utenti. Inoltre, ogni immagine viene arricchita con un watermark, posizionato in modo visibile, per preservare l'originalità dei contenuti.

La ricerca all'interno del sito è facilitata da un sistema full-text che consente di cercare gli annunci in base a titolo, descrizione e categoria. Questa funzione rende la piattaforma uno strumento efficace per trovare rapidamente gli annunci più pertinenti alle proprie esigenze.

In sintesi, il sito si presenta come una piattaforma completa e versatile per la gestione degli annunci, con una particolare attenzione alla sicurezza, alla privacy, e all'efficienza, il tutto corredato da un’interfaccia utente chiara e multilingue.


## User stories seguite:

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