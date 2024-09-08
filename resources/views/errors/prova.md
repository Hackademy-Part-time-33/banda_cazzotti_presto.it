**User Story #7: Sintesi**

Questa user story si concentra sull'implementazione di un sistema automatizzato per l'analisi delle immagini caricate dagli utenti utilizzando l'intelligenza artificiale di Google. Pablo, l'utente, desidera ottenere rapidamente informazioni sulle immagini per migliorare l'efficienza del suo lavoro. 

**Descrizione in pochi passaggi:**

1. **Scopo:** Fornire a Pablo indicazioni rapide e automatiche sul contenuto delle immagini caricate dagli utenti.
2. **Tecnologia Utilizzata:** Google Vision API.
3. **Funzionalità:**
   - Rilevamento di etichette per descrivere il contenuto delle immagini.
   - Identificazione di contenuti potenzialmente inappropriati (es. adult, spoof, racy, medical, violence).
4. **Implementazione:**
   - Inserimento delle chiavi API di Google Vision nel file `google_credential.json`.
   - Assicurarsi che il file `google_credential.json` sia incluso in `.gitignore`.
   - Installazione del pacchetto `google/cloud-vision` nel progetto.
   - Creazione di una migrazione per aggiungere colonne alla tabella `images` per salvare le etichette e i contenuti inappropriati.
   - Implementazione di job asincroni per l'analisi delle immagini al momento del caricamento.
5. **Risultato:** Le immagini verranno analizzate automaticamente e i dati rilevati saranno salvati nel database, rendendo il lavoro di revisione più efficiente e veloce per Pablo.

**Acceptance Criteria:**
- Utilizzo della Google Vision API.
- Funzionamento asincrono per non rallentare la navigazione.
- Interfaccia utente efficace e user-friendly.

**User Story #8: Sintesi**

Questa user story richiede l'implementazione di un sistema per oscurare automaticamente i volti nelle immagini caricate dagli utenti, garantendo la privacy. Linda, l'utente, vuole assicurarsi che i volti delle persone siano censurati nelle immagini.

**Descrizione in pochi passaggi:**

1. **Scopo:** Oscurare i volti nelle immagini per preservare la privacy.
2. **Tecnologia Utilizzata:** Google Vision API e libreria Spatie Image.
3. **Funzionalità:**
   - Rilevamento dei volti nelle immagini caricate.
   - Applicazione di un'immagine di censura sui volti rilevati.
4. **Implementazione:**
   - Creazione di un job asincrono per la rilevazione e censura dei volti (`RemoveFaces`).
   - Utilizzo della Google Vision API per rilevare i volti e ottenere le coordinate dei bounding box.
   - Sovrapposizione di un'immagine di censura sui volti rilevati utilizzando la libreria Spatie Image.
5. **Risultato:** Le immagini caricate con volti verranno automaticamente censurate per garantire la privacy degli individui.

**Acceptance Criteria:**
- Applicazione di un’immagine di censura sui volti.

**Passaggi Dettagliati:**

1. **Creazione del Job di Rimozione dei Volti:**
   - Comando: `php artisan make:job RemoveFaces`
   - Importare le classi necessarie e implementare il job in `app/Jobs/RemoveFaces.php`.
   - Utilizzo del metodo `faceDetection` per rilevare i volti e `getFaceAnnotations` per ottenere le coordinate dei volti.

2. **Censura dei Volti:**
   - Utilizzare la libreria Spatie Image per caricare l'immagine e sovrapporre l'immagine di censura sui volti rilevati.
   - Configurare la sovrapposizione per adattarsi ai bounding box dei volti.

3. **Aggiornamento della Logica di Salvataggio:**
   - Modificare la funzione `store()` in `CreateArticleForm.php` per eseguire il job di censura volti in modo asincrono.
   - Utilizzare `withChain()` per concatenare eventuali job necessari.

4. **Testing e Push delle Modifiche:**
   - Testare l'intera implementazione per assicurarsi che i volti vengano correttamente censurati.
   - Pushare le modifiche su GitHub dopo aver verificato il corretto funzionamento.

**User Story #9: Sintesi**

Questa user story richiede l'implementazione di un watermark sulle immagini caricate dagli utenti per aumentare la fidelity della piattaforma. Guohua, l'utente, vuole che ogni immagine abbia un watermark visibile.

**Descrizione in pochi passaggi:**

1. **Scopo:** Aggiungere un watermark riconoscibile su tutte le immagini caricate per migliorare la fidelity della piattaforma.
2. **Tecnologia Utilizzata:** Libreria Spatie Image.
3. **Funzionalità:**
   - Inserimento automatico di un watermark su ogni immagine caricata dagli utenti.
   - Personalizzazione del posizionamento e delle dimensioni del watermark.
4. **Implementazione:**
   - Modifica del file `ResizeImage.php` per aggiungere il watermark subito dopo il ritaglio dell'immagine.
   - Utilizzo del metodo `watermark()` della libreria Spatie Image per applicare il logo.
5. **Risultato:** Ogni immagine caricata avrà un watermark visibile, aumentando la riconoscibilità del sito e migliorando la fidelity.

**Acceptance Criteria:**
- Inserimento del watermark sulle immagini caricate.
- Il logo deve essere visibile.
- Posizionamento del watermark a discrezione del team di sviluppo.

**Passaggi Dettagliati:**

1. **Modifica del File `ResizeImage.php`:**
   - Aggiungere il metodo `watermark()` subito dopo il ritaglio dell'immagine (riga 10).
   - Specificare il percorso del file da utilizzare come watermark.
   - Configurare le dimensioni, il padding e la posizione del watermark (di default in basso a destra).

2. **Importazione della Classe:**
   - Importare la classe Spatie Image necessaria per la manipolazione delle immagini.

3. **Testing e Push delle Modifiche:**
   - Bloccare e riavviare il terminale delle code per testare l'implementazione.
   - Verificare che il watermark sia correttamente applicato e visibile su tutte le immagini caricate.
   - Pushare le modifiche su GitHub dopo aver confermato il funzionamento corretto.





Abbiamo sviluppato un sistema che analizza automaticamente le immagini caricate dagli utenti. Grazie all'intelligenza artificiale di Google, il nostro sito è in grado di riconoscere il contenuto delle immagini, come oggetti o scene, in modo rapido e preciso. Questo aiuta il revisore a classificare meglio le immagini e a fornirgli informazioni utili senza alcun intervento manuale.

Abbiamo introdotto una funzione che tutela la privacy degli utenti. Ogni volta che viene caricata un'immagine con dei volti, il nostro sistema li oscura automaticamente. In questo modo, possiamo garantire che le informazioni personali siano sempre protette, rispettando la privacy di tutti.

Infine, per aumentare la riconoscibilità e la qualità del nostro sito, abbiamo aggiunto un watermark alle immagini caricate. Questo piccolo logo visibile assicura che le immagini appartengano alla nostra piattaforma, aumentando la professionalità e la coerenza del sito.

Queste tre funzionalità lavorano insieme in modo completamente automatico e asincrono. Ciò significa che mentre voi continuate a utilizzare il sito senza interruzioni, queste operazioni avvengono dietro le quinte, garantendo sempre il massimo livello di servizio e sicurezza.

