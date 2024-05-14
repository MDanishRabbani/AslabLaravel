<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-6">
            <a href="https://www.malasngoding.com" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500">www.malasngoding.com</a>
        </h2>
        <h3 class="text-xl font-semibold mb-4">Edit Pegawai</h3>

        <a href="/pegawai" class="inline-block text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800">Kembali</a>

        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post" class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" id="nama" name="nama" required="required" value="{{ $p->pegawai_nama }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:border-neutral-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-blue-400 dark:focus:border-blue-400">
            </div>

            <div class="mb-4">
                <label for="jabatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:border-neutral-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-blue-400 dark:focus:border-blue-400">
            </div>

            <div class="mb-4">
                <label for="umur" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Umur</label>
                <input type="number" id="umur" name="umur" required="required" value="{{ $p->pegawai_umur }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:border-neutral-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-blue-400 dark:focus:border-blue-400">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                <textarea id="alamat" name="alamat" required="required" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:border-neutral-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-blue-400 dark:focus:border-blue-400">{{ $p->pegawai_alamat }}</textarea>
            </div>

            <div class="flex justify-end">
                <input type="submit" value="Simpan Data" class="inline-block text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-500 dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800">
            </div>
        </form>
        @endforeach
    </div>
</body>
</html>
