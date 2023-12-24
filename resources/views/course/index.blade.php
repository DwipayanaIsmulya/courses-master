<x-layouts.master nav="Kursus">
  <div class="row justify-content-center">
    <div class="">
      <div class="card shadow-sm">
        <div class="card-header">
          <h2 class="card-title fs-2">Daftar Kursus</h2>
          <div class="card-toolbar">
            <a href="{{ route('course.create') }}" class="btn btn-sm btn-primary">
              Tambah Kursus
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
                  <th>Durasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($courses as $kursus)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $kursus->judul }}</td>
                    <td class="text-center">{{ $kursus->deskripsi }}</td>
                    <td class="text-center" nowrap="nowrap">{{ $kursus->durasi_format }}</td>
                    <td>
                      <div class="d-flex flex-row align-items-center ms-1">
                        <a href="{{ route('course.show', $kursus->id) }}"
                          class="btn btn-sm btn-primary w-80px mx-2">Lihat</a>
                        <a href="{{ route('course.edit', $kursus->id) }}"
                          class="btn btn-sm btn-warning w-80px mx-2">Edit</a>
                        <form action="{{ route('course.destroy', $kursus->id) }}" method="post">
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
            {{ $courses->links() }}
          </div>
        </div>
        </div>
      </div>
  </div>
</x-layouts.master>
