<?php
switch ($_POST['req']) 
{
  default:
    echo "INVALID REQUEST";
    break;

  case "add":
    if (is_numeric($_SESSION['cart'][$_POST['product_id']])) 
    {
      $_SESSION['cart'][$_POST['product_id']] ++;
    } else {
      $_SESSION['cart'][$_POST['product_id']] = 1;
    }
    echo "Item added to cart";
    break;

  case "count":
    $total = 0;
    if (count($_SESSION['cart'])>0) 
    {
      foreach ($_SESSION['cart'] as $id => $qty) 
      {
        $total += $qty;
      }
    }
    echo $total;
    break;

  case "show":
    $cartLib = new Cart();
    $products = $cartLib->details();

    $sub = 0;
    $total = 0; ?>
    <h1>MY CART</h1>
    <table id="cart-table">
      <tr>
        <th>Remove</th>
        <th>Qty</th>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php
      if (count($_SESSION['cart'])>0) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        $sub = $qty * $products[$id]['product_price'];
        $total += $sub; ?>
      <tr>
        <td>
          <input class="cart-remove" type="button" value="X" onclick="cart.remove(<?= $id ?>);"/>
        </td>
        <td><input id='qty_<?= $id ?>' onchange='cart.change(<?= $id ?>);' type='number' value='<?= $qty ?>'/></td>
        <td><?= $products[$id]['product_name'] ?></td>
        <td><?= sprintf("$%0.2f", $sub) ?></td>
      </tr>
      <?php }} else { ?>
      <tr><td colspan="3">Cart is empty</td></tr>
      <?php } ?>
      <tr>
        <td colspan="2"></td>
        <td><strong>Grand Total</strong></td>
        <td><strong><?= sprintf("$%0.2f", $total) ?></strong></td>
      </tr>
    </table>
    <?php if (count($_SESSION['cart']) > 0) { ?>
    <form id="cart-checkout" onsubmit="return cart.checkout();">
      <label>Name</label>
      <input type="text" id="co_name" required value="John Doe"/>
      <label>Email</label>
      <input type="email" id="co_email" required value="john@doe.com"/>
      <input type="submit" value="Checkout"/>
    </form>
    <?php }
    break;

  /* [CHANGE QTY] */
  case "change":
    if ($_POST['qty'] == 0) {
      unset($_SESSION['cart'][$_POST['product_id']]);
    } else {
      $_SESSION['cart'][$_POST['product_id']] = $_POST['qty'];
    }
    echo "Quantity updated";
    break;

  /* [CHECKOUT] */
  // @TODO
  // Beef up this section on your own!
  // There are no error & security checks in this simple example
  // You may also want to add more of your own checkout procedures here
  case "checkout":
    require PATH_MOD . "db.php";
    require PATH_MOD . "cart.php";
    $cartLib = new Cart();
    if ($cartLib->checkout($_POST['name'], $_POST['email'])) {
      $_SESSION['cart'] = [];
      echo "OK";
    } else {
      echo $cartLib->error;
    }
    break;

  /* [ALTERNATIVE CHECKOUT] */
  // This version sends an email to the customer on successful checkout
  case "checkout-email":
  require PATH_MOD . "db.php";
  require PATH_MOD . "cart.php";
    $cartLib = new Cart();
    if ($cartLib->checkout($_POST['name'], $_POST['email'])) {
      $_SESSION['cart'] = [];
      // @TODO
      // Format this email message as you see fit
      $order = $cartLib->get($cartLib->orderID);
      $to = $_POST['email'];
      $subject = "Order Received";
      $message = "";
      foreach ($order['items'] as $pid=>$p) {
        $message .= $p['product_name'] . " - " . $p['quantity'] . "<br>";
      }
      $headers = implode("\r\n", [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=utf-8',
        'From: john@doe.com'
      ]);
      echo @mail($to, $subject, $message, $headers) ? "OK" : "ERROR sending email!" ;
    } else {
      echo $cartLib->error;
    }
    break;
}
?>