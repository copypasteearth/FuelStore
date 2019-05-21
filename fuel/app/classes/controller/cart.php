<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_Cart extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('cart'))) {
      Session::set('cart', []);
    }
  }
  /**
   * 
   * description: action when setting,removing,or cancelling show product page
   */
  public function action_setCart(){
      $set = Input::param('set');
      $cancel = Input::param('cancel');
      $remove = Input::param('remove');
      $quantity = Input::param('quantity');
      $id = Input::param('id');
      if(!is_null($set)){
          $cart = Session::get('cart');
          $cart[$id] = $quantity;
          Session::set('cart',$cart);
          return Response::redirect("/Cart/index");
      }
      if(!is_null($cancel)){
          return Response::redirect("/");
      }
      if(!is_null($remove)){
          $cart = Session::get('cart');
          unset($cart[$id]);
          Session::set('cart',$cart);
          return Response::redirect("/Cart/index");
          
      }
      
  }
  /**
   * 
   * @param type $product_id : id of product to be shown
   * description: this is called when the user selects a product to be shown
   */
  public function action_show($product_id) {
      $quantity = null;
      if(isset(Session::get('cart')[$product_id])){
          $quantity = Session::get('cart')[$product_id];
      }
    
    $product = Model_Product::find($product_id);
    $image_src = "products/$product->photo_file";
    $data = [
        'product' => $product,
        'image_src' => $image_src,
        'quantity' => $quantity
    ];
    $view = View::forge('home/showProduct.tpl', $data);
    $view->set_safe('description', $product->description);
    return $view;
  }
/**
 * 
 * description: called as the initial entry to cart page
 */
  public function action_index() {
	//total price, adds up all products in cart
$total_price = 0;
//cart info stores all of the products and details returned to view
$cart_info = [];
foreach (Session::get('cart') as $key => $value) {
    $id = $key;
    $product = Model_Product::find($key);//R::findOne("product", "id=?",[$key]);
    //$category = //R::findOne("category", "id=?",[$product->category_id]);
    $cat_name = $product->category->name;//$category->name;
    $quantity = $value;
    $name = $product->name;
    $price = $product->price;
    $subtotal = $quantity * $price;
    $cart_info[$id] = [
        'name' => $name,
        'category' => $cat_name,
        'price' => $price,
        'amount' => $quantity,
        'subtotal' => $subtotal
    ];
    $total_price += $price * $quantity;
    //echo "<script>console.log( 'Debug Objects: " . $product . "' );</script>";
}

$data = [
    'cart_info' => $cart_info,
    'total_price' => $total_price,
];
$view = View::forge('cart/index.tpl', $data);
return $view;
  }

  public function action_something() {
    return "cart/something";
  }

}
