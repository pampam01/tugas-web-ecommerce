<head>
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>

<style>
    .slider-transition {
    transition: transform 0.5s ease-in-out;
  }
</style>

<div>
    <!-- Hero Section -->
    <section class="relative mx-4 lg:mx-16 mt-4 font-lora">
        <div
          class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 py-20 lg:py-32 bg-no-repeat bg-cover rounded-md"
          style="background-image: url('<?php echo e(asset('image/hero.jpg')); ?>')"
        >
          <!-- Text Content -->
          <div class="text-left mx-4 lg:mx-14">
            <p class="text-gray-800 text-3xl lg:text-5xl font-semibold uppercase font-lora">
              Unleash Your
            </p>
            <h1 class="text-4xl lg:text-6xl tracking-wider font-bold text-gray-700 mt-2 font-serif">
              Unique Style
            </h1>
            <p class="text-slate-100 mt-4 mb-5 font-semibold w-full lg:w-[40%]">
              Your style is your signature, and we’re here to make it unforgettable. Discover pieces that reflect your personality and help you stand out in every crowd. It’s time to own your look and shine like never before.
            </p>

            <!-- Shop Now Button -->
            <a href="/products">
              <button
                class="group relative inline-flex h-[calc(42px+7px)] items-center justify-center rounded-full bg-neutral-950 py-1 lg:py-3 pl-6 pr-14 font-medium text-neutral-50"
              >
                <span class="z-10 pr-2">Shop Now</span>
                <div
                  class="absolute right-2 inline-flex h-9 w-9 items-center justify-end rounded-full bg-neutral-700 transition-[width] group-hover:w-[calc(95%-10px)]"
                >
                  <div class="mr-2 flex items-center justify-center">
                    <svg
                      width="15"
                      height="15"
                      viewBox="0 0 15 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 text-neutral-50"
                    >
                      <path
                        d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                        fill="currentColor"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                </div>
              </button>
            </a>
          </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-gray-100 relative mx-4 lg:mx-16 mt-4" id="about">
        <!-- About Us Title -->
        <div class="text-center mb-8">
          <h2 class="text-2xl font-bold text-gray-800 md:text-4xl font-lora">About Us</h2>
        </div>

        <!-- Content Section -->
        <div
          class="flex flex-col md:flex-row justify-center items-center gap-8 max-w-7xl mx-auto px-4"
          
        >
          <!-- Image Section -->
          <div class="flex-1">
            <img
              class="rounded-lg mx-auto h-[250px] md:max-w-sm"
              src="<?php echo e(asset('image/about.jpg')); ?>"
              alt="About Image"
            />
          </div>

          <!-- Text Section -->
          <div class="flex-2 text-left">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4 leading-snug">
              Mengapa Anda harus <br />segera berbelanja di toko kami?
            </h2>
            <p class="text-gray-600 text-base font-lora md:text-lg leading-relaxed">
              Setiap bagiannya merupakan perayaan keanggunan abadi dan kontemporer
              tren, memastikan lemari pakaian Anda memiliki cita rasa yang halus.
              Mengangkat gaya Anda dengan potongan-potongan yang berbicara kepada
              penikmat dalam diri Anda.
            </p>
          </div>
        </div>

        <!-- Features Section -->
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 max-w-7xl mx-auto px-4"
          
        >
          <!-- Feature 1 -->
          <div class="bg-white rounded-lg shadow-lg p-6 text-center transition-transform duration-300 ease-in-out hover:translate-y-[-10px] hover:shadow-[10px_10px_20px_rgba(0,0,0,0.5)]">
            <div class="text-4xl text-[#FFD700] mb-4">
              <i class="fas fa-gem"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Koleksi Indah untuk Setiap Selera
            </h3>
            <p class="text-sm text-gray-600">
              Setiap bagiannya merupakan bukti keanggunan abadi dan kontemporer tren,
              memastikan pakaian Anda mencerminkan kecerdasan Anda mencicipi.
            </p>
          </div>



          <!-- Feature 2 -->
          <div class="bg-white rounded-lg shadow-lg p-6 text-center transition-transform duration-300 ease-in-out hover:translate-y-[-10px] hover:shadow-[10px_10px_20px_rgba(0,0,0,0.5)]">
            <div class="text-4xl text-[#FFD700] mb-4">
              <i class="fas fa-gem"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Antarmuka Intuitif untuk Belanja Mudah
            </h3>
            <p class="text-sm text-gray-600">
              Navigasi yang mulus dan fitur intuitif menjamin kemudahan pengalaman
              berbelanja, memungkinkan Anda fokus pada hal yang paling penting.
            </p>
          </div>

          <!-- Feature 3 -->
          <div class="bg-white rounded-lg shadow-lg p-6 text-center transition-transform duration-300 ease-in-out hover:translate-y-[-10px] hover:shadow-[10px_10px_20px_rgba(0,0,0,0.5)]">
            <div class="text-4xl text-[#FFD700] mb-4">
              <i class="fas fa-gem"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">Dibuat dengan Bahan Unggul</h3>
            <p class="text-sm text-gray-600">
              Pakaian kami lebih dari sekedar fashion; mereka adalah manifestasi dari
              kualitas tanpa kompromi untuk meningkatkan setiap momen Anda.
            </p>
          </div>

          <!-- Feature 4 -->
          <div class="bg-white rounded-lg shadow-lg p-6 text-center transition-transform duration-300 ease-in-out hover:translate-y-[-10px] hover:shadow-[10px_10px_20px_rgba(0,0,0,0.5)]">
            <div class="text-4xl text-[#FFD700] mb-4">
              <i class="fas fa-gem"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Pengiriman Cepat dan Dapat Diandalkan
            </h3>
            <p class="text-sm text-gray-600">
              Rasakan sensasi tiba tepat waktu. Pengiriman kami yang efisien sistem
              memastikan temuan mode terbaru Anda tiba tepat di tangan Anda ambang
              pintu.
            </p>
          </div>
        </div>
    </section>

    <!-- Brand Section -->
    <section id="brands" class="py-16 mt-5 px-8 bg-gray-50">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold font-lora text-gray-800 mb-6">
            We Supported By
        </h2>
        <p class="text-gray-600 mb-12">
            Explore products from the most trusted and popular brands we partner
            with.
        </p>
        <div
            class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex justify-center items-center bg-white shadow-md p-4 rounded-lg transition-transform duration-300 ease-in-out hover:translate-y-[-10px] hover:shadow-[10px_10px_20px_rgba(0,0,0,0.5)]" wire:key="<?php echo e($brand->id); ?>">
                    <a href="/products?selected_brands[0]=<?php echo e($brand->id); ?>">
                        <img src="<?php echo e(url('storage', $brand->image)); ?>" alt="<?php echo e($brand->name); ?>" class="h-12 object-contain" />
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

        </div>
    </div>
    </section>

    <!-- Category Section -->
    <section>
        <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="max-w-[85rem] flex justify-between px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
              <h1 class="text-[4rem] font-bold font-lora my-auto text-slate-500">
                Select Your <br />
                Favorite <br />
                <span class="text-[#FFD700]">Categories</span>
              </h1>
              <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                  wire:navigate
                  class="group relative overflow-hidden rounded-2xl cursor-pointer transition-all duration-300 hover:shadow-xl bg-white border shadow-sm  dark:bg-slate-900 dark:border-gray-800"
                  href="/products?selected_categories[0]=<?php echo e($cat->id); ?>"
                  wire:key="<?php echo e($cat->id); ?>"
                >
                  <!-- Overlay effect -->
                  <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-all duration-300 z-10"></div>
                  <!-- Image -->
                  <img
                    src="<?php echo e(url('storage', $cat->image)); ?>"
                    alt="<?php echo e($cat->name); ?>"
                    class="w-full h-[350px] object-cover transform group-hover:scale-110 transition-transform duration-300"
                  />
                  <!-- Text Content -->
                  <div class="absolute bottom-0 left-0 right-0 p-6 text-white z-20">
                    <h3 class="text-2xl font-bold mb-2 group-hover:text-[#FFD700] dark:group-hover:text-gray-400">
                      <?php echo e($cat->name); ?>

                    </h3>
                  </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
              </div>
            </div>
          </div>

    </section>

    <!-- New Collection Section -->
    <section id="new" class="mx-16 bg-gray-100 mt-5 rounded-md p-6">
        <h2 class="text-center mb-8 text-3xl font-lora font-bold text-gray-800">Our New Collection</h2>

        <!-- Cek apakah $products memiliki data -->
        <!--[if BLOCK]><![endif]--><?php if($products->isNotEmpty()): ?>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Looping Produk dari Backend -->
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div wire:key="<?php echo e($product->id); ?>" class="bg-white rounded-lg overflow-hidden shadow-sm w-[17rem]">
                        <!-- Card Image dengan Hover Effect -->
                        <div class="relative group">
                            <img
                                src="<?php echo e(url('storage', $product->images[0])); ?>"
                                alt="<?php echo e($product->name); ?>"
                                class="h-72 w-auto mx-auto object-cover transition duration-300 group-hover:blur-sm group-hover:brightness-50"
                            />
                            <!--[if BLOCK]><![endif]--><?php if($product->is_featured): ?>
                            <span
                                class="absolute top-2 left-2 bg-red-600 text-white px-2 py-1 text-sm font-lora rounded-xl">
                                ON FEATURED
                            </span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 translate-y-4 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                <a wire:navigate
                                    href="products/<?php echo e($product->slug); ?>"
                                    class="bg-white text-black flex gap-1 px-2 py-2 rounded-xl font-serif text-sm hover:text-slate-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 my-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Show Detail
                                </a>
                            </div>
                        </div>

                        <!-- Info Produk -->
                        <div class="p-4">
                            <h3 class="text-sm font-lora text-gray-900">category: <?php echo e($product->category->name); ?></h3>
                            <h3 class="text-lg font-semibold font-serif mt-2 text-gray-900"><?php echo e($product->name); ?></h3>
                            <div class="mt-2 flex items-center">
                                <!-- Rating (Icon Bintang) -->
                                <!--[if BLOCK]><![endif]--><?php for($i = 0; $i < 5; $i++): ?>
                                    <svg
                                        class="w-4 h-4 <?php echo e($i < 4 ? 'text-yellow-400' : 'text-gray-300'); ?>"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 15l-5.09 3.09 1.44-6.09-5.09-4.36h6.37l2.27-6.64 2.27 6.64h6.37l-5.09 4.36 1.44 6.09z">
                                        </path>
                                    </svg>
                                <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                <span class="ml-2 text-sm text-gray-500">(4.0)</span>
                            </div>
                            <div class="mt-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-semibold font-lora text-gray-900">Rp. <?php echo e(number_format($product->price, 0, ',', '.')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php else: ?>
            <!-- Jika Tidak Ada Produk -->
            <p class="text-center text-gray-500">No products available in this collection.</p>
            <div id="lottie-animation" class="w-64 h-64 mx-auto"></div>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!-- Tombol Lihat Selengkapnya -->
        <!--[if BLOCK]><![endif]--><?php if($products->isNotEmpty()): ?>
        <div class="flex justify-end mt-7">
            <a href="products?featured=true" class="float-right text-sm text-gray-600">
                <button
                    class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-neutral-950 px-8 font-medium text-neutral-200">
                    <span>Show More</span>
                    <div
                        class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover:w-5 group-hover:translate-x-0 group-hover:pl-1 group-hover:opacity-100">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z">
                            </path>
                        </svg>
                    </div>
                </button>
            </a>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </section>


    <!-- Our Team -->
    <div class="bg-white relative px-4 py-12 overflow-hidden">
        <div class="max-w-6xl mx-auto">
          <!-- Heading -->
          <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
              What Our Team Say
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
              Bro, als je de volgende keer een taak hebt, doe die dan. mensen op het punt staan ​​te sterven, accepteer je dat je klaar bent met een varken
            </p>
          </div>

          <!-- Slider -->
          <div class="relative">
            <!-- Left Button -->
            <button
              id="leftButton"
              class="absolute top-1/2 -translate-y-1/2 -left-4 md:-left-6 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center bg-white rounded-full shadow-lg text-gray-800 hover:text-gray-600 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 z-10"
              aria-label="Slide left"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 19l-7-7 7-7"
                />
              </svg>
            </button>

            <!-- Slider Container -->
            <div id="sliderContainer" class="overflow-hidden">
              <div id="sliderContent" class="flex slider-transition">
                <!-- Testimonial Cards -->
                <div class="bg-white p-6 rounded-2xl  min-w-full">
                  <div class="flex items-center mb-4 gap-2">
                    <img
                      src="./image/pampam.png"
                      alt="pampam"
                      class="w-16 h-16 rounded-full object-cover"
                    />
                    <div>
                      <h3 class="font-semibold text-lg">Prayitno</h3>
                      <p class="text-gray-600 text-sm">Back-End</p>
                    </div>
                  </div>

                  <p class="text-gray-700 leading-relaxed">
                    Bekerja dengan tim ini benar-benar sebuah pengalaman yang menyenangkan.
                    Perhatian mereka terhadap detail dan solusi kreatif yang diberikan sangat melampaui ekspektasi kami dalam pengembangan backend.
                  </p>
                </div>

                <!-- More Cards -->
                <div class="bg-white p-6 rounded-2xl min-w-full">
                  <div class="flex items-center mb-4 gap-2">
                    <img
                      src="./image/adit.png"
                      alt="adit"
                      class="w-16 h-16 rounded-full object-cover"
                    />
                    <div>
                      <h3 class="font-semibold text-lg">Praditya Oktanza</h3>
                      <p class="text-gray-600 text-sm">Front-End</p>
                    </div>
                  </div>

                  <p class="text-gray-700 leading-relaxed">
                    Tim ini menunjukkan dedikasi luar biasa dalam pengembangan front end.
                    Hasil kerja mereka sangat detail dan responsif, memberikan pengalaman pengguna yang optimal dan melebihi harapan kami.
                  </p>
                </div>

                <div class="bg-white p-6 rounded-2xl  min-w-full">
                  <div class="flex items-center mb-4 gap-2">
                    <img
                      src="./image/dinda.png"
                      alt="dinda"
                      class="w-16 h-16 rounded-full object-cover"
                    />
                    <div>
                      <h3 class="font-semibold text-lg">Dinda Putri</h3>
                      <p class="text-gray-600 text-sm">UI/UX</p>
                    </div>
                  </div>

                  <p class="text-gray-700 leading-relaxed">
                    Desain UI/UX yang dihasilkan tim ini sangat memukau.
                    Kreativitas mereka dalam menciptakan antarmuka yang menarik dan pengalaman pengguna yang intuitif benar-benar melampaui ekspektasi kami.
                  </p>
                </div>
              </div>
            </div>

            <!-- Right Button -->
            <button
              id="rightButton"
              class="absolute top-1/2 -translate-y-1/2 -right-4 md:-right-6 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center bg-white rounded-full shadow-lg text-gray-800 hover:text-gray-600 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 z-10"
              aria-label="Slide right"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </button>
          </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="py-14 font-poppins dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <!-- Contact Header -->
            <div class="text-center mb-16">
              <div class="flex justify-center mb-6">
                <div
                  class="w-12 h-12 bg-black rounded-lg flex items-center justify-center"
                >
                  <svg
                    class="w-6 h-6 text-white"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M3 20H21M3 12H21M3 4H21"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                    />
                  </svg>
                </div>
              </div>
              <h2 class="text-3xl font-bold mb-2">Contact our friendly team</h2>
              <p class="text-gray-600">Let us know how we can help.</p>
            </div>

            <!-- Contact Options -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-16">
              <!-- Chat To sales -->
              <div
                class="bg-white p-6 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors"
              >
                <div
                  class="w-8 h-8 bg-gray-50 rounded-xl flex items-center justify-center mb-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                    />
                  </svg>
                </div>
                <h3 class="font-semibold mb-1">Chat to sales</h3>
                <p class="text-sm text-gray-600 mb-2">
                  Speak to our friendly team.
                </p>
                <p class="text-sm text-gray-900">sales@untitled.com</p>
              </div>

              <!-- Chat to support -->
              <div
                class="bg-white p-6 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors"
              >
                <div
                  class="w-8 h-8 bg-gray-50 rounded-xl flex items-center justify-center mb-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"
                    />
                  </svg>
                </div>
                <h3 class="font-semibold mb-1">Chat to Support</h3>
                <p class="text-sm text-gray-600 mb-2">
                  Speak to our friendly team.
                </p>
                <p class="text-sm text-gray-900">sales@untitled.com</p>
              </div>

              <!-- Visit Us -->
              <div
                class="bg-white p-6 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors"
              >
                <div
                  class="w-10 h-10 bg-gray-50 rounded-lg flex items-center justify-center mb-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                </div>
                <h3 class="font-semibold mb-1">Visit Us</h3>
                <p class="text-sm text-gray-600 mb-2">
                  Speak to our friendly team.
                </p>
                <p class="text-sm text-gray-900">sales@untitled.com</p>
              </div>

              <!-- Call us -->
              <div
                class="bg-white p-6 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors"
              >
                <div
                  class="w-10 h-10 bg-gray-50 rounded-lg flex items-center justify-center mb-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                    />
                  </svg>
                </div>
                <h3 class="font-semibold mb-1">Call Support</h3>
                <p class="text-sm text-gray-600 mb-2">
                  Speak to our friendly team.
                </p>
                <p class="text-sm text-gray-900">sales@untitled.com</p>
              </div>
            </div>

            <!-- FAQ Section -->
            <div class="max-w-3xl mx-auto">
              <h3 class="text-2xl font-bold mb-8 text-center">asked questions</h3>
              <!-- Example FAQ Item 1-->
              <div class="border-t border-gray-200">
                <div class="border-b border-gray-200 last:border-0">
                  <button
                    class="w-full py-6 flex justify-between items-center text-left"
                    onclick="toggleFaq(0)"
                  >
                    <span class="font-medium"
                      >Apakah saya bisa mengembalikan barang yang sudah
                      dibeli?</span
                    >
                    <svg
                      id="chevron-0"
                      class="w-5 h-5 transform transition-transform"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="faq-0" class="hidden pb-6 text-gray-600">
                    Ya, kami menerima pengembalian barang dalam waktu 30 hari
                    setelah pembelian. Pastikan barang masih dalam kondisi asli dan
                    belum digunakan. Silakan hubungi tim layanan pelanggan kami
                    untuk memproses pengembalian.
                  </div>
                </div>
              </div>

              <!-- Example FAQ Item 2 -->
              <div class="border-t border-gray-200">
                <div class="border-b border-gray-200 last:border-0">
                  <button
                    class="w-full py-6 flex justify-between items-center text-left"
                    onclick="toggleFaq(1)"
                  >
                    <span class="font-medium"
                      >Berapa lama waktu pengiriman barang?</span
                    >
                    <svg
                      id="chevron-1"
                      class="w-5 h-5 transform transition-transform"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="faq-1" class="hidden pb-6 text-gray-600">
                    Waktu pengiriman bergantung pada lokasi Anda. Untuk pengiriman
                    dalam negeri, biasanya membutuhkan 3-5 hari kerja. Untuk
                    pengiriman internasional, waktu pengiriman bisa memakan waktu
                    7-14 hari kerja.
                  </div>
                </div>
              </div>

              <!-- Example FAQ Item 3 -->
              <div class="border-t border-gray-200">
                <div class="border-b border-gray-200 last:border-0">
                  <button
                    class="w-full py-6 flex justify-between items-center text-left"
                    onclick="toggleFaq(2)"
                  >
                    <span class="font-medium">
                      Metode pembayaran apa saja yang tersedia?</span
                    >
                    <svg
                      id="chevron-2"
                      class="w-5 h-5 transform transition-transform"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="faq-2" class="hidden pb-6 text-gray-600">
                    Kami menerima berbagai metode pembayaran, termasuk transfer
                    bank, kartu kredit/debit, dan dompet digital seperti PayPal dan
                    e-wallet lokal. Pilih metode yang paling nyaman untuk Anda saat
                    checkout.
                  </div>
                </div>
              </div>

              <!-- Load More Button -->
              <div class="text-center mt-8">
                <button
                  class="bg-gray-900 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition-colors"
                >
                  Ask More
                </button>
              </div>
            </div>
          </div>
    </section>
</div>

<script>
 function toggleFaq(index) {
    const faq = document.getElementById(`faq-${index}`);
    const chevron = document.getElementById(`chevron-${index}`);
    if (faq.classList.contains("hidden")) {
        faq.classList.remove("hidden");
        chevron.classList.add("rotate-180");
    } else {
        faq.classList.add("hidden");
        chevron.classList.remove("rotate-180");
    }
    }

    const leftButton = document.getElementById("leftButton");
    const rightButton = document.getElementById("rightButton");
    const sliderContent = document.getElementById("sliderContent");

    let currentIndex = 0;
    const totalSlides = sliderContent.children.length;

    function updateSlider() {
      sliderContent.style.transform = `translateX(-${currentIndex * 100}%)`;
      leftButton.disabled = currentIndex === 0;
      rightButton.disabled = currentIndex === totalSlides - 1;
    }

    leftButton.addEventListener("click", () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
      }
    });

    rightButton.addEventListener("click", () => {
      if (currentIndex < totalSlides - 1) {
        currentIndex++;
        updateSlider();
      }
    });

    updateSlider(); // Initial update
</script>



<?php /**PATH D:\ecommerceweb\resources\views/livewire/home-page.blade.php ENDPATH**/ ?>