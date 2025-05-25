<x-default-layout title="Majors" section_title="Daftar Jurusan">
    @if (session('success'))
        <div class="bg-green-50 border border-green-500 text-green-500 px-3 py-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    @can('store-major')
        <div class="flex mb-4">
            <a href="{{ route('majors.create') }}"
                class="bg-green-50 text-green-500 border border-green-500 px-3 py-2 flex items-center gap-2">
                <i class="ph ph-plus block text-green-500"></i>
                <div>Tambah Jurusan</div>
            </a>
        </div>
    @endcan

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow">
            <thead>
                <tr class="border-b border-zinc-200 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Nama Jurusan</th>
                    <th class="py-3 px-6 text-left">Kode</th>
                    <th class="py-3 px-6 text-left">Deskripsi</th>
                    <th class="py-3 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                @forelse ($majors as $major)
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->code }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->description }}</td>
                        <td class="py-3 px-6 justify-center gap-1 flex">
                            <a href="{{ route('majors.show', $major->id) }}"
                                class="bg-blue-50 border border-blue-500 p-2 inline-block" title="Detail">
                                <i class="ph ph-eye block text-blue-500"></i>
                            </a>
                            @can('edit-major')
                                <a href="{{ route('majors.edit', $major->id) }}"
                                    class="bg-yellow-50 border border-yellow-500 p-2 inline-block" title="Edit">
                                    <i class="ph ph-note-pencil block text-yellow-500"></i>
                                </a>
                            @endcan
                            @can('destroy-major')
                                <form onsubmit="return confirm('Yakin ingin menghapus?')" method="POST"
                                    action="{{ route('majors.destroy', $major->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-50 border border-red-500 p-2" title="Hapus">
                                        <i class="ph ph-trash-simple block text-red-500"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-zinc-500">Tidak ada jurusan ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-default-layout>
