<x-app-layout>
    <x-slot name="header">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('siswa.index') }}">
            {{ __('<-- Back') }}
        </a>
    </x-slot>

    <section class="bg-slate-100 dark:bg-gray-900 h-[100vh] flex items-center">
        <div class="p-10 mx-auto max-w-2xl bg-white rounded-2xl">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelapor</label>
                        <input type="text" name="pelapor" id="pelapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Pelapor" required="">
                    </div>
                    <div class="w-full">
                        <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terlapor</label>
                        <input type="text" name="terlapor" id="terlapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama yang Dilapor" required="">
                    </div>
                    <div class="w-full">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <select name="kelas" id="kelas" class="w-full rounded-md border-gray-300">
                            <option value="Tidak di Identifikasi" class="text-gray-300">--- Pilih Kelas ---</option>
                            <option value="X-1">X-1</option>
                            <option value="X-2">X-2</option>
                            <option value="X-3">X-3</option>
                            <option value="XI-RPL1">XI-RPL1</option>
                            <option value="XI-RPL2">XI-RPL2</option>
                            <option value="XI-DKV">XI-DKV</option>
                            <option value="XI-TKJ">XI-TKJ</option>
                            <option value="XII-RPL">XII-RPL</option>
                            <option value="XII-DKV">XII-DKV</option>
                            <option value="XII-TKJ">XII-TKJ</option>
                        </select>
                    </div>
                    <div>
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Bukti</label>
                        <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div> 
                    <div class="sm:col-span-2">
                        <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan</label>
                        <textarea id="laporan" name="laporan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Pelaporan"></textarea>
                    </div>
                </div>
                <button type="submit" class="w-full px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-red-900 hover:bg-red-800">
                    Laporin Aja
                </button>
            </form>
        </div>
      </section>
</x-app-layout>

