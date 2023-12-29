<x-auth.layout>
    <x-slot name="title">Laporan Denda </x-slot>
    @include('layouts.report')
    <div class="card">
        <div class="card-body table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Jumlah Denda</th>
                        <th>Jumlah Hari</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penalties as $no => $penalty)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $penalty->transaction->user->name }}</td>
                            <td>Rp. {{ $penalty->amount }}</td>
                            <td>{{ $penalty->lates_day }} Hari</td>
                            <td>{{ $penalty->payment_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-auth.layout>
