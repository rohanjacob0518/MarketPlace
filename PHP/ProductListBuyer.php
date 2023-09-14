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
        <div class="sidebar-header">
          <div class="app-icon">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
          </div>
        </div>
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>Home</span>
            </a>
          </li>
          <li class="sidebar-list-item active">
          <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Products</span>
          </a>
          </li>
          <!-- <li class="sidebar-list-item">
          <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span>Statistics</span>
          </a>
          </li>
          <li class="sidebar-list-item">
          <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
          <span>Inbox</span>
          </a>
          </li>
          <li class="sidebar-list-item">
          <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span>Notifications</span>
          </a>
          </li> -->
        </ul>
      <div class="account-info">
        <div class="account-info-picture">
          <img src="" alt="Account">
        </div>
        <div class="account-info-name"><!-- Username here --> </div>
          <button class="account-info-more">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
          </button>
        </div>
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
              <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
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
            
            $conn = mysqli_connect('localhost','root','','erdb');
            if(!$conn) {
              echo "Error";
              die($conn);
            }
            else{
              $sql = mysqli_query($conn,"SELECT * FROM `products` ");  
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
              </span>₹560
            </div>
            <div class="add-product">
              <button class="app-content-headerButton" onclick="addItem(' <?php echo $row['pname'];?>','<?php echo $row['image'];?> ')">
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
    function toggleMenu() {

      var menuItemsContainer = document.getElementById("menu-items-container");
      menuItemsContainer.classList.toggle("show");

      var menu = document.getElementById("menu-container");

      menu.classList.toggle("show");
    
    }
    function addItem(item,img) {
  if (!itemCounts[item]) {
    itemCounts[item] = 1;


    const productListItem = document.createElement("li");
      productListItem.classList.add("product-list-item", "fadeIn");
      productListItem.innerHTML = `
        <div class="product-img-wrapper">
          <img class="product-image" src="${img}" />
        </div>
        <div class="product-list-itemContent">
          <div class="product-info">
            <h2 class="product-info-header">${item}</h2>
            <h7 class="remove-product"><button>remove</button></h7>
          </div>
          <div class="product-amount-wrapper">
            <button class="product-amount-button increase">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up" viewBox="0 0 24 24">
                <path d="M18 15l-6-6-6 6" />
              </svg>
            </button>
            <span class="product-amount">1</span>
            <button class="product-amount-button decrease">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down" viewBox="0 0 24 24">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>
        
          </div>
          
        </div>
      `;
      const productList = document.querySelector(".product-list");
      productList.appendChild(productListItem);

    var deleteButton = document.querySelectorAll(".remove-product");
    deleteButton.forEach(function (button) {
  button.addEventListener('click', function() {
    // Find the parent product-item element and remove it
    var productItem = button.closest(".product-list-item");
    if (productItem && productList.contains(productItem)) {
      productList.removeChild(productItem);
      delete itemCounts[item];
      console.log('Product deleted');
    }
  });
});
    /* deleteButton.addEventListener('click', function() {
      var closestitm=deleteButton.closest(".product-list-item")
      productList.removeChild(closestitm);
      delete itemCounts[item];
      console.log('deleted');

    }); */
    

  } else {
    itemCounts[item]++;
    var menuItem = getMenuItemsByName(item)[0];
    menuItem.querySelector('.quantity-counter').textContent = itemCounts[item].toString();
  }
}


const productList = document.querySelector(".product-list");
productList.addEventListener("click", function (event) {
  const button = event.target.closest(".product-amount-button");
  if (!button) return;

  const productAmountElement = button.parentNode.querySelector(".product-amount");
  let productAmount = parseInt(productAmountElement.textContent);

  if (button.classList.contains("increase")) {
    productAmount++;
  } else if (button.classList.contains("decrease")) {
    productAmount = Math.max(productAmount - 1, 1);
  }

  productAmountElement.textContent = productAmount;
  
});

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

  


