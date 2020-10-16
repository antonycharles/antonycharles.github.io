const modal = {
    openModal(button){
        document.getElementById(button.dataset.modal).style.display = "block";
    },

    closeModal(close){
        let modalOpen = close.parentElement;
        if(modalOpen.parentElement.classList.contains('modal')){
            modalOpen.parentElement.style.display = "none";
        }
    },

    closeModalOnclickWindow(event){
        if(event.target.classList.contains('modal')){
            event.target.style.display = "none";
        }
    }
}
window.onclick = function(event){modal.closeModalOnclickWindow(event);}