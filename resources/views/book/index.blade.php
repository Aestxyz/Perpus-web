<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">Books</x-slot>
    <div class="card mb-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm">Selamat {{ Auth()->user()->name }}!🎉</h4>
                    <p class="mb-0">Perpustakaan memiliki total {{ $transactions }} transaksi peminjaman buku
                        dari total {{ $books->count() }} buku saat ini.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            @include('book.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>kategori buku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $no => $book)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>
                                    <img src="{{ Storage::url($book->image) }}" class="object-fit-cover rounded-circle"
                                        width="50" height="50" alt="img-cover">
                                </td>
                                <td>{{ $book->title }}</td>
                                <td><span class="badge bg-primary">{{ $book->category->name }}</span></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="{{ route('books.show', $book->id) }}" role="button">Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
