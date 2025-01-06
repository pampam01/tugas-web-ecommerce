<header class="sticky top-1 z-50 cursor-pointer">
    <nav
      class="p-3 sm:p-5 mt-2 sm:mt-4 mx-4 sm:mx-16 rounded-xl bg-gray-100 shadow-lg mb-4"
    >
      <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a wire:navigate
          href="/"
          class="text-slate-800 text-2xl sm:text-4xl font-bold sm:ml-14 font-lora"
        >
          Ecommerce
        </a>


        <!-- Desktop Navigation Links -->
        <div class="hidden lg:flex space-x-4 mr-8">
          <a
            wire:navigate
            href="/"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 <?php echo e(request()->is('/') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
            Home
          </a>

          <a
            wire:navigate
            href="/products"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 <?php echo e(request()->is('products') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
            Catalogs
          </a>
          <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->guest()): ?>
          <div class="pt-3 md:pt-0 cursor-pointer">
            <button
            wire:navigate
            class="group relative inline-flex h-10  items-center justify-center overflow-hidden rounded-md  font-medium  cursor-pointer "
            href="/login"
          >
            <!-- Teks Hover -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9 hover:text-green-600">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                  </svg>

            <!-- Ikon Panah -->

          </button>
          </div>

          <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

          <!-- Cart Icon for Desktop -->
          <a
            wire:navigate
            href="/cart"
            class="relative font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 hidden lg:flex <?php echo e(request()->is('cart') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
            <span
              class="absolute -top-1 -right-1 bg-slate-500 text-white px-2 py-0.5 rounded-full text-sm"
              ><?php echo e($total_count); ?></span
            >
          </a>
          <!-- User Icon for Desktop -->
          <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
          <div
            class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:mt-2"
          >
            <button
              type="button"
              class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500"
            >
              <?php echo e(auth()->user()->name); ?>

              <svg
                class="ms-2 w-4 h-4"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="m6 9 6 6 6-6" />
              </svg>
            </button>

            <div
              class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5"
            >
              <a
                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="/my-orders"
              >
                My Orders
              </a>
              <a
                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="/logout"
              >
                Logout
              </a>
            </div>
          </div>
          <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Mobile Menu Button -->
        <button
          id="mobileMenuToggle"
          class="p-2 text-slate-700 hover:text-slate-900 lg:hidden"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16m-7 6h7"
            />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div
        id="mobileMenu"
        class="hidden absolute top-full left-0 right-0 bg-white shadow-lg rounded-b-xl mt-2 py-4 px-4 lg:hidden"
      >
        <div class="flex flex-col space-y-2">
          <a
            wire:navigate
            href="/"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 <?php echo e(request()->is('/') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
            Home
          </a>
          <a
            wire:navigate
            href="/categories"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 <?php echo e(request()->is('categories') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
            Categories
          </a>
          <a
            wire:navigate
            href="/products"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200 <?php echo e(request()->is('products') ? 'bg-slate-700 text-white px-3 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0)]' : ''); ?>"
          >
            Products
          </a>
          <a
            wire:navigate
            href="/cart"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200"
          >
            Cart
          </a>
          <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->guest()): ?>
          <a
            href="/login"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200"
          >
            Log in
          </a>
          <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
          <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
          <a
            href="/my-orders"
            class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200"
          >
            My Orders
          </a>
          <a
          href="/logout"
          class="font-serif text-lg rounded-xl hover:bg-slate-700 hover:text-white px-3 py-2 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0)] transition duration-200"
        >
          Logout
        </a>
          <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
      </div>
    </nav>
  </header>

  <!-- JavaScript for Mobile Menu Toggle -->
  <script>
    document
      .getElementById("mobileMenuToggle")
      .addEventListener("click", function () {
        var menu = document.getElementById("mobileMenu");
        menu.classList.toggle("hidden");
      });
  </script>
<?php /**PATH D:\ecommerceweb\resources\views/livewire/partials/navbar.blade.php ENDPATH**/ ?>