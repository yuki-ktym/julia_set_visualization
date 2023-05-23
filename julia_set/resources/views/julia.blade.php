<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Julia Set Parameters</h1>
  <form action="{{ route('julia.generate') }}" method="GET">
    <label for="min_x">Min X:</label>
    <input type="text" name="min_x" id="min_x">
    <br>

    <label for="max_x">Max X:</label>
    <input type="text" name="max_x" id="max_x">
    <br>

    <label for="min_y">Min Y:</label>
    <input type="text" name="min_y" id="min_y">
    <br>

    <label for="max_y">Max Y:</label>
    <input type="text" name="max_y" id="max_y">
    <br>

    <label for="comp_const">Complex Constant:</label>
    <input type="text" name="comp_const" id="comp_const">
    <br>

    <button type="submit">Generate Julia Set</button>
  </form>
  <canvas></canvas>
</body>

</html>