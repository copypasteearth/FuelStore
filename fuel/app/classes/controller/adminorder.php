<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_adminOrder extends Controller_Base {
    /**
     * 
     * description: this is the initial entry for the all orders page
     */
    public function action_allOrders(){
        $orders = Model_Order::find('all');
        $data = [
        'orders' => $orders
         ];
    return View::forge('user/allorders.tpl', $data);
    }
    
    /**
     * 
     * description: this is the reenterant function for modify product
     */
    public function action_modify(){
        $validator = Validators::modifyProductValidator();
        $add = Input::param('add');
        $cancel = Input::param('cancel');
        if(!is_null($cancel)){
            return Response::redirect("/");
        }
        if(!is_null($add)){
            $validated = $validator->run(Input::post());
      if ($validated) {
          $validData = $validator->validated();
        $id = $validData['id'];//Input::param('id');
        $product = Model_Product::find($id);
        $category_id = $validData['category_id'];//Input::param('category_id');
        $price = $validData['price'];//Input::param('price');
        $textarea = $validData['textarea'];//Input::param('textarea');
        $photos_dir = DOCROOT."assets/img/products/";
        $photoFiles = array_diff(scandir($photos_dir),[".",".."]);
        $photo_id = $validData['photo_id'];//Input::param('photo_id');
        $product->price = $price;
        $product->description = $textarea;
        $product->photo_file = $photoFiles[$photo_id];
        $product->category_id = $category_id;
        $product->save();
        return Response::redirect("/cart/show/$id");
      }
        }
        $id = Input::param('id');
        $product = Model_Product::find($id);
        $name = $product->name;
        $category_id = Input::param('category_id');
        $price = Input::param('price');
        $textarea = Input::param('textarea');
        $category_recs = Model_Category::find('all');
        $categories = [];
        $photo_id = null;
        foreach($category_recs as $rec) {
            
            $categories[$rec->id] = $rec->name;
        }
        $photos_dir = DOCROOT."assets/img/products/";
        $photoFiles = array_diff(scandir($photos_dir),[".",".."]);
        foreach($photoFiles as $key => $value){
    
            $product1 = Model_Product::find('first',['where' => ['photo_file' => $value]]);
         if(!is_null($product1)){
             if(!($product->photo_file == $value)){
                 unset($photoFiles[$key]);
              }else{
                 $photo_id = $key;
              }
        
             }else{
             if(is_null($photo_id) && $product->photo_file == $value){
                    $photo_id = $key;
        
                 }
             }
            }
            $photo_id = Input::param('photo_id');
             $data = [
    'id' => $id,
    'categories' => $categories,
    'name' => $product->name,
    'category_id' => $category_id,
    'price' => $price,
    'textarea' => $textarea,
    'photo_id' => $photo_id,
    'photos' => $photoFiles
        //'selected_photo' => $selectedPhoto
];
            $view =  View::forge('user/modifyproduct.tpl', $data);
            $view->set_safe('validator', $validator);
            return $view;
    }
    /**
     * 
     * description: this is the initial entry for modify product
     */
    public function action_modifyProduct(){
        $validator = Validators::modifyProductValidator();
        $id = Input::param('id');
        $product = Model_Product::find($id);
        $category_id = $product->category_id;
        $category_recs = Model_Category::find('all');
        $categories = [];
        $photo_id = null;
        foreach($category_recs as $rec) {
            if(is_null($category_id)){
                $category_id = $product->category_id;
            }
            $categories[$rec->id] = $rec->name;
        }
        $textarea = $product->description;
        $price = $product->price;
        
        $photos_dir = DOCROOT."assets/img/products/";
        $photoFiles = array_diff(scandir($photos_dir),[".",".."]);
        //return var_dump($photoFiles);
        foreach($photoFiles as $key => $value){
    
            $product1 = Model_Product::find('first',['where' => ['photo_file' => $value]]);
         if(!is_null($product1)){
             if(!($product->photo_file == $value)){
                 unset($photoFiles[$key]);
              }else{
                 $photo_id = $key;
              }
        
             }else{
             if(is_null($photo_id) && $product->photo_file == $value){
                    $photo_id = $key;
        
                 }
             }
            }
            
            $data = [
    'id' => $id,
    'categories' => $categories,
    'name' => $product->name,
    'category_id' => $category_id,
    'price' => $price,
    'textarea' => $textarea,
    'photo_id' => $photo_id,
    'photos' => $photoFiles
        //'selected_photo' => $selectedPhoto
];
            $view =  View::forge('user/modifyproduct.tpl', $data);
            $view->set_safe('validator', $validator);
            return $view;
    }
}
