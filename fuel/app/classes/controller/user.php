<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_User extends Controller_Base {
    /**
     * 
     * description: this is the initial entry for my orders 
     */
    public function action_myOrders(){
        $login = Session::get('login');
        $user_id = $login->id;
        $orders = Model_Order::find('all',['where' => ['user_id' => $user_id]]);
        $data = [
        'orders' => $orders
         ];
    return View::forge('user/myorders.tpl', $data);
    }
    /**
     * 
     * @param type $order_id : id of order
     * description: this is an action to take the user to order details
     */
    public function action_orderDetails($order_id){
        $order = Model_Order::find($order_id);
        $selections = $order->selections;
        $total_price = 0;
        foreach($selections as $select){
            $total_price += $select->quantity * $select->purchase_price;
        }
        $data = [
        'order' => $order,
            'total_price' => $total_price
         ];
    return View::forge('user/orderdetails.tpl', $data);
    }
    /**
     * 
     * description: called when admin user clickes process order
     */
    public function action_deleteOrder(){
        $id = Input::param('idhid');
        $order = Model_Order::find($id);
        $confirm = Input::param('confirm');
        $cancel = Input::param('cancel');
        if(!is_null($cancel)){
            return Response::redirect("/adminOrder/allOrders");
            exit();
        }
        if(!is_null($confirm)){
            foreach($order->selections as $sel){
                $sel->delete();
            }
            $order->delete();
            Session::set_flash('message', "Order $id Successfully Processed");
            return Response::redirect("/adminOrder/allOrders");
        }else{
           Session::set_flash('message', 'Press Process again'); 
           Session::set_flash('confirm', 'confirm');
           return Response::redirect("/user/orderDetails/$id");
        }
        $selections = $order->selections;
        $total_price = 0;
        foreach($selections as $select){
            $total_price += $select->quantity * $select->purchase_price;
        }
        
        
        $data = [
        'order' => $order,
            'total_price' => $total_price
         ];
    return View::forge('user/orderdetails.tpl', $data);
        
    }
    /**
     * 
     * description: this action is called when the user makes and order from cart
     */
    public function action_makeOrder(){
        $user_id = Session::get('login')->id;
        $date = date("Y-m-d H:i:s", time());
        $order = Model_Order::forge();
        $order->user_id = $user_id;
        $order->created_at = $date;
        $order->save();
        $order_id = $order->id;
        $cart = Session::get('cart');
        foreach($cart as $key => $value){
            $product = Model_Product::find($key);
            $selection = Model_Selection::forge();
            $selection->product_id = $product->id;
            $selection->order_id = $order_id;
            $selection->quantity = $value;
            $selection->purchase_price = $product->price;
            $selection->save();
        }
        //unset($cart);
        //Session::set('cart',$cart);
        Session::delete('cart');
      return Response::redirect("/user/myOrders");
    }
}
