@extends('dashboard.layouts.main')

@section('container')

<h5 class="mb-2 mt-2">Halaman Pesanan : <span> {{ auth()->user()->name }}</span>
</h5>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-1 border-bottom">

</div>


<!-- FITUR TOOL BAR UNTUK LAPORAN YANG AKAN DI EKSEKUSI OLEH USER SENDIRI  -->

<div class="btn-toolbar mb-4 mb-md-0 mr-4">
    <a href="/user_dashboard/tabel_barangbarang">
        <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle text-dark mr-4">
            <span data-feather="book" class="align-text-bottom text-dark"></span>
            History
        </button>
    </a>
    <a href="">
        <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle text-dark mr-4">
            <span data-feather="book-open" class="align-text-bottom text-dark"></span>
            Pesanan Saya
        </button>
    </a>
    <a href="">
        <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle text-dark mr-4">
            <span data-feather="cast" class="align-text-bottom text-dark"></span>
            Pesanan Baru
        </button>
    </a>
    <!-- <button type="button" class="btn btn-sm btn-outline-warning dropdown-toggle text-dark mr-4">
        <span data-feather="calendar" class="align-text-bottom text-dark"></span>
        Pesanan Baru
    </button> -->
</div>

<!-- ########################  -->


<!-- <h3 class="mt-2 mb-2">Table Pesanan {{ auth()->user()->name }}</h3> -->
<div class="table-responsive col-lg-12">
    <!-- <a href="/dashboard/categories/create" class="btn btn-sn btn-primary mb-3"><span data-feather="file-plus"></span> New Categories</a> -->

    @if(session()->has('success'))
    <div class="alert alert-secondary alert-dismissible fade show col-lg-6" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-striped table-sm mt-4">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Jenis Barang</th>
                <!-- <th scope="col">Jenis Bahan</th> -->
                <th scope="col" class="text-center">Harga Satuan</th>
                <th scope="col" class="text-center">Jumlah Pesanan </th>
                <th scope="col" class="text-center">Total Harga</th>
                <th scope="col" class="text-center">Alamat Kirim</th>
                <th scope="col" class="text-center">No WA</th>
                <th scope="col" class="text-center">Bukti Trf</th>
                <th scope="col" class="text-center">Status Bayar</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangbarang as $barangs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barangs->jenisbarang}}</td>
                <!-- <td>{{ $barangs->jenisbahan}}</td> -->
                <td>{{ $barangs->hargasatuan}}</td>
                <td class="text-center">{{ $barangs->jumlahpesanan}}</td>
                <td>{{ $barangs->totalharga}}</td>
                <td>{{ $barangs->alamatkirim}}</td>
                <td>{{ $barangs->no_whatsapp}}</td>
                <td>{{ $barangs->image}}</td>
                <td class="text-center">{{ $barangs->statusbayar}}</td>
                <td class="text-center">
                    <!-- HATI HATI DI BAWAH IN IMENGGUNAKAN FITU GETROUTEKEYNAME AGAR TIDAK MENCARI ID BERDASARKAN NO MELAINKAN SESUAI YANG KITA INGINKAN  DENGAN CONTOH TABLE 'SLUG'-->
                    <a href="/dashboard/categories/{{ $barangs->jenisbarang }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/categories/{{ $barangs->jenisbarang }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/categories/{{ $barangs->jenisbarang }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?!')"><span data-feather="trash"></span></button>
                    </form>

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $barangbarang->links()}}
    </div>
</div>

<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->



@endsection