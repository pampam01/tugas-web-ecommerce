<div class="max-w-7xl mx-auto mt-4 px-4 mb-9">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="flex gap-4">
                <!-- Thumbnail Column -->
                <div class="flex flex-col gap-2 w-1/4 ">

                    @foreach ($product->images as $index => $image)
                        <img
                            src="{{ url('storage', $image) }}"
                            alt="{{ $product->name }}"
                            class="aspect-square rounded-lg object-cover cursor-pointer border-2 border-transparent hover:border-blue-500 transition"
                            onclick="updateMainImage('{{ url('storage', $image) }}')"
                        />
                    @endforeach

                </div>

                <!-- Main Image -->
                <div class="w-3/4">
                    <img
                        id="mainImage"
                        src="{{ url('storage', $product->images[0]) }}"
                        alt="{{ $product->name }}"
                        class="rounded-lg w-[80%] h-[80%] mx-auto mt-6 object-cover cursor-pointer"
                        onclick="showImageModal(this.src)"
                    />
                </div>
            </div>

            <!-- Modal -->
            <div id="imageModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
                <div class="relative max-w-4xl">
                    <!-- Close Button -->
                    <button
                        onclick="closeImageModal()"
                        class="absolute top-3 left-3 = text-black text-2xl  rounded-full w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                          </svg>

                    </button>
                    <!-- Modal Image -->
                    <img id="modalImage" src="" alt="Image" class="rounded-lg bg-white w-[28rem] h-[28rem] object-contain" />
                </div>
            </div>

            <!-- Right Column - Product Information -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <h1 class="text-2xl font-bold font-serif text-gray-900">
                            {{ $product->name }}
                        </h1>
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
                            <svg
                                class="w-4 h-4 text-gray-300"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10 15l-5.09 3.09 1.44-6.09-5.09-4.36h6.37l2.27-6.64 2.27 6.64h6.37l-5.09 4.36 1.44 6.09z"
                                ></path>
                            </svg>
                            <span class="ml-2 text-sm text-gray-500">(4.0) 1240 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <span class="text-[20px] font-lora font-bold text-gray-900">
                           Rp.{{ number_format($product->price, 0, ',', '.') }}
                        </span>

                    </div>

                    <div class="prose prose-sm font-robo text-gray-500">
                        <p>
                            {!! Str::markdown($product->description) !!}
                        </p>
                    </div>
                </div>

                <!-- Product Options -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Quantity</h3>
                        <div class="relative flex flex-row w-auto h-10 mt-6 bg-transparent rounded-lg">
                            <button wire:click="decrementQuantity"
                                class="w-12 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-400">
                                <span class="m-auto text-2xl font-thin">-</span>
                            </button>
                            <input type="number" wire:model.live='quantity' readonly
                                class="w-12 flex items-center font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-300 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black"
                                placeholder="1">
                            <button wire:click="incrementQuantity"
                                class="w-12 h-full text-gray-600 bg-gray-300 rounded-r outline-none cursor-pointer dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-400">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                     <button
                        wire:click="addToCart({{ $product->id }})"
                        class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-neutral-950 px-6 font-medium text-neutral-200 duration-500">
                        <div class="translate-x-0 opacity-100 transition group-hover:-translate-x-[150%] group-hover:opacity-0">
                            Add to Cart
                        </div>
                        <div class="absolute translate-x-[150%] opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>
                        </div>
                     </button>

                     <button
                      class="p-3 border border-gray-300 rounded-md hover:bg-gray-50">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-500 hover:text-red-700">
                      <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                      </svg>
                     </button>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showImageModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = imageSrc;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

    // Update main image when thumbnail is clicked
    function updateMainImage(imageSrc) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = imageSrc;
    }

</script>
