{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">

  </style>
{/block}

{block name="content"}

  <h2>Products</h2>
  
  {form attrs=['method'=>'GET', 'action'=>'home/setCategory']}
  <button type="submit">Choose category:</button>
  <select name='category_id'>
    {html_options options=$categories selected=$category_id}
  </select>
  {/form}
  <p></p>

  <table class="table table-hover table-sm">
    <tr>
      <th>
        {html_anchor href="/home/name/name" text="name"}
      </th>
      <th class="price">
        {html_anchor href="/home/price/price" text="price"}
      </th>
      <th>category</th>
    </tr>
    {foreach $products as $product}
      <tr>
        <td>
          {html_anchor href="/cart/show/{$product->id}" text="{$product->name}"}            
        </td>
        <td class="price">${number_format($product->price,2)}</td>
        <td>{$product->category->name}</td>
      </tr>
    {/foreach}
  </table>

{/block}
