{extends file="layout.tpl"}

{block name="localstyle"}
  <style>
  </style>
{/block}

{block name="content"}

<h2>Order #{$order->id}</h2>
{if $session->get('login') and $session->get('login')->is_admin}
<pre>
User: {$order->user->name}
Email: {$order->user->email}
</pre>
    
    {/if}
<table class="table table-hover table-sm">
    <tr>
    <th>product name</th>
    <th>id</th>
    <th>category</th>
      <th>purchase price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         {foreach $order->selections as $info}
          
      <tr>
        <td>{$info->product->name}</td>
        <td>{$info->product->id}</td>
        
        <td>{$info->product->category->name}</td>
        <td class="price">${number_format($info->purchase_price,2)}</td>
        <td>{$info->quantity}</td>
        <td>${number_format($info->purchase_price * $info->quantity,2)}</td>
      </tr>
     
    {/foreach}
    
</table>
<pre>
<b>Total = ${number_format($total_price,2)}</b>
</pre>
{if $session->get('login') and $session->get('login')->is_admin}
    {if {session_get_flash var='confirm'}}
        {form attrs=[ 'action'=>'user/deleteOrder']}
            <input type="hidden" name="idhid" value={$order->id}  />
            <input type='hidden' name='confirm' value='confirm' />
            <button type="submit" >Process</button>
            <button type="submit" name="cancel">Cancel</button>
            <h4 class="message">{session_get_flash var='message'}</h4>
        {/form}
        {else}
            {form attrs=[ 'action'=>'user/deleteOrder']}
            <input type="hidden" name="idhid" value={$order->id}  />
            <button type="submit" >Process</button>
            <h4 class="message">{session_get_flash var='message'}</h4>
        {/form}
        {/if}
    {/if}

{/block}