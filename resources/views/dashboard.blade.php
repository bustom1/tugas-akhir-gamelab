@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                {{-- <div class="row"> --}}
                    <div class="col-4">
                        <div class="card text-center " style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title nav-icon fa fa-graduation-cap">  Jurusan </h5>
                                <p class="card-text">Total Jurusan : {{ $totalJurusan }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center " style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title nav-icon fa fa-book">  Mata Pelajaran</h5>
                                <p class="card-text">Total Mata Pelajaran : {{ $totalMataPelajaran }}</p>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
