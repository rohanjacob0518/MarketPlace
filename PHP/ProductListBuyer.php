<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Marketplace - Products Dashboard UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="ProductListBuyer.css">
  </head>

  <body>
  <!-- partial:index.partial.html -->
    <div class="app-container">
      <div class="sidebar">
        <?php include 'sidebar.php' ?>
      </div>
      <div class="app-content">
        <div class="app-content-header">
          <h1 class="app-content-headerText">Products</h1>
          <button class="mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
              <defs></defs>
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
          </button>
          <!-- <button class="app-content-headerButton">Edit</button> -->
          <button class="app-content-headerButton" onclick="toggleMenu()"><span>Cart</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
          </button>
        </div>
        <div class="app-content-actions">
          <input class="search-bar" placeholder="Search..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <!-- <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button> -->
              <div class="filter-menu">
                <label>Category</label>
                <select>
                  <option>All Categories</option>
                  <option>Furniture</option>                     
                  <option>Decoration</option>
                  <option>Kitchen</option>
                  <option>Bathroom</option>
                </select>
                <label>Status</label>
                <select>
                  <option>All Status</option>
                  <option>Active</option>
                  <option>Disabled</option>
                </select>
                <div class="filter-menu-buttons">
                  <button class="filter-button reset">
                  Reset
                  </button>
                  <button class="filter-button apply">
                  Apply
                  </button>
                </div>
              </div>
            </div>
            <div class="menu-container" id="menu-container">
            
            <!--  <button class="fixed-btn" onclick="saveOrder()">Save Order</button> -->
            <ul class="product-list">
      <li class="product-list-item fadeIn">
        
        
      </li>
    </ul>
   
            </div>  
            <div class="menu-items-container" id="menu-items-container">
    <button class="checkout-button" onclick="saveOrder()">Save Order</button>
</div>
          </div>
        </div>
        <div class="products-area-wrapper gridView">
          <?php
            $itemid=$_GET['item'];
            $conn = mysqli_connect('localhost','root','','erdb');
            if(!$conn) {
              echo "Error";
              die($conn);
            }
            else{
              $sql = mysqli_query($conn,"SELECT * FROM `products` WHERE merchid = $itemid");  
              while ($row = $sql->fetch_assoc()) {
                if (!empty($row)) {
          ?>
          <div class="products-row">
            <div class="product-cell image">
              <img src="<?php echo $row["image"];?>" alt="product">
              <span> 
                <?php 
                  echo $row["pname"];
                ?> 
              </span>
            </div>
            <div class="product-cell category">
              <span class="cell-label">
                Category:
              </span>Food
            </div>
            <div class="product-cell price">
              <span class="cell-label">
                Price:
              </span><?php echo $row["price"];?>
            </div>
            <div class="add-product">
              <button class="app-content-headerButton" onclick="addItem(' <?php echo $row['pname'];?>','<?php echo $row['image'];?> ', '<?php echo $row['id'];?>')">
              ADD
              </button>
            </div>
          </div>
          <?php     
                }
              }
              if(!$sql) {
                echo "ERROR";
              }
              else {
                echo "<script>console.log('success');</script>";
              }
            }
          ?>
        </div>
      </div>
    </div>
  <!-- partial -->
  </body>
  <script  src="ProductListSeller.js"></script>
  <script>
    
    var itemCounts = {};
    var cart = {}; // Initialize an empty cart object
    function toggleMenu() {
      

      var menuItemsContainer = document.getElementById("menu-items-container");
      menuItemsContainer.classList.toggle("show");

      var menu = document.getElementById("menu-container");

      menu.classList.toggle("show");
      checkcart();
    
    }

    function addItem(item, img, id) {
  if (!cart[id]) {
    cart[id] = {
      item: item,
      quantity: 1,
      img: img
    };
  } else {
    cart[id].quantity++;
  }

  // Update the cart display
  updateCartDisplay();
}

function updateCartDisplay() {
  // Clear the current cart display
  const productList = document.querySelector(".product-list");
  productList.innerHTML = '';

  // Populate the cart display with items from the cart object
  for (const id in cart) {
    const cartItem = cart[id];
    const productListItem = document.createElement("li");
    productListItem.classList.add("product-list-item", "fadeIn");
    productListItem.innerHTML = `
      <div class="product-img-wrapper">
        <img class="product-image" src="${cartItem.img}" />
      </div>
      <div class="product-list-itemContent">
        <div class="product-info">
          <h2 class="product-info-header">${cartItem.item}</h2>
          <h7 class="remove-product"><button>remove</button></h7>
        </div>
        <div class="product-amount-wrapper">
          <button class="product-amount-button increase" onclick="increaseqty(${id})">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up" viewBox="0 0 24 24">
              <path d="M18 15l-6-6-6 6" />
            </svg>
          </button>
          <span class="product-amount">${cartItem.quantity}</span>
          <button class="product-amount-button decrease" onclick="decreaseqty(${id})">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down" viewBox="0 0 24 24">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </button>
        </div>
      </div>
    `;
    productList.appendChild(productListItem);
    var deleteButton = document.querySelectorAll(".remove-product");
    deleteButton.forEach(function (button) {
  button.addEventListener('click', function() {
    // Find the parent product-item element and remove it
    var productItem = button.closest(".product-list-item");
    if (productItem && productList.contains(productItem)) {
      productList.removeChild(productItem);
      delete cart[id];
      console.log('Product deleted');
    }
  });
});
  
  }
}

function increaseqty(id){
  cart[id].quantity++;
  updateCartDisplay();
  
}
function decreaseqty(id){
  curr_qty=cart[id].quantity;
  if(curr_qty==1){
    delete cart[id];
  }
  else{
    new_qty = Math.max(curr_qty - 1, 1);
  cart[id].quantity=new_qty;
  }
 
  updateCartDisplay();
  
}

    function getMenuItemsByName(name) {
      return Array.from(menuContainer.querySelectorAll('.product-list-itemContent')).filterby(function(menuItem) {
        return menuItem.textContent === name;
      });
    }
    function saveOrder() {
      var menuItems = document.querySelectorAll('.product-list-itemContent');
      var orderItems = [];
      // Loop through each menu item and extract the details
      for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        var name = menuItem.querySelector('.product-info-header').textContent;
        var quantity = menuItem.querySelector('.product-amount').textContent;
        // Add the details to the orderItems array
        orderItems.push({
          name: name,
          quantity: quantity
        });
      }
      // Send the order data to the server using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/Marketplace/PHP/AddtoOrders.php');
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.onload = function() {
        if (xhr.status === 200) {
          window.open("CheckoutPage.php");
          console.log('Order saved successfully!');
        } 
        else {
          console.log('Error saving order!');
        }
      };
      
      xhr.send(JSON.stringify(orderItems));
      menuContainer.innerHTML = "";
      itemCounts = {};
      
    }
/*     var modeSwitch = document.querySelector('.mode-switch');
    modeSwitch.addEventListener('click', function () {                      
      document.documentElement.classList.toggle('light');
      modeSwitch.classList.toggle('active');
    }); */

    function checkcart(){
      $(document).ready(function () {
           
             
                $.ajax({
                    type: "GET",
                    url: "checkcart.php",
                    success: function (fetchresponse) {
                        if (fetchresponse === 'true') {
                            // Execute the fetch_order_items.php script
                            $.ajax({
                                type: "GET",
                                url: "getcart.php",
                              datatype: "json",
                                success: function (response) {
                                  var obj = JSON.parse(response);
                                 
   
              for (var i = 0; i < obj.length; i++) {
                
              
                console.log(response);
                addItem(obj[i].pname, obj[i].image, obj[i].id);
               
              }
                

                                },
                                error: function () {
                                    console.log("Error occurred while fetching order items.");
                                }
                            });
                        } else {
                            console.log("Value is null or ID not found.");
                        }
                    },
                    error: function () {
                      
                        console.log("Error occurred while checking the value.");
                    }
                });
          
        });
    }




    function setThemeFromSystem(e) {
  if (e.matches) {
      // The user's system prefers dark mode
      //give code for dark mode 
      document.documentElement.classList.remove('light');
  } else {
      // The user's system prefers light mode
      document.documentElement.classList.toggle('light');
  }
}

// Initialize theme based on system preference
setThemeFromSystem(window.matchMedia('(prefers-color-scheme: dark)'));

// Listen for changes in system preference
window.matchMedia('(prefers-color-scheme: dark)').addListener(setThemeFromSystem);

  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src='../DEPENDENCIES/Handlebars/node_modules/handlebars/dist/handlebars.min.js'></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <style>


.checkout-button {
  top: 655px;
  right: 30px;
  width: 400px;
  margin-top: auto;
  border-radius: 0 0 16px 16px;
  border: none;
  padding: 16px 8px;
  color: #fff;
  background-color: #141d2b;
  position: fixed;
  
  display: block;
  justify-content: center;
  transition: 0.2s linear;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 14px;
  line-height: 16px;
  -webkit-animation: listItems 0.6s 0.2s both;
          animation: listItems 0.6s 0.2s both;
}
.checkout-button:hover {
  background-color: #1a2639;
}
.checkout-button:before {
  content: "";
  display: inline-block;
  vertical-align: sub;
  width: 16px;
  height: 16px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus' viewBox='0 0 24 24'%3E%3Cpath d='M12 5v14M5 12h14'/%3E%3C/svg%3E%0A");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  margin-right: 4px;
}
 
.menu-items-container.show {
      display: block;
      
    }
   /* Style the menu button */
.menu-btn {
  position: fixed;
  top: 10px;
  right: 10px;
  z-index: 2;
  padding: 10px;
  background-color: #333;
  color: #fff;
  cursor: pointer;
}

/* Style the menu container */
.menu-container {
  padding: 1%;
  position: fixed;
  top: 50px;
  right: 30px;
  width: 400px;
  height: 650px;
  background-color: #29394f;;
  z-index: 1;
  display: none;
  border-radius: 24px;
  overflow-y: auto;
  -webkit-animation: listItems 0.6s 0.2s both;
          animation: listItems 0.6s 0.2s both;
 
}

/* Show the menu container when the button is clicked */
.menu-container.show {
  display: block;
}

.product-list {
  list-style-type: none;
  padding: 0;
}
.product-list-item {
  margin-bottom: 16px;
  background-color: #16263c;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-height: 100px;
  overflow: hidden;
  -webkit-animation: listItems 0.6s 0.2s both;
          animation: listItems 0.6s 0.2s both;
  transition: 0.2s linear;
  cursor: pointer;
}
.product-list-item:hover {
  background-color: #141d2b;
}
.product-list-itemContent {
  padding: 16px;
  display: flex;
  flex: 1;
  justify-content: space-between;
}

@-webkit-keyframes listItems {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes listItems {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
.product-img-wrapper {
  overflow: hidden;
  flex-shrink: 0;
  flex-basis: 120px;
  border-radius: 12px;
  height: 100%;
}
.product-img-wrapper:hover .product-image {
  transform: scale(1.1);
}

.product-image {
  width: 100%;
  height: auto;
  -o-object-fit: cover;
     object-fit: cover;
  transition: 0.2s linear;
}

.product-amount {
  font-size: 14px;
  line-height: 24px;
  color: #fff;
}
.product-amount-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.product-amount-button {
  background-color: transparent;
  border: none;
  padding: 0;
  color: #fff;
  height: 16px;
  cursor: pointer;
  transition: 0.2s linear;
}
.product-amount-button:hover {
  color: var(--main-color-2);
}
.product-amount-button svg {
  width: 16px;
  height: auto;
}

.remove-product {
  color: #fff;
  font-size: 12px;
}

.product-info-header {
  color: #fff;
  margin: 0 0 8px 0;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  max-width: 100%;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.product-info-subheader {
  font-size: 14px;
  line-height: 16px;
  color: #fff;
}
.product-info-subheader span {
  font-size: 12px;
  opacity: 0.75;
}

</style>

  



