<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            @role('admin')
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <div class="col-6 text-end">
                            <button data-bs-toggle="modal" data-bs-target="#bulancreate" class="btn btn-dark btn-primary">
                                <i class="fas fa-user-plus me-2"></i> Tambahkan Bulan
                            </button>
                        </div>
                    </div>
                </div>
            @endrole
            <div class="row">
                {{-- <a href="{{ route('uang-kas-bulan') }}" class="col-xl-3 col-sm-6 mb-xl-0">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body text-start p-3 w-100">
                            <div class=" bg-dark text-white text-center border-radius-sm d-flex align-items-center ps-2 w-50 mb-3"
                                style="width: fit-content">
                                Januari
                            </div>
                            <div>
                                <span>2023</span>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100">
                                        <p class="text-sm text-secondary mb-1">Rp5.000/Minggu</p>
                                        <h4 class="mb-2 font-weight-bold">Rp1.500.000</h4>
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-success font-weight-bolder">
                                                <i class="fa fa-chevron-up text-xs me-1"></i>50%
                                            </span>
                                            <span class="text-sm ms-1">from last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a> --}}
                @foreach ($bulans as $bulan)
                    <div class="col-xl-3 col-sm-6 mb-xl-0">
                        <div class="card border shadow-xs mb-4">
                            <div class="card-body text-start p-3 w-100">
                                <div class=" bg-dark text-white text-center border-radius-sm d-flex align-items-center ps-2 w-50 mb-3"
                                    style="width: fit-content">
                                    {{ $bulan->nama }}
                                </div>
                                <div>
                                    <span>2023</span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="w-100">
                                            <p class="text-sm text-secondary mb-1">
                                                Rp{{ $bulan->pembayaran_perminggu }}/Minggu</p>
                                            <h4 class="mb-2 font-weight-bold">Rp{{ $bulan->total }}</h4>
                                            {{-- <div class="d-flex align-items-center">
                                                <span class="text-sm text-success font-weight-bolder">
                                                    <i class="fa fa-chevron-up text-xs me-1"></i>50%
                                                </span>
                                                <span class="text-sm ms-1">from last month</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            @include('uang-kas.create')
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
