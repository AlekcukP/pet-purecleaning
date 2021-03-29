export default class ClassSwither {

    constructor(switchedClass, clickedElClass, parentClass, listenerClass){
        this.switchedClass = switchedClass;
        this.parentClass = parentClass;
        this.clickedElClass = clickedElClass;
        this.listenerClass = listenerClass;
        this.listenerEl = document.querySelector(`.${this.listenerClass}`);

        this.init();
    }

    init(){
        this.listenerEl.addEventListener('click', this.switchClass.bind(this));
    }

    switchClass(e){
        if(e.target.classList.contains(this.switchedClass)){
            return;
        }
        if(e.target.classList.contains(this.clickedElClass)){
            let parentEl = e.target.closest(`.${this.parentClass}`);

            let childEls = parentEl.querySelectorAll(`.${this.clickedElClass}`);

            childEls.forEach((item)=>{
                item.classList.remove(this.switchedClass);
            })

            e.target.classList.add(this.switchedClass);
        }
    }
}