@include('admin.sepuluh.header')
{{-- include untuk memanggil dan menggunakan code dari
    file lain --}}
@include('admin.sepuluh.banner')
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
    {{-- ini buat isi content halaman --}}
    @yield('content')
    {{-- panggil nama section halaman --}}
</div>
</main>
</div>
</div>
@include('admin.sepuluh.footer')