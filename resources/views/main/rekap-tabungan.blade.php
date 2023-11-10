@extends('layout.main')

@section('title')
    Sistem Akuntansi UBSP - Pengajuan Tabungan
@endsection

@section('vendorCSS')
    <link rel="stylesheet" href="/main/assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="/main/assets/css/pages/simple-datatables.css" />
@endsection

@section('content')
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Rekap Tabungan</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jenis Tabungan</th>
                                        <th>Nominal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13-08-2023</td>
                                        <td>Simpanan Pokok</td>
                                        <td>150,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15-08-2023</td>
                                        <td>Simpanan Wajib</td>
                                        <td>100,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15-09-2023</td>
                                        <td>Simpanan Wajib</td>
                                        <td>100,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21-09-2023</td>
                                        <td>Simpanan Sukarela</td>
                                        <td>50,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>07-10-2023</td>
                                        <td>Simpanan Wajib</td>
                                        <td>100,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-10-2023</td>
                                        <td>Simpanan Pokok</td>
                                        <td>375,000</td>
                                        <td>
                                            <span class="badge bg-success">Disetujui</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05-11-2023</td>
                                        <td>Simpanan Sukarela</td>
                                        <td>20,000</td>
                                        <td>
                                            <span class="badge bg-warning">Menunggu Persetujuan</span>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Nathaniel</td>
                                        <td>mi.Duis@diam.edu</td>
                                        <td>(012165) 76278</td>
                                        <td>Grumo Appula</td>
                                        <td>
                                            <span class="badge bg-danger">Inactive</span>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('vendorJS')
<script src="/main/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/main/assets/js/pages/simple-datatables.js"></script>
@endsection
