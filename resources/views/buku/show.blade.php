<x-layout title="Detail Buku">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-del mb-1">Detail Buku</h2>
            <p class="text-muted mb-0">
                Informasi lengkap buku
            </p>
        </div>

        <div class="d-flex gap-2">
            <a
                href="{{ route('buku.edit', $buku) }}"
                class="btn btn-warning">
                Edit
            </a>

            <a
                href="{{ route('buku.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">ISBN</div>
                <div class="col-md-9">{{ $buku->isbn }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Judul</div>
                <div class="col-md-9">{{ $buku->judul }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Penulis</div>
                <div class="col-md-9">{{ $buku->penulis }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Penerbit</div>
                <div class="col-md-9">{{ $buku->penerbit }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Tahun Terbit</div>
                <div class="col-md-9">{{ $buku->tahun_terbit }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Kategori</div>
                <div class="col-md-9">
                    {{ $buku->kategori->nama_kategori }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 fw-bold">Stok</div>
                <div class="col-md-9">
                    <span class="badge bg-secondary">
                        {{ $buku->stok }}
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 fw-bold">Sinopsis</div>
                <div class="col-md-9">
                    {{ $buku->sinopsis ?: '-' }}
                </div>
            </div>

        </div>
    </div>

</x-layout>