<!DOCTYPE html>
<html>
  <head>
    <title>Example 01 - Simple Shop</title>
  </head>
  <body>
    <h1>This shop has the following items</h1>
    <ul>
      <?php
        // product-service-01 must be identical to the service's name
        $json = file_get_contents('http://product-service-01');
        $obj  = json_decode($json);

        $products = $obj->products;
        foreach ($products as $product) {
          echo "<li>$product</li>";
        }
      ?>
    </ul>
  </body>
</html>
