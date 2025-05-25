<x-default-layout title="Edit Jurusan" section_title="Form Edit Jurusan">
    <form action="{{ route('majors.update', $major->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1 font-medium">Nama Jurusan</label>
            <input type="text" name="name" value="{{ old('name', $major->name) }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Kode</label>
            <input type="text" name="code" value="{{ old('code', $major->code) }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea name="description" rows="3"
                class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description', $major->description) }}</textarea>
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Update
            </button>
            <a href="{{ route('majors.index') }}" class="text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</x-default-layout>
