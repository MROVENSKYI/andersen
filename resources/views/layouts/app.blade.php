<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">


$input = [4,12,73,8,1,1,36,7,6,22,22,22,3];
$input = array_count_values($input);
var_dump($input);
$func = fn(string $str) => $str
var_dump($func);
    @include('inc.messages')
  </div>
  @yield('content') 
</body>
</html> 