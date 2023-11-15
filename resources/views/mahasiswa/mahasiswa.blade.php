<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">Management Mahasiswa</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <button data-bs-target="#modalcreate" data-bs-toggle="modal"
                                        class="btn btn-dark btn-primary">
                                        <i class="fas fa-user-plus me-2"></i> Tambahkan Mahasiswa
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert" id="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert" id="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-secondary text-center">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            No</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Nama</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            NPM</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            No. HP</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">1</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            Nisa Rianti
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">2208107010000</td>
                                        <td class="align-middle bg-transparent border-bottom">nisa@nisa.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">081234567895
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <button type="button" class="" data-bs-toggle="modal"
                                                data-bs-target="#modaledit"
                                                style="border:none; background-color:transparent;"><i
                                                    class="fas fa-user-edit ms-2" aria-hidden="true"
                                                    style="color: #64748b;"></i></button>
                                            <button onclick="return confirm('Apakah Anda Yakin?')"
                                                style="border:none; background-color:transparent;"><i
                                                    class="fas fa-trash ms-2" aria-hidden="true"
                                                    style="color: #dc2626;"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">2</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            Nisa Rianti
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">2208107010000</td>
                                        <td class="align-middle bg-transparent border-bottom">nisa@nisa.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">081234567895
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit ms-2" aria-hidden="true"
                                                    style="color: #64748b;"></i></a>
                                            <a href="#" onclick="return confirm('Apakah Anda Yakin?')"><i
                                                    class="fas fa-trash ms-2" aria-hidden="true"
                                                    style="color: #dc2626;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">3</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            Nisa Rianti
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">2208107010000</td>
                                        <td class="align-middle bg-transparent border-bottom">nisa@nisa.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">081234567895
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit ms-2" aria-hidden="true"
                                                    style="color: #64748b;"></i></a>
                                            <a href="#" onclick="return confirm('Apakah Anda Yakin?')"><i
                                                    class="fas fa-trash ms-2" aria-hidden="true"
                                                    style="color: #dc2626;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">4</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            Nisa Rianti
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">2208107010000</td>
                                        <td class="align-middle bg-transparent border-bottom">nisa@nisa.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">081234567895
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit ms-2" aria-hidden="true"
                                                    style="color: #64748b;"></i></a>
                                            <a href="#" onclick="return confirm('Apakah Anda Yakin?')"><i
                                                    class="fas fa-trash ms-2" aria-hidden="true"
                                                    style="color: #dc2626;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">5</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            Nisa Rianti
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">2208107010000</td>
                                        <td class="align-middle bg-transparent border-bottom">nisa@nisa.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">081234567895
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit ms-2" aria-hidden="true"
                                                    style="color: #64748b;"></i></a>
                                            <a href="#" onclick="return confirm('Apakah Anda Yakin?')"><i
                                                    class="fas fa-trash ms-2" aria-hidden="true"
                                                    style="color: #dc2626;"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                                @include('mahasiswa.edit')
                                @include('mahasiswa.create')

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-app.footer />
    </main>

</x-app-layout>

<script src="/assets/js/plugins/datatables.js"></script>
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [2, 6],
            sortable: false
        }]
    });
</script>
