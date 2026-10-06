<x-layout title="Daftar Buku">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-del mb-1">Daftar Buku</h2>
            <p class="text-muted mb-0">
                Kelola koleksi buku SIPUS-Del
            </p>
        </div>

        <a href="{{ route('buku.create') }}" class="btn btn-del">
            + Tambah Buku
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ISBN</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($bukus as $buku)
                            <tr>
                                <td>{{ $bukus->firstItem() + $loop->index }}</td>
                                <td>{{ $buku->isbn }}</td>
                                <td><strong>{{ $buku->judul }}</strong></td>
                                <td>{{ $buku->penulis }}</td>
                                <td>{{ $buku->kategori->nama_kategori }}</td>
                                <td>{{ $buku->tahun_terbit }}</td>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $buku->stok }}
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex gap-1">

                                        <a
                                            href="{{ route('buku.show', $buku) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            Detail
                                        </a>

                                        <a
                                            href="{{ route('buku.edit', $buku) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('buku.destroy', $buku) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <p class="text-muted mb-2">
                                        Belum ada data buku.
                                    </p>

                                    <a
                                        href="{{ route('buku.create') }}"
                                        class="btn btn-del">
                                        Tambah Buku
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $bukus->links() }}
            </div>

        </div>
    </div>

</x-layout>