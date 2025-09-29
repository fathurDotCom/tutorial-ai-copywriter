<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Copywriter Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card shadow mx-auto" style="max-width:700px;">
      <div class="card-body p-4">
        <h4 class="mb-3">Produk: {{ $product }}</h4>
        <h5>Copywriting AI:</h5>
        <div class="border rounded p-3 bg-white" style="white-space: pre-wrap;">
          {!! nl2br(e($copy)) !!}
        </div>
        <a href="/" class="btn btn-outline-secondary mt-3">Coba Lagi</a>
      </div>
    </div>
  </div>
</body>
</html>
