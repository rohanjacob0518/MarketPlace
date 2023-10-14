<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Checkout</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="CheckoutPage.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basket</title>
</head>

<body>
  <main>
    <div class="basket">
      <!-- <div class="basket-module">
        <label for="promo-code">Enter a promotional code</label>
        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Apply</button>
      </div> -->
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <?php
            $conn = mysqli_connect('localhost','root','','erdb');
            if(!$conn) {
              echo "Error";
              die($conn);
            }
            else{
              
              $sql = mysqli_query($conn,"SELECT * FROM `orders`");
              $orders=[];
              while ($row = mysqli_fetch_assoc($sql)) {
               
                $orders[] = $row;
              }
                  
                    foreach ($orders as $order) {
                      $orderName = $order['name'];
                    
                   
                
              
                      ?>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity"><?php echo $order['quantity'] ?> </span> <!-- MERCHANT --></strong><?php echo $orderName ?></h1>
            <p><strong>CATEGORY</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price"><?php echo $order['quantity'] ?></div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">4.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
      <?php
    }
                
                if(!$sql)
{
echo "ERROR";
}
else{
echo "Success";
}
            }
           
           ?>
      <!-- <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Amella Lace Midi Dress</h1>
            <p><strong>Navy, Size 10</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">26.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div> -->
    </div>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">0.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Select Collection or Delivery</option>
             <!-- <option value="collection">Collection</option>
             <option value="first-class">Royal Mail 1st Class</option>
             <option value="second-class">Royal Mail 2nd Class</option>
             <option value="signed-for">Royal Mail Special Delivery</option> -->
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">0.00</div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta">Go to Secure Checkout</button>
        </div>
      </div>
    </aside>
  </main>
</body>

</html>
<!-- partial -->
  <script src='../DEPENDENCIES/jQuery/node_modules/jquery/dist/jquery.min.js'></script><script  src="CheckoutPage.js"></script>

</body>
</html>
