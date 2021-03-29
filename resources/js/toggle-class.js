export default class ToggleClass{
    constructor(switchedClass, clickedElClass, listenerClass){
        this.switchedClass = switchedClass;
        this.clickedElClass = clickedElClass;
        this.listenerClass = listenerClass;
        this.listenerEl = document.querySelector(`.${this.listenerClass}`);

        this.init();
    }

    init(){
        this.listenerEl.addEventListener('click', this.toggleClass.bind(this));
    }

    toggleClass(e){
        if(e.target.classList.contains(this.clickedElClass)){
            e.target.classList.toggle(this.switchedClass);
        }
    }

}