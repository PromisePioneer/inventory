@extends('layouts.app')
@section('content')
    <div class="col-xl-12" x-data="distributorData">
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Distributor</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create">
                                Tambah Data
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                @include('pages.master.distributor.components.create')
                @include('pages.master.distributor.components.edit')
                <div class="float-end">
                    <input type="text" x-model="search" class="form-control form-control form-control-solid" name="search" placeholder="Cari.." @input.debounce="searchData"/>
                </div>
                <table class="table table-striped gy-7 gs-7">
                    <thead>
                    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                    <template x-if="isLoading">
                        <tr>
                            <td colspan="9">
                                <div style="text-align: center;">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </template>
                    <template x-if="!isLoading && distributor.data?.length === 0">
                        <tr>
                            <td colspan="9">
                                <center>Data Tidak Ditemukan</center>
                            </td>
                        </tr>
                    </template>
                    <template x-for="(row,index) in distributor?.data">
                        <tr>
                            <td x-text="startIndex + index++"></td>
                            <td x-text="row.nama"></td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit" @click="edit(row.id)">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" @click="destroy(row.id)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </template>
                    </tbody>
                </table>
                <div class="float-end">
                    <ul class="pagination">
                        <li class="m-1 page-item previous">
                            <button @click="previousPage" class="btn btn-light btn-sm">Previous</button>
                        </li>
                        <li class="m-1 page-item next">
                            <button @click="nextPage" class="btn btn-light btn-sm">Next</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    @include('pages.master.distributor.script')
@endpush
