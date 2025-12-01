<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>

  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet">

  <style>
    body {
      background-color: #f9f5ff;
    }
    .navbar {
      background-color: #6f42c1 !important;
    }
    .btn-custom {
      background-color: #ffc107;
      color: #4a148c;
      font-weight: bold;
    }
    .btn-custom:hover {
      background-color: #ffda47;
      color: #4a148c;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">💜 KSI2025</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="tabel_mahasiswa.html">tabel mahasiswa</a></li>
          <li class="nav-item"><a class="nav-link" href="input_data.html">input data</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container py-5">
    <h1 class="text-center fw-bold text-purple mb-4">Form Input Mahasiswa</h1>

    <div class="card shadow border-0 p-4 mx-auto" style="max-width: 600px;">
      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
        </div>

        <div class="mb-3">
          <label for="nim" class="form-label">NPM</label>
          <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
        </div>

        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <select id="kelas" class="form-select">
            <option selected>Pilih Kelas</option>
            <option value="KSI2025A">KSI2025A</option>
            <option value="KSI2025B">KSI2025B</option>
            <option value="KSI2025B">KSI2025C</option>
          </select>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-custom px-4 me-2">Simpan</button>
          <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="text-center text-white py-3 mt-5" style="background-color:#6f42c1;">
    © 2025 KSI2025 | Form Input Data
  </footer>

</body>
</html>
