<?php

class Model_Product extends \Orm\Model {
  
  protected static $_properties = [
      'id',
      'name',
      'price',
      'description',
      'photo_file',
      'category_id',
  ];
  
  protected static $_table_name = 'product';

  // use $product->category to get the category
  protected static $_belongs_to = [
    'category' => [
        'model_to' => 'Model_Category',
    ],
  ];
  
  // use $product->orders to get the orders of a product
  protected static $_many_many = [
      'orders' => [
          'model_to' => 'Model_Order',
          'table_through' => 'selection',
      ],
  ];
  
  // use $product->selections to the selections of a product
  protected static $_has_many = [
    'selections' => [
        'model_to' => 'Model_Selection',
    ]
  ];  
}
