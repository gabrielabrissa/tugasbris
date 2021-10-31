<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class='container'>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/mahasiswa">CRUD Laravel Eloquent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Master Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/mahasiswa">Data Mahasiswa</a>
                <a class="dropdown-item" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron mt-5">
            <h1 class="display-4">Contact</h1>
            <div class=" mt-4">
            <div class="col">
            <div class="p-3 border bg-light"> <b></b><br>
            <p>Jl. Janti, Banguntapan Bantul, DI. Yogyakarta <br>
               No. Telpon : (0274) 4536234 <br>
               Akun media Sosial: <br>
               Facebook: @ukdw.yogyakarta <br>
               Twitter: @ukdw_yk <br>
               Instagram: @ukdw_yk <br> <br>
        </div>
        <hr class="my-4">
        <form action="/profile/saran" method='post'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <table>
                <b><h6>Edit Contact</h6>
                <tr><td><label for="lbl1">Alamat</label></td>
                <td><input type="text" class="form-control" name="alamat" ></td></tr>
                <tr><td><label for="lbl2">No Telp</label></td>
                <td><input type="text" class="form-control" name="telp" ></td></tr>
                <tr><td>  <label for="lbl3">Akun Sosial Media</label></td>
                <td> <textarea name="saran" rows="3"></textarea></td></tr>
                <tr><td><button type="submit" class="btn btn-primary">Ubah</button><td><tr>
                </table>
                </form>
                <hr class="my-4">
        </div>
        </div>
    </div>
</body>
</html>