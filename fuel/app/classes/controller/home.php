<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_Home extends Controller_Base {

  public function before() {
    parent::before();
    if (is_null(Session::get('field'))) {
      Session::set('field','name');
    }
    if (is_null(Session::get('category'))) {
      Session::set('category',0);
    }
    
  }
  /**
   * 
   * @param type $name : 'name'
   * description: called when the user clicks on the name link in the home page
   *              to set the ordering of products to name
   */
  public function action_name($name){
      Session::set('field',$name);
      return Response::redirect("/");
  }
  /**
   * 
   * @param type $price
   * description: called when the user clicks on the price link in the home page
   *              to set the ordering of products by price
   */
  public function action_price($price){
      Session::set('field',$price);
      return Response::redirect("/");
  }
  public function action_something() {
    return "home/something";
  }
  /**
   * 
   * description: called when the user sets a category in the home page
   */
  public function action_setCategory(){
      $category_id = Input::param('category_id');
      if(is_null($category_id)){
          $category_id = 0;
      }
      Session::set('category',$category_id);
      return Response::redirect("/");
  }
  /**
   * 
   * description: this is the initial entry to the home page
   */
  public function action_index() {
    $categories[0] = "-- ALL --";
    foreach (Model_Category::find('all') as $rec) {
      $categories[$rec->id] = $rec->name;
    }
    $category_id = Session::get('category');
    $field = Session::get('field');
    if($category_id == 0){
        $products = Model_Product::find('all',['order_by' => [$field]]);
    }else{
        $products = Model_Product::find('all',['where' => ['category_id' => $category_id],'order_by' => [$field]]);
    }
    

    $data = [
        'products' => $products,
        'categories' => $categories,
        'category_id' => $category_id,
    ];
    return View::forge('home/index.tpl', $data);
  }

}
