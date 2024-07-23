<x-layout title="Daftar Kunjungan Pasien✨">
    <div class="p-10 h-full">
        <div class="mb-4 flex justify-between">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Daftar Kunjungan Pasien</h1>
            <a href="{{ route('kunjungan.create') }}" class="text-white bg-primary hover:bg-primary-hover focus:ring-4
        focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Tambah Daftar Kunjungan Pasien
            </a>
        </div>
        @if(session('status'))
            <div class="bg-green-100 mb-5  border-l-4 border-green-500 text-green-700 p-2" role="alert">
                <p class="font-bold">{{ session('status')}}</p>
            </div>
        @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Kunjungan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dokter
                    </th>
                    <th scope="col" class="px-6 py-3">
                       rekam medis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                @foreach($data as $key => $item)
                    <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->tanggal_kunjungan}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->dokter_id}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="bg-primary p-1 rounded text-white hover:bg-primary-hover">Rekam</a>
                        </td>

                        <td class="px-3 py-2 flex space-x-2">
                            <a href="{{route('pasien.edit', $item->id)}}" class="font-medium text-blue-600
                            hover:underline">Edit</a>
                            <form action="{{ route('pasien.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="font-medium text-red-600
                            hover:underline" onclick="return confirm('Apakah Anda Yakin Menghapus Data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
    dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Showing {{$data->firstItem()}}-{{$data->lastItem()}} of {{ $data->total()}} Data
        </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <div class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</x-layout>