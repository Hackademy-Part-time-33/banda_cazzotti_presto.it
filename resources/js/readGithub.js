if (localStorage.getItem("readGithub") !== "false") {
    let url = document.URL;
    if (window.confirm("Questo sito è il progetto finale svolto dal gruppo N°3 della Hackademy 33 di Aulab. \n \n - Clicca \"OK\" per vedere la pagina Github del progetto.\n - Clicca \"Annulla\" per continuare a navigare nel sito \n[se clicchi \"Annulla\" questo messaggio ti apparirà di nuovo la prossima volta che ricaricherai la pagina]")) {
        localStorage.setItem("readGithub", "false")
        window.open("https://github.com/Hackademy-Part-time-33/presto_lego.it");
      
        
    }
}

