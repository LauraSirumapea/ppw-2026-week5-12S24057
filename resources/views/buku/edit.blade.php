<x-layout title="Edit Buku">

    <div class="mb-4">
        <h2 class="fw-bold text-del">Edit Buku</h2>
        <p class="text-muted">
            Perbarui informasi buku di SIPUS-Del.
        </p>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Periksa kembali data berikut:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('buku.update', $buku) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="isbn" class="form-label">
                        ISBN
                    </label>

                    <input
                        type="text"
                        id="isbn"
                        name="isbn"
                        value="{{ old('isbn', $buku->isbn) }}"
                        class="form-control @error('isbn') is-invalid @enderror"
                        required>

                    @error('isbn')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="judul" class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        value="{{ old('judul', $buku->judul) }}"
                        class="form-control @error('judul') is-invalid @enderror"
                        required>

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">
                        Penulis
                    </label>

                    <input
                        type="text"
                        id="penulis"
                        name="penulis"
                        value="{{ old('penulis', $buku->penulis) }}"
                        class="form-control @error('penulis') is-invalid @enderror"
                        required>

                    @error('penulis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penerbit" class="form-label">
                        Penerbit
                    </label>

                    <input
                        type="text"
                        id="penerbit"
                        name="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}"
                        class="form-control @error('penerbit') is-invalid @enderror"
                        required>

                    @error('penerbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">
                        Tahun Terbit
                    </label>

                    <input
                        type="number"
                        id="tahun_terbit"
                        name="tahun_terbit"
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                        class="form-control @error('tahun_terbit') is-invalid @enderror"
                        min="1900"
                        max="2026"
                        required>

                    @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">
                        Kategori
                    </label>

                    <select
                        id="kategori_id"
                        name="kategori_id"
                        class="form-select @error('kategori_id') is-invalid @enderror"
                        required>

                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($kategoris as $kategori)
                            <option
                                value="{{ $kategori->id }}"
                                {{ old('kategori_id', $buku->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach

                    </select>

                    @error('kategori_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stok" class="form-label">
                        Stok
                    </label>

                    <input
                        type="number"
                        id="stok"
                        name="stok"
                        value="{{ old('stok', $buku->stok) }}"
                        class="form-control @error('stok') is-invalid @enderror"
                        min="0"
                        required>

                    @error('stok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">
                        Sinopsis
                    </label>

                    <textarea
                        id="sinopsis"
                        name="sinopsis"
                        rows="5"
                        class="form-control @error('sinopsis') is-invalid @enderror">{{ old('sinopsis', $buku->sinopsis) }}</textarea>

                    @error('sinopsis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <a
                        href="{{ route('buku.index') }}"
                        class="btn btn-secondary">
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn btn-del">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</x-layout>