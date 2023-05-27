let cartcontentpage = document.querySelector('.cardcon .cart')
function plusquantity(id){
    for (let i = 0; i < productsInCart.length; i++) {
    if (productsInCart[i].id == id) {
        productsInCart[i].count =parseInt(productsInCart[i].count) +1
         console.log(productsInCart[i].count )
        }
}
updatecartPage();
updateShoppingCartHTML();
}

function minusquantity(id){
    for (let i = 0; i < productsInCart.length; i++) {
    if (productsInCart[i].id == id) {
        productsInCart[i].count -= 1
        if(productsInCart[i].count==0){
            removeproduct(id)
        }
    }
}
updatecartPage();
updateShoppingCartHTML();
}



function updatecartPage(){
    // localStorage.setItem('shoppingCart', JSON.stringify(productsInCart));
    if(productsInCart.length > 0){
        cartspan.innerHTML = productsInCart.length;
        let result = productsInCart.map(product => {
          return `
         <tr>
         <td><a href="#" onclick="removeproduct(${product.id})"><i class="fa-solid fa-xmark"></i></a></td>
         <td><span>${product.name}</span></td>
         <td><p><span>${product.basePrice}</span> MAD</p></td>
         <td>
             <div class="quant">
             <button onclick="minusquantity(${product.id})" class="btn-minus"><i class="fa-regular fa-minus"></i></button>
             <span>${product.count}</span>
             <button onclick="plusquantity(${product.id})" class="btn-plus"><i class="fa-regular fa-plus"></i></button>
             </div>
         </td>
         <td><p><span>${product.count * product.basePrice}</span> MAD</p></td>
     </tr>
         `
        });

        cartcontentpage.innerHTML = `
        <table class="table-cart">
        <thead>
            <tr>
                <th></th>
                <th><h5>Product</h5></th>
                <th><h5>Price</h5></th>
                <th><h5>Quantity</h5></th>
                <th><h5>Subtotal</h5></th>
            </tr>
        </thead>
        <tbody>
        ${result.join('')}

        </tbody>
        </table>
        <hr>
        <table class="cart-total">
            <tr>
                <td class="title-total">
                    <h4>Total</h4>
                </td>
                <td class="value-total">
                    <p><span>${countTheSumPrice()}</span> MAD</p>
                </td>
            </tr>
        </table>
        <hr>
        <div class="proceed-checkout mt-4 mb-2">
            <button><a href="/my-account/checkout">Proceed To Checkout</a></button>
        </div>`
    }

    else{
    //   cartspan.innerHTML = 0;
    cartcontentpage.innerHTML =` <p>Your cart is currently empty. <a href="/product-type/flowers">browse products</a></p>
      `
    }
  }

  updatecartPage();
  updateShoppingCartHTML();



// parentElement.addEventListener('click', (e) => { // Last
// 	const isPlusButton = e.target.classList.contains('button-plus');
// 	const isMinusButton = e.target.classList.contains('button-minus');
// 	if (isPlusButton || isMinusButton) {
// 		for (let i = 0; i < productsInCart.length; i++) {
// 			if (productsInCart[i].id == e.target.dataset.id) {
// 				if (isPlusButton) {
// 					productsInCart[i].count += 1
// 				}
// 				else if (isMinusButton) {
// 					productsInCart[i].count -= 1
// 				}
// 				productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;

// 			}
// 			if (productsInCart[i].count <= 0) {
// 				productsInCart.splice(i, 1);
// 			}
// 		}
// 		updateShoppingCartHTML();
// 	}
// });
