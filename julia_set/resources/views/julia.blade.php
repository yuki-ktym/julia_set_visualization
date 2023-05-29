<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>juliaset</title>
</head>

<body>
  <h1>Julia Set Drawing App</h1>
  <form action="{{ route('julia.generate') }}" method="GET">
    @csrf
    <label for="min_x">Min X:</label>
    <input type="text" name="min_x" id="min_x" value="0">

    <label for="max_x">Max X:</label>
    <input type="text" name="max_x" id="max_x" value="0">

    <label for="min_y">Min Y:</label>
    <input type="text" name="min_y" id="min_y" value="0">

    <label for="max_y">Max Y:</label>
    <input type="text" name="max_y" id="max_y" value="0">

    <label for="comp_const">Complex Constant:</label>
    <input type="text" name="comp_const" id="comp_const" value="0">

    <button type="submit">Generate Julia Set</button>

  </form>
  <canvas id="julia-canvas" width="800" height="600"></canvas>

  <script></script>
  <script src="/resources/js/julia/julia.js"></script>
</body>

</html>