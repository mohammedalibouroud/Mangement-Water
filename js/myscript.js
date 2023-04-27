let adherentButton = document.querySelector("#miseajouradrh");
adherentButton.addEventListener("click",()=>{
    window.location.href = 'AjouterAdherent.html';
    let myhtml = window.location.href;
    document.querySelector("#mainContent").innerHTML = myhtml.document.getElementsByTagName("body");
});