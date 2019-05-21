<?php

class Model_Category extends \Orm\Model {

  protected static $_table_name = 'category';
  
  protected static $_properties = [
      'id',
      'name',
  ];
  
  // use $category->products to get the products with this category
  protected static $_has_many = [
      'products' => [
          'model_to' => 'Model_Product',
      ]
  ];
}
