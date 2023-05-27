cartspan=document.querySelector('ul#list li span');
cartconetnt = document.getElementById('cart');


let productsInCart = [];
if (localStorage.getItem("shoppingCart")) {
  productsInCart = JSON.parse(localStorage.getItem("shoppingCart"));
}


const countTheSumPrice = function () { // 4
	let sum = 0;
	productsInCart.forEach(item => {
		sum += item.basePrice*item.count;
	});
	return sum;
}

function removeproduct(productd){
	
	const itemIndex = productsInCart.findIndex(item => item.id === productd);

  if (itemIndex !== -1) {
    // Remove the item from the cart
    productsInCart.splice(itemIndex, 1);
  }
  updateShoppingCartHTML();
  updatecartPage();
  console.log(productsInCart)
}

function updateShoppingCartHTML(){
  localStorage.setItem('shoppingCart', JSON.stringify(productsInCart));
  if(productsInCart.length > 0){
      cartspan.innerHTML = productsInCart.length;
      let result = productsInCart.map(product => {
        return `
        <li>
        <div class="item">
         <div class="titleproduct"> <h6>${product.name}</h6> <a href="#" onclick=(removeproduct(${product.id}))><i class="fa-solid fa-xmark"></i></a></div>
         
         <p><span>${product.basePrice}</span>MAD</p>
         <p>Quantity: <span>${product.count}</span></p>
        
        </div>
       </li>`
      });

      cartconetnt.innerHTML = `
      <ul>
      ${result.join('')}
      
      
    </ul>
    <hr>
    <div class="total">
      <h6>Total:</h6>
      <h6>${countTheSumPrice()} MAD</h6>
    </div>
    <div class="cartbuttns mt-3">
      
      <button id="btnadd" ><a href="/cart"><span>View Cart</span></a></button>
      <button id="btnadd"><a href="/my-account/checkout"><span>Checkout</span></a></button>
    </div>`
  }
  
  else{
    cartspan.innerHTML = 0;
    cartconetnt.innerHTML =` <p>No products in the cart.</p>`
  }
}

updateShoppingCartHTML();

// let filred =[]



// function getDataFromLocalStorage() {
//   let data = window.localStorage.getItem("shoppingCart");
//   if (data) {
//     let tasks = JSON.parse(data);
//     addElementsToPageFrom(tasks);
//   }
// }


productid=parseInt(document.querySelector('.product-info .product-sku p span').textContent);
productprice=parseInt(document.querySelector('.product-info .product-price p span').innerHTML);
productquantity=document.getElementById('quantite').value;
productname=document.querySelector('.product-info .product-name h3').textContent
// count span in cart





function updateProductInCart(product){
  for(let i = 0; i < productsInCart.length; i++){
      if(productsInCart[i].id == product.id){
          productsInCart[i].count = product.count;
          productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;
          return;
      }
  }
  productsInCart.push(product)
}

function addproduct(){
  let productToCart={
      id:productid,
      name:productname,
      count:quantite.value,
      price:productprice*quantite.value,
      basePrice:+productprice
  }
 updateProductInCart(productToCart);
  updateShoppingCartHTML();


}

  


