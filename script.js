// Products array //
const products=[{
    name:'Bag of Orange', //name of product (string)
    price:10, //price of product (number)
    quantity:0, // in cart should start at zero (number)
    productId:101,// unique id for the product (number)
    image:src="images/orange.jpg"},
    { name:'Carton of Strawberries', //name of product (string)
    price:5, //price of product (number)
    quantity:0, // in cart should start at zero (number)
    productId:102,// unique id for the product (number)
    image:src="images/strawberry.jpg"},
    { name:'Carton of Cherries', //name of product (string)
    price:4, //price of product (number)
    quantity:0, // in cart should start at zero (number)
    productId:103,// unique id for the product (number)
    image:src="images/cherry.jpg"}];
  
    let cart=[]; // cart array
  
  
  // Adds products to cart // 
    function addProductToCart(productId) {
    let index = products.findIndex(function (product) {
      return product.productId === productId;
    });
  
    if (index >= 0) {
      let cartIndex = cart.findIndex(function (product) {
        return product.productId === productId;
      });
  
      if (cartIndex >= 0) {
        cart[cartIndex].quantity += 1;
  
      } else {
        products[index].quantity = 1;
        cart.push(products[index]);
      }
  
      console.log(cart);
    }
  }
  
  addProductToCart(101);
  addProductToCart(102);
  addProductToCart(103);
  
  
  // Increases quantity of product in cart //
  function increaseQuantity(productId){
    let index=products.findIndex(function(product){
      return product.productId===productId;
      })
    products[index].quantity++;
  }
  increaseQuantity(101);
  increaseQuantity(102);
  increaseQuantity(103);
  
  // Decreases quantity of product in cart //
  function decreaseQuantity(productId) {
    let index = products.findIndex(function (product) {
      return product.productId === productId;
    });
    if (products[index].quantity > 1) {
      products[index].quantity--;
    } else {
      products.remove(index, 1);
    }
  }
  
  
  decreaseQuantity(101);//decrease quantity of product 101
  decreaseQuantity(102);//decrease quantity of product 102
  decreaseQuantity(103);//decrease quantity of product 103
  
  
  
  
  
  // Removes item from cart //
   function removeProductFromCart(productId){
      let index=products.findIndex(function(product){
        return cart.productId===productId;
      })
      cart.splice(index,1)
      }
    removeProductFromCart(101);
    removeProductFromCart(102);
    removeProductFromCart(103);
  
  
  // Cart total //  
  function cartTotal(){
    let total = 0;
    for(let i=0;i<cart.length;i++){
      total+=cart[i].price*cart[i].quantity;
      
    }
    return total;
    
  }
  cartTotal();
  
  
  // Empties cart //
  function emptyCart(cart){
    return []
  }
  emptyCart(cart);
  
  // Pay //
  function pay(amount){
    let total=0;
    cart.forEach(function(product){
      total+=product.price*product.quantity;
    })
    if(total==amount){
      return 0;
      }
      else if(total<amount){
        return -(total-amount)
      }
    else{
      return amount-total;
    }
  } 
  
  
  pay(amount)