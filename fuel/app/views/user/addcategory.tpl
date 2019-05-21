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
  <h2>Add Category</h2>
  <h5><b>Current Categories:</b></h5>
  
    <ul>
   {foreach $categories as $category}
          
       <li>{$category->name}</li>
     
    {/foreach}
    </ul>
  
    {form attrs=[action => '/admin/addCategoryReenterant']}
        <table class="table table-sm table-borderless">
            <tr>
        <th>category name:</th>
        <td><input class="form-control" type="text" name="cat" value="{$cat}" required />
        <span class="error">{$validator->error_message('cat')}</span></td>
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
      $("input[name='cat']").prop('disabled', true);
    });
   
  </script>
{/block}