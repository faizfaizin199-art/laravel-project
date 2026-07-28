<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
    <h1>{{$title ?? ''}}</h1>
    <a href="{{route('penjumlahan')}}">Tambah</a>
    <a href="{{route('pengurangan')}}">Kurang</a>
    <a href="{{route('perkalian')}}">Kali</a>
    <a href="{{route('pembagian')}}">Bagi</a>

    <br> <br>

    <div class="content">
        {{-- @yield('') --> sebuah parent untuk jadi acuan mengisi anak-anak komponen tempalate --}}
        @yield('content')
    </div>
</body>
</html>
