@include('layoutsbootstrap/header')

@include('layoutsbootstrap/sidebar')

<!-- Instalasi grafik via asset dari bootstrap -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

@yield('konten')                

@include('layoutsbootstrap/footer')