@extends('layouts.app')
@section('content')
    <div class="col-xl-12" x-data="barangKeluarData">
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Barang Keluar</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create">
                                Tambah Data
                            </button>
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-laporan">
                                Print
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body py-3">
                @include('pages.barang-keluar.components.create')
                @include('pages.barang-keluar.components.edit')
                @include('pages.barang-keluar.components.laporan')
                <div class="float-end">
                    <input type="text" x-model="search" class="form-control form-control form-control-solid" name="search" placeholder="Cari.." @input.debounce="searchData"/>
                </div>
                <table class="table table-striped gy-7 gs-7">
                    <thead>
                    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                        <td>No</td>
                        <td>Nama Barang</td>
                        <td>Kuantitas</td>
                        <td>Harga</td>
                        <td>Total</td>
                        <td>User</td>
                        <td>Status</td>
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
                    <template x-if="!isLoading && barangKeluar.data?.length === 0">
                        <tr>
                            <td colspan="9">
                                <center>Data Tidak Ditemukan</center>
                            </td>
                        </tr>
                    </template>
                    <template x-for="(row,index) in barangKeluar?.data">
                        <tr>
                            <td x-text="startIndex + index++"></td>
                            <td x-text="`${row.barang.nama}`"></td>
                            <td x-text="row.qty"></td>
                            <td x-text="row.harga_satuan"></td>
                            <td x-text="row.total"></td>
                            <td>
                                <span class="badge bg-warning" x-text="row.user.name"></span>
                            </td>
                            <template x-if="row.status === 0">
                                <td>
                                    <button @click="updateStat(row.id)" class="badge bg-danger">Belum Disetujui</button>
                                </td>
                            </template>
                            <template x-if="row.status === 1">
                                <td>
                                    <button type="button" class="badge bg-success">Disetujui</button>
                                </td>
                            </template>
                            <td>
                                <template x-if="row.status === 0">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit" @click="edit(row.id)">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                </template>
                                <template x-if="row.status === 0">
                                <button class="btn btn-danger btn-sm" @click="destroy(row.id)">
                                    <i class="bi bi-trash"></i>
                                </button>
                                </template>
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
    @include('pages.barang-keluar.script')
@endpush
