<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_admin extends Controller_Base {
   
    /**
     * 
     * description: this is the initial entry for creating a new category
     */
    public function action_addCategory(){
        $categories = Model_Category::find('all'); 
        $data = [
  'categories' => $categories,
            'cat' => null
];
        $validator = Validators::categoryValidator();
        $view = View::forge("user/addcategory.tpl",$data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    /**
     * 
     * description: this function is for the reentrant of the add category page
     */
    public function action_addCategoryReenterant(){
        $cancel = Input::param('cancel');
        if(!is_null($cancel)){
            return Response::redirect("/");
        }
        $validator = Validators::categoryValidator();
        $validated = $validator->run(Input::post());
            if($validated){
                $validData = $validator->validated();
                $category = Model_Category::forge();
                $category->name = $validData['cat'];
                $category->save();
                return Response::redirect("/");
            }
            $categories = Model_Category::find('all'); 
        $data = [
  'categories' => $categories,
                'cat' => Input::param('cat')
];
        
        $view = View::forge("user/addcategory.tpl",$data);
        $view->set_safe('validator', $validator);
        return $view;
        
    }
    /**
     * 
     * description:this is the initial entry of the add product page
     */
    public function action_addProduct(){
        $category_recs = Model_Category::find('all');
        $categories = [];
        $photo_id = null;
        foreach($category_recs as $rec) {
            
            $categories[$rec->id] = $rec->name;
        }
        $photos_dir = "assets/img/products/";
        $photoFiles = array_diff(scandir($photos_dir),[".",".."]);
        foreach($photoFiles as $key => $value){
    
            $product1 = Model_Product::find('first',['where' => ['photo_file' => $value]]);
         if(!is_null($product1)){
            
                 unset($photoFiles[$key]);
             
        
             }
            }
            $data = [
 'categories' => $categories,
        'photos' => $photoFiles,
        'textarea' => null,
    'name' => null,
    'price' => null,
        'photo_id' => null,
        'category_id' => null
       
        
];
            $validator = Validators::addProductValidator();
          $view = View::forge("user/addproduct.tpl",$data);
          $view->set_safe('validator', $validator);
          return $view;
    }
    
    /**
     * 
     * description: the reentrant action for adding a product
     */
    public function action_addProductReenterant(){
        $cancel = Input::param('cancel');
        $add = Input::param('add');
        $validator = Validators::addProductValidator();
        $photos_dir = DOCROOT."assets/img/products/";
        $photoFiles = array_diff(scandir($photos_dir),[".",".."]);
        if(!is_null($cancel)){
            return Response::redirect("/");
        }
        if(!is_null($add)){
            $validated = $validator->run(Input::post());
            if($validated){
                $validData = $validator->validated();
                $product = Model_Product::forge();
                $product->name = $validData['name'];
                $product->price = $validData['price'];
                $product->description = $validData['textarea'];
                $product->photo_file = $photoFiles[$validData['photo_id']];
                $product->category_id = $validData['category_id'];
                $product->save();
                $prod_id = $product->id;
                return Response::redirect("/cart/show/$prod_id");
                     
            }
        }
        $category_recs = Model_Category::find('all');
        $categories = [];
        $photo_id = null;
        foreach($category_recs as $rec) {
            
            $categories[$rec->id] = $rec->name;
        }
        
        foreach($photoFiles as $key => $value){
    
            $product1 = Model_Product::find('first',['where' => ['photo_file' => $value]]);
         if(!is_null($product1)){
            
                 unset($photoFiles[$key]);
             
        
             }
            }
        $data = [
 'categories' => $categories,
        'photos' => $photoFiles,
        'textarea' => Input::param('textarea'),
    'name' => Input::param('name'),
    'price' => Input::param('price'),
        'photo_id' => Input::param('photo_id'),
        'category_id' => Input::param('category_id')
       
        
];
            
          $view = View::forge("user/addproduct.tpl",$data);
          $view->set_safe('validator', $validator);
          return $view;
    }
}

