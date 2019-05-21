<?php

namespace Fuel\Tasks;

use Model_Category;
use Model_Order;
use Model_User;
use Model_Selection;
use Model_Product;
use Exception;

class PopulateTables {

  public static function run() {

    echo "\n---- users\n";

    $user_data = [
        ["john", "arachnid@oracle.com", "john"],
        ["kirsten", "buffalo@go.com", "kirsten"],
        ["bill", "digger@gmail.com", "bill"],
        ["mary", "elephant@wcupa.edu", "mary"],
        ["joan", "kangaroo@upenn.edu", "joan"],
        ["alice", "feline@yahoo.com", "alice"],
        ["carla", "badger@esu.edu", "carla"],
        ["dave", "warthog@temple.edu", "dave"],
    ];

    foreach ($user_data as $data) {
      list($name, $email, $password) = $data;
      $user = Model_User::forge();
      $user->name = $name;
      $user->email = $email;
      $user->password = hash('sha256', $password);
      $user->save();
      echo "user $user->id: $name\n";
    }

    echo "\n---- admins\n";

    foreach (['dave', 'carla'] as $name) {
      $user = Model_User::find('first', [
              'where' => ['name' => $name],
      ]);
      $user->is_admin = true;
      $user->save();
      echo "admin: $name\n";
    }

    require_once __DIR__ . "/product_data.php";

    echo "\n---- categories\n";

    $category_names = [];

    foreach ($product_data as $data) {
      $category_names[$data['category']] = 1;
    }

    foreach (array_keys($category_names) as $name) {
      $category = Model_Category::forge();
      $category->name = $name;
      $category->save();
      echo "$category->id: $name\n";
    }

    $photos_dir = DOCROOT . "public/assets/img/products";

    $descriptions_dir = __DIR__ . "/descriptions";

    echo "\n---- products\n\n";

    $products = [];

    foreach ($product_data as $data) {
      $name = $data['name'];
      $category_name = $data['category'];
      $price = $data['price'];
      $photo_file = $data['photo_file'];
      $description_file = $data['description_file'];

      //$category = R::findOne('category', 'name = ?', [$category_name]);

      $category = Model_Category::find('first', [
              'where' => [['name', $category_name]],
      ]);

      echo "product name: $name\n";
      
      $file = "$photos_dir/$photo_file";
      if (!file_exists($file)) {
        throw new Exception("missing photo file: $file");
      }

      $file = "$descriptions_dir/$description_file";
      if (file_exists($file)) {
        $description = file_get_contents($file);
      }
      else {
        echo "---- missing description, set to empty\n";
        $description = "";
      }

      $product = Model_Product::forge();

      $product->photo_file = $photo_file;
      $product->name = $name;
      $product->category_id = $category->id;
      $product->price = $price;
      $product->description = $description;
      $product->save();

      echo "---- product added with id: $product->id\n";

      $products[$product->id] = $product;
    }

    echo "\n---- orders\n";

    define("SECONDS_PER_DAY", 3600 * 24);

    function randTimeNdaysPast($days) {
      $timestamp = time() - $days * SECONDS_PER_DAY + rand(0, SECONDS_PER_DAY);
      return date("Y-m-d H:i:s", $timestamp);
    }

    function makeOrder($user, $ndays, $productQuant) {
      $order = Model_Order::forge();
      $order->user_id = $user->id;
      $order->created_at = randTimeNdaysPast($ndays);
      $order->save();
      echo "\nby $user->name on $order->created_at\n";
      foreach ($productQuant as $arr) {
        list($product, $quantity) = $arr;
        echo " #$product->id: $product->name ($quantity)\n";
        $item = Model_Selection::forge();
        $item->order = $order;
        $item->product = $product;
        $item->quantity = $quantity;
        $item->purchase_price = $product->price;
        $item->save();
      }
    }

    $alice = Model_User::find('first', [
            'where' => [['name', 'alice']],
    ]);
    $john = Model_User::find('first', [
            'where' => [['name', 'john']],
    ]);
    $bill = Model_User::find('first', [
            'where' => [['name', 'bill']],
    ]);

    $ndays = 7;

    makeOrder($alice, $ndays--, [
        [$products[1], 2],
        [$products[5], 3],
    ]);

    makeOrder($alice, $ndays--, [
        [$products[12], 1],
        [$products[8], 4],
    ]);

    makeOrder($bill, $ndays--, [
        [$products[2], 5],
        [$products[6], 2],
    ]);

    makeOrder($alice, $ndays--, [
        [$products[3], 3],
        [$products[11], 1],
    ]);

    makeOrder($bill, $ndays--, [
        [$products[1], 3],
        [$products[3], 3],
        [$products[5], 1],
        [$products[6], 2],
    ]);
  }

}
