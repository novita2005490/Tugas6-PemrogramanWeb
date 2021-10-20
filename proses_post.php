<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Form Pendaftaran</title>
  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-2 col-lg-2 me-0 px-0" href="#">
        <img src="dishub.png" alt="" width="25" height="30" class="d-inline-block align-text-center">
        <font style="font-family: 'Times New Roman', Times, serif; font-size: 25px; font-weight: bolder;" > DIRJEN DISHUB KELAUTAN </font>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">
        
        </a>
      </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-0 col-lg-2 d-md-block bg-dark sidebar collapse">
        <div class="position-sticky pt-3 px-3 bg-dark">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color: white;">
                <span data-feather="home"></span>
                Pendaftaran Kapal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">
                <span data-feather="file"></span>
                Monitoring Pengajuan Akta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">
                <span data-feather="shopping-cart"></span>
                Pengajuan Direvisi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">
                <span data-feather="users"></span>
                Jadwal Tanda Tangan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">
                <span data-feather="bar-chart-2"></span>
                Pengajuan Ditolak
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">
                <span data-feather="layers"></span>
                Berita Acara Pemasangan
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">
                  <span data-feather="layers"></span>
                  Review Akta
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">
                  <span data-feather="layers"></span>
                  Laporan Pendaftaran Kapal
                </a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Pendaftaran Kapal</h1>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Permohonan Akta Pendaftaran</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" ><hr>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputnama" class="form-label">Nama Pemohon</label>
                <input type="text" name="nama" class="form-control" id="nama" value="">
              </div>
              <div class="col-md-6">
                <label for="suratpermohonan" class="form-label">No Surat Permohonan</label>
                <input type="text" name="suratpermohonan" class="form-control" id="suratpermohonan" value="">
              </div>
              <div class="col-md-6">
                <label for="inputtanggal" class="form-label">Tanggal Surat Pemohonan</label>
                <input type="text" name="tanggalsurat" class="form-control" id="tanggalsurat" value="">
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Pemohon Merupakan</label>
                <select id="inputState" class="form-select">
                  <option selected>....</option>
                  <option>Pemilik Kapal</option>
                  <option>Bukan Pemilik Kapal</option>
                </select>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <hr>
              <div class="container">
                <div class="row align-items-start">
                <div class="col">
                  <h4> Permohonan Akta Pendaftaran </h4>
                  <?php
                  
                  $namapemohon=$_POST['nama'];
                  $suratpermohonan=$_POST['suratpermohonan'];
                  $tanggalsurat=$_POST['tanggalsurat'];
                  $kepemilikan=$_POST['kepemilikan'];


                  echo "<table>
                  <tr>
                  <td>  Nama Pemohon </td>
                  <td>  : </td>
                  <td> $namapemohon </td>
                  </tr>
                  <tr>
                  <td> No Surat Permohonan </td>
                  <td> : </td>
                  <td> $suratpermohonan </td>
                  </tr>
                  <tr>
                  <td> Tanggal surat </td>
                  <td> : </td>
                  <td> $tanggalsurat </td>
                  </tr>
                  <tr>
                  <td> Pemohon Merupakan </td>
                  <td> : </td>
                  <td> $kepemilikan </td>
                  </tr>
                  <tr>
                  </table>";
                  ?>
                  <br>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Selanjutnya</button>
              </div>
                </div>
              </div>
            </form>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
        
    </div>
</div>
</body>
</html>
