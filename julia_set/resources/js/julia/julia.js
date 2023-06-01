const canvas = document.getElementById('julia-canvas');
const ctx = canvas.getContext('2d');

// フォームの送信イベントをハンドリング
const form = document.querySelector('form');
form.addEventListener('submit', function (event) {
  event.preventDefault(); // フォームのデフォルトの送信を防止

  // 入力値の取得
  const min_x = document.getElementById('min_x').value;
  const max_x = document.getElementById('max_x').value;
  const min_y = document.getElementById('min_y').value;
  const max_y = document.getElementById('max_y').value;
  const comp_const = document.getElementById('comp_const').value;

  // リクエストを送信してジュリア集合を取得
  fetch('/julia', {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
    },
    body: JSON.stringify({
      min_x,
      max_x,
      min_y,
      max_y,
      comp_const
    }),
  }).then(response => response.json())
    .then(data => {
      // ジュリア集合を描画
      drawJuliaSet(data.juliaSet);
    })
    .catch(error => {
      console.error('Error:', error);
    });
});

// ジュリア集合を描画する関数
function drawJuliaSet(juliaSet) {
  const imageData = ctx.createImageData(canvas.width, canvas.height);

  // imageDataにピクセルデータをセット
  for (let y = 0; y < canvas.height; y++) {
    for (let x = 0; x < canvas.width; x++) {
      const index = (y * canvas.width + x) * 4;
      const color = juliaSet[y][x];

      imageData.data[index] = color.red;
      imageData.data[index + 1] = color.green;
      imageData.data[index + 2] = color.blue;
      imageData.data[index + 3] = 255; // アルファ値
    }
  }

  // canvasに描画
  ctx.putImageData(imageData, 0, 0);
}
