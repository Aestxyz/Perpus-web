<x-auth.layout>
    <x-slot name="title">Transaction Library</x-slot>
    @include('layouts.table')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center fw-bold">Informasi Peminjaman dan Pemngembalian </h5>
            <div class="nav-align-top">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-waiting" aria-controls="navs-justified-waiting"
                            aria-selected="true"><i
                                class="tf-icons mdi mdi-receipt-text-clock-outline mdi-20px me-1"></i> Menunggu
                            @if ($waiting->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $waiting->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-walking" aria-controls="navs-justified-walking"
                            aria-selected="false"><i class="tf-icons mdi mdi-timer-sand-complete mdi-20px me-1"></i>
                            Berjalan
                            @if ($walking->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $walking->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-penalty" aria-controls="navs-justified-penalty"
                            aria-selected="false"><i class="tf-icons mdi mdi-alert-box-outline mdi-20px me-1"></i>
                            Hukuman
                            @if ($penalty->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $penalty->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-finished" aria-controls="navs-justified-finished"
                            aria-selected="false"><i class="tf-icons mdi mdi-tag-check mdi-20px me-1"></i>
                            Selesai
                            @if ($finished->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $finished->count() }}</span>
                            @endif
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-justified-waiting" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table nowrap text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>status</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Buku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($waiting as $no => $wait)
                                        <tr>
                                            <td>{{ ++$no }}.</td>
                                            <td><span class="badge bg-warning">{{ $wait->status }}</span></td>
                                            <td>{{ $wait->borrow_date ?? '-' }}</td>
                                            <td>{{ $wait->return_date ?? '-' }}</td>
                                            <td>{{ $wait->book->title }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-walking" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table nowrap text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>status</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Buku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($walking as $no => $walk)
                                        <tr>
                                            <td>{{ ++$no }}.</td>
                                            <td><span class="badge bg-primary">{{ $walk->status }}</span></td>
                                            <td>{{ $walk->borrow_date ?? '-' }}</td>
                                            <td>{{ $walk->return_date ?? '-' }}</td>
                                            <td>{{ $walk->book->title }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-penalty" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table nowrap text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>status</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Buku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penalty as $no => $penal)
                                        <tr>
                                            <td>{{ ++$no }}.</td>
                                            <td><span class="badge bg-danger">{{ $penal->status }}</span></td>
                                            <td>{{ $penal->borrow_date ?? '-' }}</td>
                                            <td>{{ $penal->return_date ?? '-' }}</td>
                                            <td>{{ $penal->book->title }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-finished" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table nowrap text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>status</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Buku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($finished as $no => $finish)
                                        <tr>
                                            <td>{{ ++$no }}.</td>
                                            <td><span class="badge bg-success">{{ $finish->status }}</span></td>
                                            <td>{{ $finish->borrow_date ?? '-' }}</td>
                                            <td>{{ $finish->return_date ?? '-' }}</td>
                                            <td>{{ $finish->book->title }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth.layout>
