<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="align-items-center text-center">No.</th>
                                            <th class="font-weight-semibold ps-2">Penanggung Jawab</th>
                                            <th class="font-weight-semibold ps-2">Tanggal
                                                Pengeluaran
                                            </th>
                                            <th class=" font-weight-semibold ps-2">
                                                Jumlah Pengeluaran</th>
                                            <th class=" font-weight-semibold  ps-2">
                                                Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($laporans as $item)
                                            @php
                                                $user = App\Models\User::find($item->user_id);
                                            @endphp
                                            <tr>
                                                <td class="align-middle text-center">
                                                    {{ $no++ }}
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-sm font-weight-normal">{{ $user->name }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="text-secondary text-sm font-weight-normal">
                                                        {{ Carbon\Carbon::parse($item->tgl_pengeluaran)->toDateString() }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span
                                                        class="text-secondary text-sm font-weight-normal">Rp{{ $item->jumlah }}</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    {{ $item->keterangan }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top py-3 px-3 d-flex align-items-center">
                                <p class="font-weight-semibold mb-0 text-dark text-sm">Page 1 of 10</p>
                                <div class="ms-auto">
                                    <button disabled class="btn btn-sm btn-white mb-0">Previous</button>
                                    <button disabled class="btn btn-sm btn-white mb-0">Next</button>
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
