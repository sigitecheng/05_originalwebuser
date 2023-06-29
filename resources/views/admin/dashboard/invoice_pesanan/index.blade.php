@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">


    <!-- FITUR TOOL BAR UNTUK LAPORAN YANG AKAN DI EKSEKUSI OLEH USER SENDIRI  -->

    <div class="btn-toolbar mb-md-0">
        <a href="/admin_dashboardinvoicepesanan/all_invoicepesanan">
            <button type="button" class="btn btn-sm btn-outline-warning mx-2 text-dark">
                <span data-feather="database"></span>
                History
            </button>
        </a>
        <a href="/admin_dashboardinvoicepesanan/progress">
            <button type="button" class="btn btn-sm btn-outline-info mx-2 text-dark">
                <span data-feather="disc"></span>
                Progress
            </button>
        </a>
        <a href="">
            <button type="button" class="btn btn-sm btn-outline-info mx-2 text-dark">
                <span data-feather="inbox"></span>
                New Order
            </button>
        </a>
        ||
        <a href="">
            <button type="button" class="btn btn-sm btn-outline-primary mx-2 text-dark">
                <span data-feather="user-plus"></span>
                Register Costumer
            </button>
        </a>
    </div>

    <!-- ########################  -->

</div>

<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

<div class="table-responsive col-lg-12">
    <!-- <a href="/dashboard/posts/create" class="btn btn-sn btn-primary mb-3"><span data-feather="file-plus"></span> Create New Post</a> -->


    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>



        </tbody>
    </table>
</div>

@endsection