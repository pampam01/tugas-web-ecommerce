<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
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
                                            class="bg-slate-300 border-2 border-slate-400 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white hover:border-red-700">
                                            <span wire:loading.remove
                                                wire:target="removeFromCart('<?php echo e($item['product_id']); ?>')">Remove</span>
                                            <span wire:loading
                                                wire:target="removeFromCart('<?php echo e($item['product_id']); ?>')">Removing...</span>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-4xl">Your cart is empty.</td>
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
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>0</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>0</span>
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
<?php /**PATH D:\coding\smester-5\web programming\laravel prayitno 8020220066\testing\testing4\resources\views/livewire/cart-page.blade.php ENDPATH**/ ?>