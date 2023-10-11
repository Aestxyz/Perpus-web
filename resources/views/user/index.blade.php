<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">Users</x-slot>
    <div class="card">
        <div class="card-header">
            @include('user.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>role</th>
                            <th>telp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $user)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <span class="badge bg-primary">{{ $user->role }}</span>
                                </td>
                                <td>{{ $user->telp }}</td>
                                <td>
                                    <div class="d-flex gap-3 align-items-center justify-content-center">

                                        @include('user.update')
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                                Hapus</button>
                                        </form>
                                        <a name="" id="" class="btn btn-outline-primary btn-sm"
                                            href="#" role="button">Lihat</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
