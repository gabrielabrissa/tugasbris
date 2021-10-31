<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Master Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/mahasiswa">Data Mahasiswa</a>
                <a class="dropdown-item" href="/dosen">Data Dosen</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> 
    <form class='mt-4' method="post" action="/mahasiswa/updated/{{ $mhs->id }}"> 
    @csrf <!-- {{ csrf_field() }} --> 
    @method('PUT') <!-- {{ method_field('PUT') }} --> 
    @php $bhs = array(); 
    $bhs = explode(',', $mhs->bahasa); 
    @endphp 
    <div class="form-group"> 
    <label for="formGroupExampleInput">NIM</label> 
    <input type="number" class="form-control" name="nim" id="nim" value="{{ $mhs->nim }}" readonly> </div> 
    <div class="form-group"> 
    <label for="formGroupExampleInput">Nama Mahasiswa</label> 
    <input type="text" class="form-control" name="nama" id="nama" value="{{ $mhs->nama }}"> </div> 
    <label for="formGroupExampleInput">Gender</label> 
    <div class="form-check"> 
    <input class="form-check-input" type="radio" name="gender" value="Laki-Laki" value="Laki-Laki" @php if (($mhs->gender)=='Laki-Laki') echo 'checked' @endphp> 
    <label class="form-check-label" for="exampleRadios1"> Laki-Laki </label> </div> 
    <div class="form-check"> 
    <input class="form-check-input" type="radio" name="gender" value="Perempuan" @php if (($mhs->gender)=='Perempuan') echo 'checked' @endphp> 
    <label class="form-check-label" for="exampleRadios2"> Perempuan </label> </div> 
    <br> 
    <div class="form-group"> 
    <label for="exampleFormControlSelect1">Jurusan</label> 
    <select class="form-control" name="jurusan" id="jurusan"> 
    <option value="0">--Pilih Jurusan--</option> 
    <option value="Informatika" @php if (($mhs->jurusan)=='Informatika') echo 'selected' @endphp>Informatika</option> 
    <option value="Sistem Informasi" @php if (($mhs->jurusan)=='Sistem Informasi') echo 'selected' @endphp>Sistem Informasi</option> </select> </div> 
    <label for="formGroupExampleInput">Bahasa</label> 
    <div class="form-check"> 
    <input class="form-check-input" type="checkbox" value="Indonesia" name="bahasa[]" <?php in_array('Indonesia', $bhs) ? print 'checked' : ''; ?>> 
    <label class="form-check-label" for="defaultCheck1"> Indonesia </label>
    </div> 
    <div class="form-check"> 
    <input class="form-check-input" type="checkbox" value="Inggris" name="bahasa[]" <?php in_array('Inggris', $bhs) ? print 'checked' : ''; ?>> 
    <label class="form-check-label" for="defaultCheck1"> Inggris </label> </div>
    <div class="form-check"> 
    <input class="form-check-input" type="checkbox" value="Mandarin" name="bahasa[]" <?php in_array('Mandarin', $bhs) ? print 'checked' : ''; ?>> 
    <label class="form-check-label" for="defaultCheck1"> Mandarin </label> </div>
     <br> 
     <input type="submit" class="btn btn-outline-primary" value="Simpan"> 
     </form>
    </div>
</body>
</html>