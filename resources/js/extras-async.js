export default class ExtrasAsync {

    constructor(listenerClass) {
        this.listenerClass = listenerClass;
        this.listenerEl = document.querySelector(`.${this.listenerClass}`);
        this.extraEls = this.listenerEl.querySelectorAll('input[name^=extra]');
        this.tokenEl = document.querySelector('input[name=_token]');
        this.priceTotalEls = document.querySelector('.price_num_total');
        this.pricePercleaningEl = document.querySelector('.price_num_percleaning');
        this.priceCheckEl = document.querySelector('.price_check');
        this.extraTemplate = `<div>
                                <div>
                                    <span>{{name}}</span><span>extra</span>
                                </div>
                                <div>
                                    <span>$</span><span class="price_num_percleaning">{{cost}}</span>
                                </div>
                            </div>`;

        this.init();
    }

    init(){
        this.extraEls.forEach((item)=>{
            item.addEventListener('change', this.onInputElChange.bind(this));
        })
    }

    async onInputElChange(e){
        let extraInputName = e.target.attributes.name.value;

        if(e.target.checked) await this.fetchExtra(extraInputName, 1);
        if(!e.target.checked) await this.fetchExtra(extraInputName, 0);

        this.fetchPrice().then((data) => this.isertPrice(data));
    }

    fetchPrice(){
        return fetch('price', {
                credentials: 'include',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': this.tokenEl.value
                }
            }).then((res) => res.json());
    }

    fetchExtra(name, value){
        return fetch(`/extras-ajax`, {
            credentials: 'include',
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                name: name,
                value: value,
                _token: this.tokenEl.value
            }),
        });
    }

    isertPrice(price){
        this.pricePercleaningEl.innerHTML = price.per_cleaning,
        this.priceTotalEls.innerHTML = price.total_price

        
    }

}