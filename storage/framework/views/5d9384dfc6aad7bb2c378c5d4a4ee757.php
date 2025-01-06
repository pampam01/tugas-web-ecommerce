<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">My Orders</h1>
    <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Payment
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order
                                    Amount</th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $status = '';

                                    if ($order->status == 'new') {
                                        $status = 'bg-blue-500';
                                    } elseif ($order->status == 'processing') {
                                        $status = 'bg-yellow-500';
                                    } elseif ($order->status == 'shipped') {
                                        $status = 'bg-green-500';
                                    } elseif ($order->status == 'delivered') {
                                        $status = 'bg-green-500';
                                    } elseif ($order->status == 'cancelled') {
                                        $status = 'bg-red-500';
                                    }
                                ?>

                                <?php
                                    $payment = '';

                                    if ($order->payment_status == 'paid') {
                                        $payment = 'bg-green-500';
                                    } elseif ($order->payment_status == 'pending') {
                                        $payment = 'bg-yellow-500';
                                    } elseif ($order->payment_status == 'failed') {
                                        $payment = 'bg-red-500';
                                    }
                                ?>
                                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800"
                                    wire:key="<?php echo e($order->id); ?>">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        <?php echo e($order->id); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <?php echo e($order->created_at->format('d-m-Y')); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <span
                                            class=" <?php echo e($status); ?>  py-1 px-3 rounded text-white shadow"><?php echo e($order->status); ?></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <span
                                            class=" <?php echo e($payment); ?> py-1 px-3 rounded text-white shadow"><?php echo e($order->payment_status); ?></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <?php echo e('Rp. ' . number_format($order->grand_total, 0, ',', '.')); ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="/my-orders/<?php echo e($order->id); ?>"
                                            class="bg-slate-600 text-white py-2 px-4 rounded-md hover:bg-slate-500">View
                                            Details</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                        </tbody>
                    </table>
                </div>
            </div>
            <?php echo e($orders->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\ecommerceweb\resources\views/livewire/my-orders-page.blade.php ENDPATH**/ ?>