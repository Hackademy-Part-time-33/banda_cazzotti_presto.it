localStorage.getItem("readGithub")!=="false"&&window.confirm(`Questo sito è il progetto finale svolto dal gruppo N°3 della Hackademy 33 di Aulab. 
 
 - Clicca "OK" per vedere la pagina Github del progetto.
 - Clicca "Annulla" per continuare a navigare nel sito 
[se clicchi "Annulla" questo messaggio ti apparirà di nuovo la prossima volta che ricaricherai la pagina]`)&&(window.open("https://github.com/Hackademy-Part-time-33/presto_lego.it"),window.confirm(`Alcuni Browser bloccano l'apertura di nuove pagine, sei riuscito ad andare su github?
[su Chrome devi cliccare su "Pop-up bloccato" ]

- Premi "OK" sei ti si è aperta la pagina Github`)&&localStorage.setItem("readGithub","false"));
