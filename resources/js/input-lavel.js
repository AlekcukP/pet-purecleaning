export default class InputLavel {

        constructor(listenerClass){
            this.levelElClass = 'input_level_el';
            this.lavelContainerClass = 'input_level_container';
            this.levelActiveClass = 'input_level_active';
            this.listenerClass = listenerClass;
            this.listenerEl = document.querySelector(`.${this.listenerClass}`);

            this.init();
    }

    init(){
        this.listenerEl.addEventListener('click', this.setLavel.bind(this));
    }

    setLavel(e){
        if(e.target.classList.contains(this.levelElClass)){
            let parentEl = e.target.closest(`.${this.lavelContainerClass}`);
            let childEls = parentEl.querySelectorAll(`.${this.levelElClass}`);
            let currentIndex = +e.target.dataset.levelIndex;

            childEls.forEach((item)=>{
                item.classList.remove(this.levelActiveClass);

                if(item.dataset.levelIndex <= currentIndex){
                    item.classList.add(this.levelActiveClass);
                }
            })
        }
    }
}
