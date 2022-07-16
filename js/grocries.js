
const products = [
  {
    id: 0,
    name: "T-shirt 1",
    price: 29.99,
    instock: 100,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t1.png",
  },
  {
    id: 1,
    name: "T-shirt 2",
    price: 24.99,
    instock: 43,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t2.png",
  },
  {
    id: 2,
    name: "T-shirt 3",
    price: 19.99,
    instock: 10,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t3.png",
  },
  {
    id: 3,
    name: "T-shirt 4",
    price: 25.99,
    instock: 5,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t4.png",
  },
  {
    id: 4,
    name: "T-shirt 5",
    price: 29.99,
    instock: 4,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t5.png",
  },
  {
    id: 5,
    name: "T-shirt 6",
    price: 39.99,
    instock: 40,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
    imgSrc: "../img/t6.png",
  },
];

const productE1 = document.querySelector('.columnshop');
function randerProducts() {
  products.forEach(element => {
    productE1.innerHTML += `
                <div class="shopcard">
                    <img src="${element.imgSrc}">
                    <div class="shopcard-text">
                        <h2>${element.name}</h2>
                        <h2><small>$</small>${element.price}</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, dicta!
                        </p>
                    </div>
                    <br>
                    <button class="btn btnshop" id="addToCart"><a href="#add_to_cart">Go to Cart</a></button>
                    <br>
                    <button class="btn"><a href="billing.php">Buy Now</a></button>
                    <br>
                    <div class="add-to-cart">
                        <img src="img/bag-plus.png" onclick="addToCart(${element.id})" alt="add to cart">
                    </div>
                </div>
        `
  })
}
randerProducts();
let cart = [];
// ADD TO CART
function addToCart(id) {
  if (cart.some((item) => item.id === id)) {
    alert("item is already added");
  }
  else {
    const item = products.find((element) => element.id === id);
    cart.push({
      ...item,
      numberOfUnites: 1,
    });
  }
  updateCart();
}
function updateCart() {
  renderCartItems();
  // randerSubtotal();
}
let cartItemE1 = document.querySelector('.cart-items');

function renderCartItems() {
  cartItemE1.innerHTML = "";
  cart.forEach((item) => {
    cartItemE1.innerHTML += `
        <div class="cart-item">
          <div class="item-info">
              <img src="${item.imgSrc}">
              <h4>${item.name}</h4>
          </div>
          <div class="unit-price">
              <small>$</small>${item.price}
          </div>
          <div class="units">
              <div class="btns" onclick="changenumberOfUnites('minus', ${item.id})">-</div>
              <div class="number">${item.numberOfUnites}</div>
              <div class="btns" onclick="changenumberOfUnites('plus', ${item.id})">+</div>           
          </div>
        </div>
          `
  })

}
//change number of unites for an item
function changenumberOfUnites(action, id) {

  cart = cart.map((item)=>{
    let oldNumberOfUnites = item.numberOfUnites;
    if(item.id===id){
      if(action==='minus'){
        oldNumberOfUnites--;
      }
      else if(action==='plus'){
        oldNumberOfUnites++;
      }
      else{
        alert("sorry something went wrong");
      }
    }
    return{
      ...item,
      numberOfUnites: oldNumberOfUnites,
    };
  });
  updateCart();
}