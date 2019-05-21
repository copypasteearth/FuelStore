<?php

class Model_Selection extends \Orm\Model {
  
  protected static $_table_name = 'selection';
  
  protected static $_properties = [
      'id',
      'product_id',
      'order_id',
      'quantity',
	  'purchase_price',
  ];

  // use $selection->product to get the product that owns this selection
  // use $selection->order to get the order that owns this selection
  protected static $_belongs_to = [
    'product' => [
        'model_to' => 'Model_Product',
    ],
    'order' => [
        'model_to' => 'Model_Order',
    ]
  ];
}
