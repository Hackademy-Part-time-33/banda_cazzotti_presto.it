if (localStorage.getItem("readGithub") !== "false") {
    showGithubPrompt();
}

function showGithubPrompt() {
    const message = `Questo sito è il progetto finale svolto dal gruppo N°3 della Hackademy 33 di Aulab. 
    \n - Clicca "OK" per vedere la pagina Github del progetto.
    \n - Clicca "Annulla" per continuare a navigare nel sito.
    \n[se clicchi "Annulla" questo messaggio ti apparirà di nuovo la prossima volta che ricaricherai la pagina]`;

    if (window.confirm(message)) {
        openGithubPage();
        // checkPopupBlocked();
    }
}

function openGithubPage() {
    const githubUrl = "https://github.com/Hackademy-Part-time-33/presto_lego.it";
    navigator.clipboard.writeText(githubUrl);
    localStorage.setItem("readGithub", "false");
    window.location.href = githubUrl;
}

// function checkPopupBlocked() {
//     const checkMessage = `Alcuni Browser bloccano l'apertura di nuove pagine, sei riuscito ad andare su github?
//     \n[su Chrome devi cliccare su "Pop-up bloccato"]
//     \n\n- Premi "OK" se ti si è aperta la pagina Github`;

//     if (window.confirm(checkMessage)) {
//         localStorage.setItem("readGithub", "false");
//     }
// }
