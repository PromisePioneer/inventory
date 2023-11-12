<div class="modal fade" tabindex="-1" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Barang Keluar</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form id="form-create" @submit.prevent="save()">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label class="required form-label">Nama</label>
                                <select class="form-select form-select-solid"
                                        data-control="select2"
                                        data-placeholder="Pilih Barang"
                                        name="barang_id">
                                    <option></option>
                                    <template x-for="row in barang" :key="row.id">
                                        <option :value="row.id" x-text="row.nama"></option>
                                    </template>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label class="required form-label">Kuantitas</label>
                                <input type="number" class="form-control form-control-solid" name="qty" placeholder="Kuantitas"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label class="required form-label">Harga</label>
                                <input type="number" class="form-control form-control-solid" name="harga_satuan" placeholder="Harga"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
