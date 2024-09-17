localStorage.getItem("readGithub")!=="false"&&e();function e(){window.confirm(`Questo sito è il progetto finale svolto dal gruppo N°3 della Hackademy 33 di Aulab. 
    
 - Clicca "OK" per vedere la pagina Github del progetto.
    
 - Clicca "Annulla" per continuare a navigare nel sito.
    
[se clicchi "Annulla" questo messaggio ti apparirà di nuovo la prossima volta che ricaricherai la pagina]`)&&i()}function i(){const a="https://github.com/Hackademy-Part-time-33/presto_lego.it";navigator.clipboard.writeText(a),localStorage.setItem("readGithub","false"),window.location.href=a}
