<x-default-layout title="Detail Jurusan" section_title="Informasi Jurusan">
    <div class="bg-white p-6 rounded shadow space-y-4">
        <p><strong>Nama Jurusan:</strong> {{ $major->name }}</p>
        <p><strong>Kode:</strong> {{ $major->code }}</p>
        <p><strong>Deskripsi:</strong> {{ $major->description ?? '-' }}</p>

        <div class="flex gap-2 mt-4">
            @can('edit-major')
                <a href="{{ route('majors.edit', $major->id) }}"
                    class="bg-yellow-50 border border-yellow-500 px-3 py-2 text-yellow-700 hover:bg-yellow-100">
                    Edit
                </a>
            @endcan
            <a href="{{ route('majors.index') }}" class="text-gray-600 hover:underline">Kembali</a>
        </div>
    </div>
</x-default-layout>
