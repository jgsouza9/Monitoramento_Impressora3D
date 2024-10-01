const modal = document.getElementById("modal");
const button = document.getElementById("btnEnviar");
const closeModal = document.getElementsByClassName("close-btn")[0];

btnEnviar.onclick = function() {
    
    modal.style.display = "block";
}

closeModal.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}