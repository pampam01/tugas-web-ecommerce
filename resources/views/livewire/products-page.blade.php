<div class="min-h-screen bg-gray-50 md:mx-8 sm:mx-4 mx-2">
    <div class="py-2 px-2">
      <!-- Flex container -->
      <div class="flex flex-col lg:flex-row gap-8 mt-8">
        <!-- Sidebar Filters -->
        <div class="w-full lg:w-64 lg:flex-shrink-0 order-1 lg:order-none">
          <div class="bg-white rounded-lg shadow p-6 space-y-6">
            <div>
              <input
                type="text"
                placeholder="Search items..."
                class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                wire:model.live="searchQuery"
              />
            </div>
            <!-- Categories Dropdown -->
            <div>
              <button
                type="button"
                onclick="toggleCategoriesDropdown()"
                class="flex items-center w-full hover:text-gray-400 font-semibold dark:text-gray-400 dark:hover:text-gray-500"
              >
                Categories
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
                id="categories-dropdown-menu"
                class="hidden dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 w-full mt-1"
              >
                <div class="space-y-2">
                  @foreach ($categories as $cat)
                  <label
                    class="flex items-center space-x-3"
                    wire:key="{{ $cat->id }}"
                  >
                    <input
                      type="checkbox"
                      class="rounded border-gray-300"
                      wire:model.live="selected_categories"
                      value="{{ $cat->id }}"
                    />
                    <span class="text-gray-700 dark:text-gray-300"
                      >{{ $cat->name }}</span
                    >
                  </label>
                  @endforeach
                </div>
              </div>
            </div>

            <!-- Brands Dropdown -->
            <div>
              <button
                type="button"
                onclick="toggleBrandsDropdown()"
                class="flex items-center w-full hover:text-gray-400 font-semibold dark:text-gray-400 dark:hover:text-gray-500"
              >
                Brands
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
                id="brands-dropdown-menu"
                class="hidden dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 mt-1"
              >
                <div class="space-y-2 cursor-pointer">
                  @foreach ($brands as $brand)
                  <label
                    class="flex items-center space-x-3 cursor-pointer"
                    wire:key="{{ $brand->id }}"
                  >
                    <input
                      type="checkbox"
                      class="rounded border-gray-300 cursor-pointer"
                      wire:model.live="selected_brands"
                      value="{{ $brand->id }}"
                    />
                    <span class="text-gray-700 dark:text-gray-300"
                      >{{ $brand->name }}</span
                    >
                  </label>
                  @endforeach
                </div>
              </div>
            </div>

            <!-- Product Status -->
            <div>
              <h3 class="font-medium text-gray-900 mb-4">Product Status</h3>
              <div class="space-y-3">
                <label for="is_featured" class="flex items-center">
                  <input
                    type="checkbox"
                    id="is_featured"
                    class="w-4 h-4 mr-2"
                    wire:model.live="featured"
                    value="1"
                  />
                  <span class="text-gray-700">Featured Products</span>
                </label>
                <label for="on_sale" class="flex items-center">
                  <input
                    type="checkbox"
                    id="on_sale"
                    class="w-4 h-4 mr-2"
                    wire:model.live="on_sale"
                    value="1"
                  />
                  <span class="text-gray-700">On Sale</span>
                </label>
              </div>
            </div>

            <!-- Price Filter -->
            <div>
              <h3 class="font-medium text-gray-900 mb-4">Price</h3>
              <div class="space-y-4">
                <div
                  class="flex justify-between items-center text-sm font-semibold text-gray-700"
                >
                  <span>Selected Range:</span>
                  <span
                    >{{ 'Rp. ' . number_format($price_range, 0, ',', '.') }}</span
                  >
                </div>
                <input
                  type="range"
                  class="w-full h-1 bg-blue-100 rounded appearance-none cursor-pointer"
                  max="2000000"
                  step="100000"
                  wire:model.live="price_range"
                />
                <div class="flex justify-between text-sm text-gray-600">
                  <span>{{ 'Rp. ' . number_format(100000, 0, ',', '.') }}</span>
                  <span>{{ 'Rp. ' . number_format(2000000, 0, ',', '.') }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Grid -->
        <div class="flex-1 order-2">
          <div
            class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6"
          >
            <!-- Active Filters -->
            <div class="flex flex-wrap items-center space-x-2">
              <span class="font-medium text-gray-800">Filter Selected :</span>

              <!-- Display Active Categories -->
              @if (!empty($selected_categories))
              <div class="flex items-center space-x-2">
                @foreach ($selected_categories as $cat_id) @php $category =
                $categories->firstWhere('id', $cat_id); @endphp @if ($category)
                <span
                  class="px-3 py-1 text-sm bg-blue-100 text-blue-800 rounded-full flex items-center space-x-2"
                >
                  <span>{{ $category->name }}</span>
                </span>
                @endif @endforeach
              </div>
              @endif

              <!-- Display Active Brands -->
              @if (!empty($selected_brands))
              <div class="flex items-center space-x-2">
                @foreach ($selected_brands as $brand_id) @php $brand =
                $brands->firstWhere('id', $brand_id); @endphp @if ($brand)
                <span
                  class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full flex items-center space-x-2"
                >
                  <span>{{ $brand->name }}</span>
                </span>
                @endif @endforeach
              </div>
              @endif

              <!-- Display Featured Products -->
              @if ($featured)
              <span
                class="px-3 py-1 text-sm bg-yellow-100 text-yellow-800 rounded-full flex items-center space-x-2"
              >
                <span>Featured Products</span>
              </span>
              @endif
            </div>
          </div>

          <!-- Pengecekan Jika Produk Tidak Ditemukan -->
          @if ($products->isEmpty())
          <div class="flex justify-center items-center h-64">
            <p class="text-xl text-gray-500 font-semibold">
              Barang tidak ditemukan
            </p>
          </div>
          @else
          <!-- Grid Produk -->
          <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"
          >
            @foreach ($products as $prod)
            <div
              class="bg-white rounded-lg overflow-hidden shadow-sm w-full relative group"
            >
              <div class="relative">
                <!-- Label SALE -->
                @if ($prod->is_featured)
                <h1
                  class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold py-1 px-3 rounded-full shadow-md uppercase"
                >
                  On Featured
                </h1>
                @endif
                <!-- Product Image -->
                <img
                  src="{{ url('storage', $prod->images[0]) }}"
                  alt="{{ $prod->name }}"
                  class="h-72 w-auto mx-auto object-cover transition duration-300 group-hover:blur-sm group-hover:brightness-50"
                />

                <!-- Button View Details -->
                <a
                  wire:navigate
                  href="/products/{{ $prod->slug }}"
                  class="absolute inset-0 flex items-center justify-center opacity-0 translate-y-4 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-in-out"
                >
                  <button
                    class="px-4 py-2 bg-white flex items-center gap-2 text-black rounded-md shadow-lg"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                      />
                    </svg>
                    View Detail
                  </button>
                </a>
              </div>

              <div class="p-4">
                <h3 class="text-lg font-medium text-gray-900 font-serif">
                  {{ $prod->name }}
                </h3>

                <div class="mt-2 flex items-center">
                  <svg
                    class="w-4 h-4 text-yellow-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10 15l-5.09 3.09 1.44-6.09-5.09-4.36h6.37l2.27-6.64 2.27 6.64h6.37l-5.09 4.36 1.44 6.09z"
                    ></path>
                  </svg>
                  <!-- Repeat SVG for Ratings -->
                  <span class="ml-2 text-sm text-gray-500">(4.0)</span>
                </div>
                <div class="mt-4 font-semibold font-lora">
                  Price :
                  <div class="flex items-center justify-between">
                    Rp.{{ number_format($prod->price, 0, ',', '.') }}
                    <a href="#" wire:click.prevent="addToCart({{ $prod->id }})">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 hover:text-green-400"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993
                         1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0
                         0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576
                         0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0
                         .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- Pagination -->
          <div class="mt-8">{{ $products->links() }}</div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleCategoriesDropdown() {
      const categoriesMenu = document.getElementById("categories-dropdown-menu");
      categoriesMenu.classList.toggle("hidden");
    }

    function toggleBrandsDropdown() {
      const brandsMenu = document.getElementById("brands-dropdown-menu");
      brandsMenu.classList.toggle("hidden");
    }
  </script>
