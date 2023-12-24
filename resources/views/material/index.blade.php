<x-layouts.master nav="Materi">
  <div class="row justify-content-center">
    <div class="">
      <div class="card shadow-sm">
        <div class="card-header">
          <h2 class="card-title fs-2">Daftar Semua Materi</h2>
          <div class="card-toolbar">
            <a href="{{ route('material.create') }}" class="btn btn-sm btn-primary">
              Tambah Materi
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <table class="table table-striped gy-7 gs-7">
              <thead>
                <tr class="fw-bold fs-6 text-gray-800 text-center border-bottom border-gray-200">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Kursus</th>
                  <th>Link</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($materials as $materi)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $materi->judul }}</td>
                    <td class="text-center">{{ $materi->deskripsi }}</td>
                    <td class="text-center">
                      <a href="{{ route('course.show', $materi->course->id) }}">
                        {{ $materi->course->judul }}
                      </a>
                    </td>
                    <td class="text-center">{{ $materi->link }}</td>
                    <td>
                      <div class="d-flex flex-row align-items-center">
                        <a href="{{ route('material.edit', $materi->id) }}"
                          class="btn btn-sm btn-warning w-80px mx-2">Edit</a>
                        <form action="{{ route('material.destroy', $materi->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-sm btn-danger w-80px mx-2">Hapus</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $materials->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.master>
