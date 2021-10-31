<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
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
            </ul>
            <form class="form-inline" method="get" action="/dosen/search">
    <input class="form-control mr-sm-2" name="q" value="@php echo old('cari') @endphp" placeholder="Cari Nama Dosen"> 
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
        </div>
    </nav>
    <a class="btn btn-primary mt-4 mb-2" href="/dosen/tambah" role="button">Tambah Dosen [+]</a>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nidn</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Gender</th>
            <th scope="col">Kota</th>
            <th scope="col">Bahasa</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @php $no=1; @endphp
        @foreach($dsn as $d) 
        <tr> 
        <th scope="row"><?php echo $no++ + (($dsn->currentPage()-1) * $dsn->perPage()) ?></th>
        <td>{{ $d->nidn }}</td> 
        <td>{{ $d->nama }}</td> 
        <td>{{ $d->gender }}</td> 
        <td>{{ $d->kota }}</td> 
        <td>{{ $d->bahasa }}</td> 
        <td><a class="btn btn-warning" href="/dosen/edit/{{ $d->id }}" role="button">Edit</a></td>
        <td><a class="btn btn-danger" href="/dosen/delete/{{ $d->id }}" role="button"
        onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a></td>
        </tr> 
        @endforeach
        </tbody>
        </table>
        {{$dsn -> links()}}
        Jumlah data dosen = {{$dsn->total()}}

    </div>
</body>
</html>