<x-layout title="Tambah Daftar Pegawai">
    <div class="p-10">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Tambah Daftar Pegawai</h1>
        <div class="bg-gray-200 px-3 py-5 max-w-md mx-auto rounded-lg">
            <form action="{{route('pegawai.store')}}" method="post" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="name" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('nama')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                    <input type="text" name="nip" id="nip" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('nip')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Status</label>
                    <select name="status" id="status"
                            class="my-1 block w-full p-2 rounded-md bg-gray-100 text-sm dark:border-gray-600
                        dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                        focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    >
                        <option value="" selected disabled>Pilih....</option>
                        <option selected>aktif</option>
                        <option>Tidak Aktif</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('jabatan')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-start mb-5 space-x-3">
                    <x-button-primary>Save</x-button-primary>
                    <a href="{{route('pegawai.list')}}" type="submit" class="text-white bg-red-700 hover:bg-red-800
                    focus:ring-4
                    focus:outline-none
            focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600
            dark:hover:bg-red-700 dark:focus:ring-blue-800">back</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>