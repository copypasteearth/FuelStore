<?php

class Model_Order extends \Orm\Model {
  
  protected static $_table_name = 'order';
  
  protected static $_properties = [
      'id',
      'user_id',
      'created_at',
  ];

  // use $order->products to get the products of the order
  protected static $_many_many = [
    'products' => [
       'model_to' => 'Model_Product',
       'table_through' => 'selection',
    ],
  ];
  
  // use $order->user to get the user of the order
  protected static $_belongs_to = [
    'user' => [
        'model_to' => 'Model_User',
    ]
  ];
  
  // use $order->selections to get the selections 
  // the cascade_delete is there to prevent an error message
  // on deleting the selections of an order
  protected static $_has_many = [
    'selections' => [
       'model_to' => 'Model_Selection',
       'cascade_delete'=> true,
    ]
  ];  
  
  // sets the created_at field to current timestamp, unless set manually
  protected static $_observers = [
      'Orm\Observer_CreatedAt' => [
         'events' => ['before_insert'],
         'mysql_timestamp' => true,
         'property' => 'created_at',
         'overwrite' => false,
     ],
  ];
}
