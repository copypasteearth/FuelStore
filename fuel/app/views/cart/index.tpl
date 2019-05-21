{extends file="layout.tpl"}

{block name="content"}

  <h2>My Cart</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>name</th>
      <th>id</th>
      <th>category</th>
      <th>price</th>
      <th>quantity</th>
      <th>subtotal</th>
    </tr>

    {foreach $cart_info as $product_id => $data}
      <tr>
        <td>
          {html_anchor href="cart/show/{$product_id}" text="{$data['name']}"}
        </td>
        <td>{$product_id}</td>
        <td>{$data['category']}</td>
        <td>${number_format($data['price'],2)}</td>
        <td>{$data['amount']}</td>
        <td>${number_format($data['subtotal'],2)}</td>
      </tr>    
    {/foreach}
    <tr>
      <th>Total: <b>${$total_price|string_format: "%.2f"}</b></th>
    </tr>
  </table> 

  {if $session->get('login') && $session->get('cart')}
    {form attrs=[action => '/user/makeOrder', 'method'=>"GET"]}
      <button type='submit'>Make an Order from Cart</button>
    {/form}
  {/if}

{/block}
