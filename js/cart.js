const cart = function(){
    const cartBtn = document.querySelector('.button-cart');
    const cart = document.getElementById('modal-cart');
    const cartCls = document.querySelector('.modal-close');
    const goodsContainer = document.querySelector('.long-goods-list');
    const cartTableGoods = document.querySelector('.cart-table__goods');
    const modalForm = document.querySelector('.modal-form');

    const deleteCartItem = function(id){
        const cart = JSON.parse(localStorage.getItem('cart'))

        const newCart = cart.filter(good => {
            return good.id !== id;
        })

        localStorage.setItem('cart', JSON.stringify(newCart));
        renderCartGoods(JSON.parse(localStorage.getItem('cart')));
    }
    const plusCartItem = function(id){
        const cart = JSON.parse(localStorage.getItem('cart'))

        const newCart = cart.map(good => {
            if(good.id === id){
              good.count++
            }
            return good;
        })

        localStorage.setItem('cart', JSON.stringify(newCart));
        renderCartGoods(JSON.parse(localStorage.getItem('cart')));
        // renderCartFoods();
    }
    const minusCartItem = function(id){
        const cart = JSON.parse(localStorage.getItem('cart'))

        const newCart = cart.map(good => {
            if(good.id === id){
                if(good.count > 0){
                    good.count--
                }
              
            }
            return good;
        })

        localStorage.setItem('cart', JSON.stringify(newCart));
        renderCartGoods(JSON.parse(localStorage.getItem('cart')));
        // renderCartFoods();
    }
    const addToCart = function(id){
                const goods = JSON.parse(localStorage.getItem('goods'));
                const clickedGood = goods.find(good => good.id === id);
                const cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : []

                if (cart.some(good => good.id === clickedGood.id)){
                      cart.map(good => {
                          if(good.id === clickedGood.id){
                            good.count++
                          }
                          return good;
                      })
                } else{
                    clickedGood.count = 1
                    cart.push(clickedGood)
                }
                
                localStorage.setItem('cart', JSON.stringify(cart))

    }

    const renderCartGoods = function(goods){
        cartTableGoods.innerHTML = '';
        goods.forEach(good => {
            const tr = document.createElement('tr')
            tr.innerHTML = `
					
            
                <td>${good.name}</td>
                <td>${good.price}</td>
                <td><button class="cart-btn-minus"">-</button></td>
                <td>${good.count}</td>
                <td><button class="cart-btn-plus"">+</button></td>
                <td>${good.price * good.count}$</td>
                <td><button class="cart-btn-delete"">x</button></td>
            
                
            `
            cartTableGoods.append(tr);

            tr.addEventListener('click', function(event){
                if (event.target.classList.contains('cart-btn-minus')){
                    minusCartItem(good.id);
                }else if (event.target.classList.contains('cart-btn-plus')){
                    plusCartItem(good.id);
                }else if(event.target.classList.contains('cart-btn-delete')) {
                    deleteCartItem(good.id);
                }
            })
        })
    }

           


    const sendForm = function(){
        const cartArray = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : []
        fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            body: JSON.stringify({
                cart: cartArray,
                name: '',
                phone: ''
            })
        }).then(function(){
            cart.style.display="none";
        })
    } 

    modalForm.addEventListener('submit' , function(event){
        sendForm();
        event.preventDefault();
        window.location.href='./pay.html';
        
        
    })


    cartBtn.addEventListener('click', function(){
        const cartArray = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : []
        
        renderCartGoods(cartArray);
        cart.style.display="flex";
        body.style.overflow="hidden"; 


    })

    cartCls.addEventListener('click' , function(){
        cart.style.display='none';
        body.style.overflow='visible';
    })
    if (goodsContainer){
        goodsContainer.addEventListener('click' , function(event){
            if(event.target.closest('.add-to-cart')){
                const buttonToCart = event.target.closest('.add-to-cart')
                const goodId = buttonToCart.dataset.id;
                
                addToCart(goodId);
            }   
        })
    }
}


cart();


// =========================================

