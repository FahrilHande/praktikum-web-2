<x-default-layout title="Tambah Jurusan" section_title="Form Tambah Jurusan">
    <form action="{{ route('majors.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Nama Jurusan</label>
            <input type="text" name="name" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Kode</label>
            <input type="text" name="code" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea name="description" rows="3" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                Simpan
            </button>
            <a href="{{ route('majors.index') }}" class="text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</x-default-layout>
