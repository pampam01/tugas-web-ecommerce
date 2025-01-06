<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto font-lora">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4 font-lora">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                                <th class="text-left font-semibold">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr wire:key="cart-item-<?php echo e($item['product_id']); ?>">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-16 w-16 mr-4" src="<?php echo e(url('/storage', $item['image'])); ?>"
                                                alt="<?php echo e($item['name']); ?>">
                                            <span class="font-semibold"><?php echo e($item['name']); ?></span>
                                        </div>
                                    </td>
                                    <td class="py-4">
                                        <?php echo e('Rp. ' . number_format($item['unit_amount'], 0, ',', '.')); ?>

                                    </td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <button wire:click='decreaseQuantity(<?php echo e($item['product_id']); ?>)'
                                                class="border rounded-md py-2 px-4 mr-2">-</button>
                                            <span class="text-center w-8"><?php echo e($item['quantity']); ?></span>
                                            <button wire:click='increaseQuantity(<?php echo e($item['product_id']); ?>)'
                                                class="border rounded-md py-2 px-4 ml-2">+</button>
                                        </div>
                                    </td>
                                    <td class="py-4">
                                        <?php echo e('Rp. ' . number_format($item['total_amount'], 0, ',', '.')); ?>

                                    </td>
                                    <td><button wire:click="removeFromCart('<?php echo e($item['product_id']); ?>')"
                                            class="bg-slate-300 border-2 border-slate-400 rounded-lg px-3 py-1 hover:bg-red-600 hover:text-white hover:border-red-700">
                                            <span wire:loading.remove
                                                wire:target="removeFromCart('<?php echo e($item['product_id']); ?>')">Remove</span>
                                                <span
                                                wire:loading
                                                wire:target="removeFromCart('<?php echo e($item['product_id']); ?>')"
                                                class="inline-flex items-center text-sm text-neutral-100"
                                            >
                                                <div class="flex items-center">
                                                    <div
                                                    class="h-3 w-3 animate-spin rounded-full border-2 border-solid border-neutral-100 border-t-transparent"
                                                ></div>
                                                <span class="ml-2">Removing...</span>
                                                </div>

                                            </span>

                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center py-4 text-4xl">
                                  <!-- Text for empty cart -->
                                  <div class="flex justify-center">
                                    Your cart is empty :(
                                  </div>

                                  <!-- Image for empty cart -->
                                  <img src="<?php echo e(asset('image/empty.png')); ?>" class="w-32 h-32 my-4 mx-auto" />
                                  

                                  <!-- Button for continue shopping -->
                                  <a href="/products">
                                    <button
                                      class="group relative inline-flex h-10 items-center justify-center overflow-hidden rounded-md bg-neutral-950 px-3 py-1 text-sm font-medium text-neutral-200"
                                    >
                                      <span>Continue Shopping</span>
                                      <div
                                        class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover:w-5 group-hover:translate-x-0 group-hover:pl-1 group-hover:opacity-100"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          fill="none"
                                          viewBox="0 0 24 24"
                                          stroke-width="1.5"
                                          stroke="currentColor"
                                          class="size-5"
                                        >
                                          <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                          />
                                        </svg>
                                      </div>
                                    </button>
                                  </a>
                                </td>
                              </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span><?php echo e('Rp. ' . number_format($grand_total, 0, ',', '.')); ?></span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold"><?php echo e('Rp. ' . number_format($grand_total, 0, ',', '.')); ?></span>
                    </div>
                    <!--[if BLOCK]><![endif]--><?php if($cart_items): ?>
                        <a href="/checkout"
                            class="bg-blue-500 block text-center text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\ecommerceweb\resources\views/livewire/cart-page.blade.php ENDPATH**/ ?>