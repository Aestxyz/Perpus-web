<x-auth.layout>

    <x-slot name="title">{{ $transaction->label }} / {{ $transaction->code }}</x-slot>

    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Tgl. Pinjam</th>
                        <th scope="col">Tgl. Kembali</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $transaction->borrow_date }}</td>
                        <td>{{ $transaction->return_date }}</td>
                        <td>{{ $transaction->book->title }}</td>
                        <td><span
                                class="badge
                            @if ($transaction->status == 'Menunggu') bg-warning
                            @elseif($transaction->status == 'Berjalan') bg-primary
                            @elseif($transaction->status == 'Terlambat') bg-danger
                            @elseif($transaction->status == 'Selesai') bg-success @endif
                            ">{{ $transaction->status }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="d-flex gap-3 mb-3 justify-content-between">
        <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Edit
        </button>
        @include('transaction.destroy')
    </div>

    <div class="collapse mb-3" id="collapseExample">
        <div class="card">
            @include('transaction.update')
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body row">
            <div class="col-md">
                <div class="info-container">
                    <h4 class="d-block text-muted my-3">DETAIL USER</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <span class="fw-medium me-2">Nama:</span>
                            <span>{{ $transaction->user->name }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Email:</span>
                            <span>{{ $transaction->user->email }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Role:</span>
                            <span class="badge bg-label-success">{{ $transaction->user->role }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Telp:</span>
                            <span>+62{{ $transaction->user->telp }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">NIS/Etc.:</span>
                            <span>{{ $transaction->user->identify }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Jenis Kelamin:</span>
                            <span>{{ $transaction->user->gender }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Tgl. Lahir:</span>
                            <span>{{ $transaction->user->birthdate }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="info-container text-end">
                    <h4 class="d-block pt-4 text-muted fw-bold">DETAIL USER</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <span class="fw-medium me-2">Nama:</span>
                            <span>{{ $transaction->user->name }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Email:</span>
                            <span>{{ $transaction->user->email }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Role:</span>
                            <span class="badge bg-label-success">{{ $transaction->user->role }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Telp:</span>
                            <span>+62{{ $transaction->user->telp }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">NIS/Etc.:</span>
                            <span>{{ $transaction->user->identify }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Jenis Kelamin:</span>
                            <span>{{ $transaction->user->gender }}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Tgl. Lahir:</span>
                            <span>{{ $transaction->user->birthdate }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-auth.layout>
