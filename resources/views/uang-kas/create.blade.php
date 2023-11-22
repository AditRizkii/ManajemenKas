<div class="modal fade ms-8" id="bulancreate" tabindex="1" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content rounded-25">
            <div class="modal-body py-0 px-0">
                <div class="row">
                    <div class="col mx-5 my-3 margin-left-5 text-dark">
                        <div class="border-bottom border-2 px-3 d-flex justify-content-between">
                            <p class="fw-bold fs-6 d-flex align-items-center">
                                Edit Pengeluaran
                            </p>
                            <div class="d-flex justify-content-end">
                                <button type="button" class=" text-black" data-bs-dismiss="modal" aria-label="Close"
                                    style="border:none; background-color:transparent;">X</button>
                            </div>
                        </div>
                        <div class="p-3 py-4">
                            <div class="md-form flex">
                                <form action="{{ route('uang-kas.store') }}" method="POST" class="d-grid gap-2">
                                    @csrf
                                    <div class="d-flex flex-column">
                                        <label for="nama" class="fs-6 fw-base mx-1">Bulan</label>
                                        <input type="text" name="nama" id="nama">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="tahun" class="fs-6 fw-base mx-1">Tahun</label>
                                        <input type="text" name="tahun" id="tahun">
                                    </div>

                                    <div class="d-flex flex-column">
                                        <label for="pembayaran_perminggu" class="fs-6 fw-base mx-1">Pembayaran Per
                                            Minggu</label>
                                        <input type="text" name="pembayaran_perminggu" id="pembayaran_perminggu"
                                            pattern="\d*">
                                    </div>

                                    <div class="d-flex justify-content-end mx-5">
                                        <button type="submit" class="btn btn-primary my-4 ">Buat</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
