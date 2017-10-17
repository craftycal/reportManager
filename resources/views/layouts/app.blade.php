<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Report Manager</title>
  <link rel="shortcut icon" type="image/png" href="..\resources\assets\img\RM_small.png">
  <link rel="stylesheet" href="css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Kreon|Muli" rel="stylesheet">
  <script type="text/javascript" src="js/app.js">
    
  </script>
  
</head>
<body>
  
  @include('inc.topBar')
  @include('inc.sideBar')
  
  
  @yield('content')
  
</body>
</html>