@extends('layouts.layananlayouts')

@section('layanan')

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Layanan UPT Metrologi Legal
        <br class="hidden sm:block">Dinas Perdagangan dan Perindustrian Kabupaten Muna Barat
      </h1>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/2 flex">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-4 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Layanan Tera</h2>
            <p class="leading-relaxed text-base">Kegiatan menandai dengan tanda Tera Sah atau Tera Batal yang berlaku, atau memberikan keterangan-keterangan tertulis yang bertanda Tera Sah atau tanda Tera Batal yang berlaku, dilakukan oleh pegawai yang berhak melakukannya berdasarkan pengujian yang dijalankan atas alat-alat UTTP yang belum dipakai, sesuai persyaratan dan atau ketentuan yang berlaku.</p>
          </div>
        </div>

        

        <div class="p-4 md:w-1/2 flex">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-4 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Layanan Tera Ulang</h2>
            <p class="leading-relaxed text-base">Kegiatan menandai berkala dengan tanda Tera Sah atau Tera Batal yang berlaku, dilakukan oleh pegawai yang berhak melakukannya berdasarkan pengujian yang dijalankan atas alat-alat UTTP.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection