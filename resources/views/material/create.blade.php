<x-layouts.master nav="Materi">
  <div class="justify-content-center col-12">
    <div class="d-flex align-items-center justify-content-center col-12">
      <div class="card shadow-sm">
        <div class="card-header">
          <h2 class="card-title fs-2">Tambah Data Materi</h2>
          <div class="card-toolbar">
            <a href="{{ route('course.index') }}" class="btn btn-sm btn-outline-primary">
              Kembali
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('material.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Materi"
                value="{{ old('judul') }}" required />
              <label for="judul">Judul Materi</label>
              @error('judul')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-floating mb-3">
              <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="deskripsi" style="height: 100px"
                required>{{ old('deskripsi') }}</textarea>
              <label for="deskripsi">Deskripsi</label>
              @error('deskripsi')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="link" name="link" placeholder="link Materi"
                value="{{ old('link') }}" required />
              <label for="link">Link Materi</label>
              @error('link')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-floating">
              <select class="form-select" id="course_id" name="course_id" aria-label="Floating label select example"
                required>
                <option selected hidden>Pilih Kursus</option>
                @foreach ($courses as $kursus)
                  <option value="{{ $kursus->id }}">{{ $kursus->judul }}</option>
                @endforeach
              </select>
              <label for="course_id">Kursus</label>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layouts.master>
