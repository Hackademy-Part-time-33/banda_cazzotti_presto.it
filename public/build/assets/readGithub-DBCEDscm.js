localStorage.getItem("readGithub")!=="false"&&window.confirm(`Questo sito è il progetto finale svolto dal gruppo N°3 della Hackademy 33 di Aulab. 
 
 - Clicca "OK" per vedere la pagina Github del progetto.
 - Clicca "Annulla" per continuare a navigare nel sito 
[se clicchi "Annulla" questo messaggio ti apparirà di nuovo la prossima volta che ricaricherai la pagina]`)&&(localStorage.setItem("readGithub","false"),window.open("https://github.com/Hackademy-Part-time-33/presto_lego.it"),console.log("prova"));
