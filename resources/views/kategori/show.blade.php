<x-layout title="Detail Kategori">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-del mb-1">Detail Kategori</h2>
            <p class="text-muted mb-0">
                Informasi kategori dan daftar buku di dalamnya.
            </p>
        </div>

        <div class="d-flex gap-2">
            <a
                href="{{ route('kategori.edit', $kategori) }}"
                class="btn btn-warning">
                Edit
            </a>

            <a
                href="{{ route('kategori.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Kode Kategori</div>
                <div class="col-md-9">
                    {{ $kategori->kode_kategori }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Nama Kategori</div>
                <div class="col-md-9">
                    {{ $kategori->nama_kategori }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 fw-bold">Jumlah Buku</div>
                <div class="col-md-9">
                    {{ $kategori->bukus->count() }} buku
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <h5 class="fw-bold mb-3">Daftar Buku</h5>

            @forelse ($kategori->bukus as $buku)

                <div class="border-bottom py-2">
                    <strong>{{ $buku->judul }}</strong>
                    <br>
                    <small class="text-muted">
                        {{ $buku->penulis }} · Stok: {{ $buku->stok }}
                    </small>
                </div>

            @empty

                <p class="text-muted mb-0">
                    Belum ada buku dalam kategori ini.
                </p>

            @endforelse

        </div>
    </div>

</x-layout>