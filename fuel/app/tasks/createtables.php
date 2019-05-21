<?php

namespace Fuel\Tasks;

use Fuel\Core\Config;
use PDO;

class CreateTables {

  public static function run() {

    $PRODUCT_TABLE = \Model_Product::table();
    $USER_TABLE = \Model_User::table();
    $SELECTION_TABLE = \Model_Selection::table();
    $ORDER_TABLE = \Model_Order::table();
    $CATEGORY_TABLE = \Model_Category::table();

    Config::load('development/db.php');

    $which = Config::get('which');
    echo "---- database: $which\n\n";

    if ($which == "sqlite") {
      self::initSQLite();
    }

    $dsn = Config::get("default.connection.dsn");
    $username = Config::get("default.connection.username");
    $password = Config::get("default.connection.password");

    $cx = new PDO($dsn, $username, $password);
    $cx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $createOrder = [
        $USER_TABLE, $CATEGORY_TABLE,
        $PRODUCT_TABLE, $ORDER_TABLE, $SELECTION_TABLE,
    ];
    $dropOrder = array_reverse($createOrder);

    foreach ($dropOrder as $table) {
      $sql = "drop table if exists `$table`";
      echo "$sql\n";
      $cx->prepare($sql)->execute();
    }

    foreach ($createOrder as $table) {
      $sql = file_get_contents(__DIR__ . "/tables/$table-$which.sql");
      echo "$sql\n";
      $cx->prepare($sql)->execute();
    }
  }

  private static function initSQLite() {
    $dir = APPPATH . 'database';
    if (!is_dir($dir)) {
      mkdir($dir);
      chmod($dir, 0777);
    }
    $database = "$dir/db.sqlite";
    if (!is_file($database)) {
      touch($database);
      chmod($database, 0666);
    }
  }

}
