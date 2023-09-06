@extends('layouts.sidebar')

@section('content')

<div class="text-white p-8"> {{-- Tambahkan padding untuk memberi ruang di sekitar konten --}}

    <h1 class="text-4xl font-bold mb-4">Hallo Devit Sayang Iyahh ..  xd</h1>
    <h2 class="text-2xl mb-4">Selamat Datang di Website Sayang</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"> {{-- Gunakan grid untuk tata letak gambar --}}
        <div class="rounded-lg shadow-xl dark:shadow-gray-800">
            <img class="h-auto w-full rounded-lg" src="https://lh3.googleusercontent.com/drive-viewer/AITFw-w4yGO779hiaJwrw2ecLsLyL-uld1Ud6onhhJCw7iFOm4tHR_EEMJELBbvxmpm-qM0c3HKKoEmceAXzK6Esl3R6UUZsaQ=s1600" alt="image description">

        </div>

        <div class="rounded-lg shadow-xl dark:shadow-gray-800">
            <img class="h-auto w-full rounded-lg" src="https://lh3.googleusercontent.com/drive-viewer/AITFw-wra7zg8ZcayqYAGPgysQ0zckWWLjEJ0cF7Yw7wyAOtY7DIwuJkXKsVCRd7ffOusOi_X0VB03XdB2TEEB_tLZ8ZXyb0yg=s1600" alt="image description">
        </div>

        <div class="rounded-lg shadow-xl dark:shadow-gray-800">
            <img class="h-auto w-full rounded-lg" src="https://lh3.googleusercontent.com/drive-viewer/AITFw-xYGduYxuaUyIeC5c_VH6ZT9LRwYCnyu5rOlYmEiAgCQ3Y_iL5v9zmNHot5g74Jj1ScP11hsnd5DKRYbyOIbTB3DzxJXw=s1600" alt="image description">
            </div>
        </div>
    </div>

</div>

@endsection
