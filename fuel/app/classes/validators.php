<?php

class Validators {
  
   /**
     * 
     * @return type validator
     * description: this function returns a category validator
     */
    public static function categoryValidator(){
        $validator = Validation::forge();
        $isUnique = function($title) {
      $bookWithTitle = Model_Category::find('first', [
              'where' => [
                  [ 'name', $title ]
              ]
      ]);
      return is_null($bookWithTitle);      
    };
    $validator->add('cat', 'cat')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule(['unique' => $isUnique])
    ;
        return $validator;
    }
    /**
     * 
     * description: this function returns a validator for the add product page
     */
    public static function addProductValidator(){
        require_once PKGPATH . "htmLawed.php";
        $check_valid_html = function($text) {
      $out_text = htmLawed($text); 
      return ($out_text === $text);
    };
    $isUnique = function($title) {
      $bookWithTitle = Model_Product::find('first', [
              'where' => [
                  [ 'name', $title ]
              ]
      ]);
      return is_null($bookWithTitle);      
    };
        $validator = Validation::forge();
        $validator->add('name', 'name') // field, label
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
                ->add_rule(['unique' => $isUnique])
    ;
        $validator->add('textarea', 'textarea')
        ->add_rule(['valid_html' => $check_valid_html])
    ;
        $validator->add('price','price');
        $validator->add('photo_id','photo_id');
        $validator->add('category_id','category_id');
    $validator
        ->set_message('valid_html', 'html is invalid')
    ;
        return $validator;
    }
    /**
     * 
     * description: this returns a validator for validating the modify product fields
     */
    public static function modifyProductValidator() {
        require_once PKGPATH . "htmLawed.php";
        $check_valid_html = function($text) {
      $out_text = htmLawed($text); 
      return ($out_text === $text);
    };
    $validator = Validation::forge();
    $validator->add('textarea', 'textarea')
        ->add_rule(['valid_html' => $check_valid_html])
    ;
    $validator
        ->set_message('valid_html', 'html is invalid')
    ;
    $validator->add('category_id','category_id');
    $validator->add('price','price');
    $validator->add('photo_id','photo_id');
    $validator->add('id','id');
    $validator->add('add','add');
    $validator->add('cancel','cancel');
 
    return $validator;
        
    }
    /**
     * 
     * description: this function returns a validator for the form in creating a user
     */
    public static function userValidator(){
        $validator = Validation::forge();
        $isUnique = function($title) {
      $bookWithTitle = Model_User::find('first', [
              'where' => [
                  [ 'name', $title ]
              ]
      ]);
      return is_null($bookWithTitle);      
    };
        $validator->add('username', 'username') // field, label
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule(['unique' => $isUnique])
        ->add_rule('min_length', 3)
    ;
        $validator->add('password', 'password')
        ->add_rule('trim')
        ->add_rule('required')
        ->add_rule('min_length', 3)
    ;
    $validator->add('confirmpassword', 'confirmpassword')
        ->add_rule('required')
        ->add_rule('match_field', 'password') // nust match the pwd field
    ;
    $validator->add('email','email');
    $validator->add('create','create');
    $validator->add('cancel','cancel');
        return $validator;
    }
}
