{extends file="layout.tpl"}

{block name="localstyle"}
  <style type='text/css'>
    td:first-child, th:first-child {
      white-space: nowrap;
      width: 10px;
    }
    .error { 
      color: red; font-size: 80%; font-weight:bold; 
    }
  </style>
{/block}

{block name="content"}
  <h2>Create an Account</h2>

 
  {form attrs=['action' => '/newuser/userValidate']}
  <table class="table table-sm table-borderless">
    <tr>
      <td>name:</td>
      <td><input class="form-control" type="text" name="username" 
                 value="{$username}" /><span class="error">{$validator->error_message('username')}</span></td>
    </tr>
    <tr>
      <td>email:</td>
      <td><input class="form-control" type="email" name="email" 
                 value="{$email}" required /></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input class="form-control" type="password" name="password" /><span class="error">{$validator->error_message('password')}</span></td>
    </tr>
    <tr>
      <td>confirm:</td>
      <td><input class="form-control" type="password" name="confirmpassword" /><span class="error">{$validator->error_message('confirmpassword')}</span></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="create">Create</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
  </table>  
  {/form}

  <h4 class="message">{session_get_flash var='message'}</h4>
{/block}