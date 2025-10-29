@extends('layouts.dashboard')
@section('title','form tambah data user')
@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">form tambah data</h4> {{-- Diperbaiki dari "from" ke "form" --}}
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('create.dataUser') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">nama</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="masukkan nama">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input type="text" id="username" class="form-control"
                                            placeholder="masukkan username" name="username">
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" id="email" class="form-control" placeholder="masukkan email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="text" id="password" class="form-control"
                                            name="password" placeholder="masukkan password"> 
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="telp">no telp</label>
                                        <input type="text" id="telp" class="form-control"
                                            name="telp" placeholder="masukkan no telp">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="jenis_kelamin">jenis kelamin</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="" disabled selected>pilih jenis kelamin</option>
                                            <option value="p">perempuan</option>
                                            <option value="l">laki-laki</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->
@endsection