<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
 ?>
 
 <head>
    <link rel="stylesheet" type="text/css" href="rss.css">
  </head>
  <body>
  
  <div id="container">
        <div id="header">
			  <div class="nav-menu">
				<li <?php if($load == 'create') {echo 'class="active"';} ?>><a href="index.php?page=create">Product</a></li>
			  </div>
		</div>
		<div id="content">
          <?php
          switch ($load) {
			      case 'create':
                require_once('form_create.php');
                break;
            default:
              require_once('index.php');
              break;
          }
           ?>
		</div>
  
    </div>
  </body>
