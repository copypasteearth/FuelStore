{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    td:first-child, th:first-child {
      width: 10px;
      white-space: nowrap;
    }
    .error { 
      color: red; font-size: 80%; font-weight:bold; 
    }
  </style>
{/block}

{block name="content"}
  
  <h2>Add Product</h2>
    {form attrs=[action => '/admin/addProductReenterant']}
        <table class="table table-sm table-borderless">
        <tr>
        <th>name:</th>
        <td><input class="form-control" type="text" name="name" value='{$name}' required />
        <span class="error">{$validator->error_message('name')}</span></td>
        </tr>
        <tr>
            <th>category:</th>
            <td>
                <select name="category_id">
      {html_options options=$categories selected=$category_id}
    </select>
            </td>
        </tr>
        <tr>
        <th>price ($):</th>
        <td><input class="form-control" type="number" name="price" min="0.00"  step="0.01" value='{$price}' required /></td>
        </tr>
        <tr>
        <th>desctiption:</th>
        <td><textarea class="form-control" name='textarea' rows='10' >{$textarea}</textarea>
        <span class="error">{$validator->error_message('textarea')}</span></td>
        </tr>
        <tr>
            <th>photo:</th>
            <td>
                <select name="photo_id">
      {html_options options=$photos selected=$photo_id}
    </select>
            </td>
        </tr>
        <tr>
      <td></td>
      <td>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
        </table>
    {/form}
  <h4 class="message">{session_get_flash var='message'}</h4>
  

{/block}

{block name="localscript"}
  <script  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='name']").prop('disabled', true);
      $("input[name='price']").prop('disabled', true);
      $("input[name='textarea']").prop('disabled', true);
    });
   
  </script>
{/block}