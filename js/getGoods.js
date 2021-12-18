const getGoods = function(){
    const links = document.querySelectorAll('.navigation-link');
    const more = document.querySelector('.more')
    const renderGoods = function(goods){
        const goodsContainer = document.querySelector('.long-goods-list')

        goodsContainer.innerHTML ="";

        goods.forEach(function(good){
            const goodsBlock = document.createElement('div')

            goodsBlock.classList.add('col-lg-3')
            goodsBlock.classList.add('col-sm-6')

            goodsBlock.innerHTML = `
                <div class="goods-card">
                    <span class="label ${good.label ? null : 'd-none'}">${good.label}</span>
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

    const getData = function( value, category){
        fetch('/db/db.json')
        .then((res) => res.json())
        .then((data) => {
            const array = category ? data.filter(function(item){
                return item[category] === value;
            }) : data;

            
            // category ? console.log('+') : console.log('-')

            localStorage.setItem('goods' , JSON.stringify(array));
            if (window.location.pathname !== '/goods.php'){
                window.location.href = '/goods.php'
            } else {
                renderGoods(array)
            }
            
        })
    }

    links.forEach(function(link){
        link.addEventListener('click' , function(event){
            event.preventDefault()
            const linkValue = link.textContent;
            const category = link.dataset.field;

            getData(linkValue, category);
        })
    })

    // localStorage.setItem('goods' , JSON.stringify({name : 'all'}))

    // const goods = JSON.parse({name: 'all'});
    // console.log(goods);

    // console.log(localStorage);
    // localStorage.removeItem('goods');
    // console.log(localStorage);


    if (localStorage.getItem('goods') && window.location.pathname === '/goods.php'){
        renderGoods(JSON.parse(localStorage.getItem('goods')));
    }

    if(more){
        more.addEventListener('click', function(){
            event.preventDefault()
            getData();
        })
    }
}

getGoods();