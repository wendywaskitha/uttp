

@extends('layouts.homelayouts')

@section('konten')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Sistem Informasi Potensi UTTP (SIPO UTTP)</h1>
        <p class="mb-8 leading-relaxed">Sistem Informasi ini dibuat untuk mengumpulkan data potensi Alat - Alat Ukur, Takar, Timbang dan Perlengkapanya yang ada di Kabupaten Muna Barat. SIPO UTTP ini di kelola oleh Unit Pelayanan Teknis Metrologi Legal yang berada di bawah Dinas Perdagangan dan Perindustrian Kabupaten Muna Barat.</p>
        <div class="flex lg:flex-row md:flex-col">
          <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
              <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
              <span class="title-font font-medium">Google Play</span>
            </span>
          </button>
          <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
              <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
              <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">Download on the</span>
              <span class="title-font font-medium">App Store</span>
            </span>
          </button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://metrologi.disdag.padang.go.id/up/konten/09122019122246metrologi.jpg">
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Informasi Metrologi Legal</h1>
      </div>
      <div class="flex flex-wrap">
        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
          <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Peta Sebaran UTTP</h2>
          <p class="leading-relaxed text-base mb-4">Sebaran UTTP di Kabupaten Muna Barat berdasarkan lokasi</p>
          <a class="text-red-500 inline-flex items-center">Selengkapnya
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
          <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Jumlah UTTP</h2>
          <p class="leading-relaxed text-base mb-4">Jumlah Alat - Alat Ukur, Takar, Timbang dan Perlengkapannya yang ada di Kabupeten Muna Barat.</p>
          <a class="text-red-500 inline-flex items-center">Selengkapnya
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
          <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Layanan</h2>
          <p class="leading-relaxed text-base mb-4">Layanan Publik berbasis online untuk mempermudah masyarakat mendapatkan layanan Kemetrologian.</p>
          <a class="text-red-500 inline-flex items-center">Selengkapnya
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
          <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Regulasi Retribusi</h2>
          <p class="leading-relaxed text-base mb-4">Daftar Besaran biaya Retribusi Tera dan Tera Ulang UTTP</p>
          <a class="text-red-500 inline-flex items-center">Selengkapnya
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- Blog --}}
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Berita Terbaru</h1>
        </div>
      <div class="flex flex-wrap -mx-4 -my-8">
        <div class="py-8 px-4 lg:w-1/3">
          <div class="h-full flex items-start">
            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
              <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
              <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
            </div>
            <div class="flex-grow pl-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-red-500 mb-1">CATEGORY</h2>
              <h1 class="title-font text-xl font-medium text-gray-900 mb-3">The 400 Blows</h1>
              <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <a class="inline-flex items-center">
                <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-3">
                  <span class="title-font font-medium text-gray-900">Alper Kamu</span>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="py-8 px-4 lg:w-1/3">
          <div class="h-full flex items-start">
            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
              <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
              <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
            </div>
            <div class="flex-grow pl-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-red-500 mb-1">CATEGORY</h2>
              <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
              <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <a class="inline-flex items-center">
                <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-3">
                  <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="py-8 px-4 lg:w-1/3">
          <div class="h-full flex items-start">
            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
              <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
              <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
            </div>
            <div class="flex-grow pl-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-red-500 mb-1">CATEGORY</h2>
              <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
              <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <a class="inline-flex items-center">
                <img alt="blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-3">
                  <span class="title-font font-medium text-gray-900">Henry Letham</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Kontak Kami --}}
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ALAMAT</h2>
            <p class="mt-1">Jln. Poros Wapae Jaya Desa Wapae Jaya Kec. Tiworo Tengah Kab. Muna Barat Prov. Sulawesi Tenggara.</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-red-500 leading-relaxed">disperdagin.munabarat.kab@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>

  {{-- Instansi Terkait --}}
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-10">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Instansi Terkait</h1>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://adminkom.org/po-content/uploads/logo-kementerian-perdagangan-png-2.png">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Kementerian Perdagangan</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://ditjenpktn.kemendag.go.id/theme/default/assets/images/repository/hero-about-us.jpg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Direktorat Metrologi</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://pbs.twimg.com/profile_images/1415149779894497285/f4Zw9HCg_400x400.jpg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Balai Standarisasi Metrologi Legal Regional IV</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Lambang_Kabupaten_Muna_Barat.png">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Pemerintah Kabupaten Muna Barat</h2>
      </div>
    </div>
  </div>
</section>

@endsection