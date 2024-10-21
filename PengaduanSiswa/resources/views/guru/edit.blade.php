<x-app-layout>
    <x-slot name="header">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('guru.index') }}">
            {{ __('<-- Back') }}
        </a>
    </x-slot>

    <section class="bg-slate-100 dark:bg-gray-900 h-[50vh] flex items-center">
        <div class="p-10 mx-auto max-w-2xl bg-white rounded-2xl">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Change Status</h2>

            <form action="{{ route('guru.update', $status->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="w-full">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select name="status" id="status" class="w-full rounded-md border-gray-300">
                        <option value="sedang dalam tinjauan" class="text-gray-300">--- Pilih Status ---</option>
                        <option value="sedang dalam tinjauan">Sedang Dalam Tinjauan</option>
                        <option value="done">Done</option>
                    </select>
                </div>
                    
                <button type="submit" class="w-full px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-red-900 hover:bg-red-800">
                    Ganti
                </button>
            </form>

        </div>
      </section>
</x-app-layout>

