<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      {$page_title|default:{base_url|dirname|basename}}
    </title>

    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"  
          crossorigin="anonymous" />
    {asset_css refs=["layout.css"]}

  {block name="localstyle"}{/block}
  
  <script type="text/javascript">
     // for Safari browser, deal with back button
     window.onpageshow = function (event) {
       if (event.persisted) {
         window.location.reload();
       }
     };
  </script>
</head>
<body>     
  <header>
    <div>
      {asset_img refs="header.png" attrs=['class'=>'img-responsive']}
      <span class='login'>{$session->get('login')->name|default}</span>
    </div>

    <nav class="navbar navbar-dark bg-info navbar-expand-sm">

      {html_anchor href='/' text='Home' attrs=[ class=>"navbar-brand" ]}

      <button class="navbar-toggler navbar-toggler-icon" type="button" 
              data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
          {include file='links.tpl'}
        </ul>
      </div>
    </nav>    

  </header>

  <section class="container-fluid">{block name="content"}{/block}</section>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>  

  {block name="localscript"}{/block}
</body>
</html>
