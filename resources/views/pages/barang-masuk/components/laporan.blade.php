<div class="modal fade" tabindex="-1" id="modal-laporan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Laporan</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Awal</label>
                                        <input type="date" name="tglAwal" id="tglAwal" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Akhir</label>
                                        <input type="date" name="tglAkhir" id="tglAkhir" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
                        <a href="#"
                           onclick="this.href='barang-masuk/cetak-laporan/'+ document.getElementById('tglAwal').value + '/' + document.getElementById('tglAkhir').value"
                           class="btn btn-primary btn-sm btn-block" target="_blank">PRINTp</a>
                    </div>
            </div>
        </div>
    </div>
