const search = function(){
    const input = document.querySelector('.search-block > input');
    const searchBtn = document.querySelector('.search-block > button');

    const renderGoods = function(goods){
        const goodsContainer = document.querySelector('.long-goods-list')

        goodsContainer.innerHTML ="";

        goods.forEach(function(good){
            const goodsBlock = document.createElement('div')

            goodsBlock.classList.add('col-lg-3')
            goodsBlock.classList.add('col-sm-6')

            goodsBlock.innerHTML = `
                <div class="goods-card">
                    <span class ="label ${good.label ? null : 'd-none'}">${good.label}</span>
                    <img src="db/${good.img}" alt="${good.name}" class="goods-image">
                    <h3 class="goods-title">${good.name}</h3>
                    <p class="goods-description">${good.description}</p>
                    <button class="button goods-card-btn add-to-cart" data-id="${good.id}">
                        <span class="button-price">$${good.price}</span>
                    </button>
                </div>
            `

            goodsContainer.append(goodsBlock);
        })
    }

    const getData = function( value){
        fetch('/db/db.json')
        .then((res) => res.json())
        .then((data) => {
            const array = data.filter(function(good){
    
                return good.name.toLowerCase().includes(value.toLowerCase());
            })

            console.log(value);
            // category ? console.log('+') : console.log('-')

            localStorage.setItem('goods' , JSON.stringify(array));
            if (window.location.pathname !== '/goods.php'){
                window.location.href = '/goods.php'
            } else {
                renderGoods(array)
            }
            
        })
    }
    searchBtn.addEventListener('click', function(){
        getData(input.value);
    })
}

search();