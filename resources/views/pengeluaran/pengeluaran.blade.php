<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div class="ms-auto d-flex">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#pengeluarancreate"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                                <path
                                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Tambah
                                            Pengeluaran</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="align-items-center text-center">No.</th>
                                            <th class=" font-weight-semibold ps-2">Tanggal
                                                Pengeluaran
                                            </th>
                                            <th class=" font-weight-semibold ps-2">
                                                Jumlah Pengeluaran</th>
                                            <th class=" font-weight-semibold  ps-2">
                                                Keterangan</th>
                                            <th class=" opacity-7 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($pengeluarans as $pengeluaran)
                                            @php
                                                $no++;
                                            @endphp
                                            <tr>
                                                <td class="align-middle text-center">
                                                    {{ $no }}
                                                </td>
                                                <td class="align-middle">
                                                    <span class="text-secondary text-sm font-weight-normal">
                                                        {{ Carbon\Carbon::parse($pengeluaran->tgl_pengeluaran)->toDateString() }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span
                                                        class="text-secondary text-sm font-weight-normal">Rp{{ $pengeluaran->jumlah }}</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    {{ $pengeluaran->keterangan }}
                                                </td>
                                                <td class="text-center align-middle bg-transparent border-bottom ">
                                                    <button type="button" class="" data-bs-toggle="modal"
                                                        data-bs-target="#pengeluaranedit{{ $pengeluaran->id }}"
                                                        style="border:none; background-color:transparent;"><i
                                                            class="fas fa-user-edit ms-2" aria-hidden="true"
                                                            style="color: #64748b;"></i></button>
                                                    <a href="#" onclick="return confirm('Apakah Anda Yakin?')"><i
                                                            class="fas fa-trash ms-2" aria-hidden="true"
                                                            style="color: #dc2626;"></i></a>
                                                </td>
                                            </tr>
                                            @include('pengeluaran.edit')
                                        @endforeach
                                    </tbody>
                                    @include('pengeluaran.create')
                                </table>
                            </div>
                            <div class="border-top py-3 px-3 d-flex align-items-center">
                                <p class="font-weight-semibold mb-0 text-dark text-sm">Page 1 of 10</p>
                                <div class="ms-auto">
                                    <button class="btn btn-sm btn-white mb-0">Previous</button>
                                    <button class="btn btn-sm btn-white mb-0">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
