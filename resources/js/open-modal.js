export default class OpenModal {
    constructor(modalId, wrapperId, listenerElId, modalOpenClass){
        this.modalEl = document.getElementById(modalId);
        this.wrapperEl = document.getElementById(wrapperId);
        this.listenerEl = document.getElementById(listenerElId);
        this.modalOpenClass = modalOpenClass;
        this.wrapperOpenClass = 'display-block';

        this.init();
    }

    init(){
        this.listenerEl.addEventListener('click', this.openModal.bind(this));
        this.wrapperEl.addEventListener('click', this.closeModal.bind(this));
    }

    openModal(e){
        e.preventDefault();

        console.log(this.modalEl.classList)

        this.modalEl.classList.add(this.modalOpenClass);
        this.wrapperEl.classList.add(this.wrapperOpenClass);
    }

    closeModal(){
        this.modalEl.classList.remove(this.modalOpenClass);
        this.wrapperEl.classList.remove(this.wrapperOpenClass);
    }
}