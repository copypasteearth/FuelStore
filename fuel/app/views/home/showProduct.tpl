{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    table.info td:first-child, table.info th:first-child {
      white-space: nowrap;
      width: 10px;
    }
    table.info th, table.info td {
      line-height: 10px;
    }
    input {
      width: 5em;
    }
  </style>
{/block}

{block name="content"}
  <h2>Show Product</h2>

  <table class='info table table-sm table-borderless'>
    <tr>
      <th colspan="2">{$product->name}</th>
    </tr>
    <tr>
      <td>product id:</td>
      <td>{$product->id}</td>
    </tr>
    <tr>
      <td>price:</td>
      <td>${number_format($product->price,2)}</td>
    </tr>
    <tr>
      <td>category:</td>
      <td>{$product->category->name}</td>
    </tr>
  </table>
  <table class='table-sm'>
    <tr>
      <td>  
        {asset_img refs=$image_src attrs=['class' => 'img-fluid']}
      </td>
      <td>
{if $session->get('login') and $session->get('login')->is_admin}
              {form attrs=['action' => '/adminOrder/modifyProduct']}
          <button type="submit" name='modify'>Modify</button>
          <input type="hidden" name='id' value={$product->id} />
        {/form}
              
              {else}
        {form attrs=[action=>"cart/setCart", method=>"get"]}
          <b>Quantity:</b>
          <input name="quantity" type="number" min="1" value="{$quantity}" required />
          <input name="id" type="hidden" value="{$product->id}" />
          <p></p>
          <button type="submit" name='set'>Set Quantity</button>
          <button type="submit" name='cancel'>Cancel</button>
          <button type="submit" name='remove'>Remove From Cart</button>
        {/form}
{/if}
      </td>
    </tr>
  </table>
  <p>
    {$description}  
  </p>
{/block}


{block name="localscript"}
  <script  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
    $("button[name='remove']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
  </script>
{/block}
