<x-auth.layout>
    <x-slot name="title">Book {{ $book->title }}</x-slot>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Buku</h5>
            <p class="mb-0">{{ $book->title }}</p>
        </div>
        <div class="card shadow-none">
            <div class="row g-3">
                <div class="col-md">
                    <div class="card-body">
                        <div class="cursor-pointer row">
                            <img src="{{ Storage::url($book->image) }}" class="img rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5>Tentang Buku</h5>
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#modalId">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Hapus</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap mb-0">
                            <div class="me-2">
                                <p class="text-nowrap"><i class="mdi mdi-format-title mdi-24px me-2"></i>Judul:
                                    {{ $book->title }}</p>
                                <p class="text-nowrap"><i class="mdi mdi-identifier mdi-24px me-2"></i>ISBN:
                                    {{ $book->isbn }}</p>
                                <p class="text-nowrap"><i class="mdi mdi-shape mdi-24px me-2"></i>Kategori:
                                    {{ $book->category->name }}</p>
                                <p class="text-nowrap"><i class="mdi mdi-counter mdi-24px me-2"></i>Jumlah Buku:
                                    {{ $book->book_count }}</p>
                            </div>
                            <div>
                                <p class="text-nowrap"><i class="mdi mdi-face-man mdi-24px me-2"></i>Penulis:
                                    {{ $book->author }}</p>
                                <p class="text-nowrap"><i class="mdi mdi-clipboard-text-clock mdi-24px me-2"></i>Tahun
                                    Terbit:
                                    {{ $book->year_published }}</p>
                                <p class="text-nowrap"><i class="mdi mdi-domain mdi-24px me-2"></i>Penerbit:
                                    {{ $book->publisher }}</p>
                            </div>
                        </div>
                        <hr>
                        <h5 class="mb-2">Sinopsis</h5>
                        <p class="mb-0">{{ $book->synopsis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('book.update')
</x-auth.layout>
