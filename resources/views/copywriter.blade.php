<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>AI Copywriter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card shadow mx-auto" style="max-width:700px;">
      <div class="card-body p-4">
        <h3 class="mb-3">AI Copywriter untuk Produk Online</h3>
        <form action="/generate" method="POST">
          @csrf
          <div class="mb-3">
            <input type="text" name="product" class="form-control" placeholder="Contoh: Kopi Arabika Premium" required>
          </div>
          <button class="btn btn-primary">Generate Copy</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
