<!DOCTYPE html>
<html lang="en">
<head>
    <!-- masukkan header dari layouts -> header.blade -->
    @include('layout/header')
</head>
<body>
    Selamat Datang {{ $nama }}
    <hr>
    
    <!-- Masukkan untuk template konten -->
    @yield('konten')
    
    <hr>
    <!-- masukkan footer dari layouts -> footer.blade -->
    @include('layout/footer')
</body>
</html>
