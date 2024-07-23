<x-layout title="Tambah Daftar Dokter">
    <div class="p-10">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Tambah Daftar Dokter</h1>
        <div class="bg-gray-200 px-3 py-5 max-w-md mx-auto rounded-lg">
            <form action="{{route('dokter.store')}}" method="post" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('name')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('email')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="shadow-sm bg-gray-50 border
                    border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('password')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="spesialis" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Specialis</label>
                    <input type="text" name="spesialis" id="spesialis" class="shadow-sm bg-gray-50 border
                    border-gray-300text-gray-900
            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
                    @error('specialis')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-start mb-5 space-x-3">
                    <x-button-primary>Save</x-button-primary>
                    <a href="{{route('dokter.list')}}" class="text-white bg-red-700 hover:bg-red-800
                    focus:ring-4
                    focus:outline-none
            focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600
            dark:hover:bg-red-700 dark:focus:ring-blue-800">back</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>