<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/julia/julia.css')  }}">
  <title>juliaset</title>
</head>

<body>
  <h1>Julia Set Drawing App</h1>
  <form action="{{ route('julia.generate') }}" method="GET">
    @csrf
    <label for="min_x">Min X:</label>
    <input type="text" name="min_x" id="min_x">

    <label for="max_x">Max X:</label>
    <input type="text" name="max_x" id="max_x">

    <label for="min_y">Min Y:</label>
    <input type="text" name="min_y" id="min_y">

    <label for="max_y">Max Y:</label>
    <input type="text" name="max_y" id="max_y">

    <label for="comp_const">複素定数:</label>
    <input type="text" name="comp_const" id="comp_const">

    <button type=" submit">SET</button>

  </form>

  <canvas id="julia-canvas" width="400" height="300"></canvas>

  <script>
    // PHPから受け取ったデータを取得
    var juliaSet = <?= !empty($juliaSet) ? json_encode($juliaSet) : '[]'; ?>;

    // キャンバスの要素を取得
    var canvas = document.getElementById("julia-canvas");
    var ctx = canvas.getContext("2d");

    // ジュリアセットの描画
    for (var i = 0; i < juliaSet.length; i++) {
      var data = juliaSet[i];
      var x = data.x;
      var y = data.y;
      var color = data.color;

      ctx.fillStyle = color;
      ctx.fillRect(x, y, 1, 1);
    }
  </script>
</body>

</html>