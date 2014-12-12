<?php 
include_once 'config/config.php';;
?>
<!doctype html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="utf-8">
  <title>My AngularJS App</title>
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
   <!-- Optional theme -->
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/app.css"/>
</head>
<body>
  <!-- Fixed navbar -->
    <div role="navigation" class="navbar my-navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         
        </div>
        <div class="my-top-nav">
        <div class='my-pills-overlay'></div>
          <ul class="nav  nav-pills my-pills">
           <?php foreach($nav_array as $key => $nav_item):
            $text = isset( $nav_item['text']) ? $nav_item['text'] : $key;
            $href = isset( $nav_item['href']) ? $nav_item['href'] : $key;
            $href = '#' . $href;
           ?>
           		<li class='nav-item' id='nav-item-<?php echo $key;?>'><a href='<?php echo $href;?>'><?php echo $text;?></a></li>
           <?php endforeach;?>
           		
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div ng-view></div>

  <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
  -->
  <script src="lib/angular/angular.js"></script>
  <script src="js/app.js"></script>
  <script src="js/services.js"></script>
  <script src="js/controllers.js"></script>
  <script src="js/filters.js"></script>
  <script src="js/directives.js"></script>
</body>
</html>
