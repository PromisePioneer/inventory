@extends('layouts.app')
@section('content')
    <div class="row" x-data="editData">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex my-8">
                        <a href="{{ url('user/user') }}" class="btn btn-danger btn-sm"><i class="bi-arrow-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form" @submit.prevent="update()">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mb-6">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Nama</label>
                                <div class="col-lg-4 fv-row">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Nama" value="{{ $user->name }}" />
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Email</label>
                                <div class="col-lg-10 fv-row">
                                    <input type="email" name="email" id="error" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ $user->email }}"/>
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6">Role</label>
                                <div class="col-lg-10 fv-row">
                                    <div class="row">
                                        <template x-for="row in role" :key="row.id">
                                            <div class="col-md-3 mt-2">
                                                <input class="form-check-input" type="radio" :value="row.name" name="role"/>
                                                <label class="form-check-label" for="flexCheckChecked" >
                                                    <span x-text="row.name"></span>
                                                </label>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2 btn-sm">Reset</button>
                            <button type="submit" class="btn btn-primary btn-sm" id="kt_account_profile_details_submit">Simpan</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    @include('pages.user.user.components.script.edit')
@endpush
