<div
  class="flex items-center justify-center bg-gradient-to-br from-blue-50 to-blue-100 p-4 py-auto pb-20 md:p-10"
>
  <div
    class="w-full max-w-md transform transition-all duration-500 opacity-100 translate-y-0"
  >
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
      <div class="px-8 pt-8 pb-6">
        <!-- Header -->
        <div class="text-center mb-8">
          <div
            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4 animate-bounce"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-6 h-6 text-blue-600"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M16 12H8m8-4H8m8 8H8m4 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"
              />
            </svg>
          </div>
          <h2 class="text-2xl font-bold text-gray-800">Create your account</h2>
          <p class="text-gray-500 mt-2 text-sm">
            Sign up to explore exclusive features and start your journey.
          </p>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="save" class="space-y-4">
          <!-- Name Input -->
          <div class="relative">
            <input
              wire:model="name"
              type="text"
              class="block w-full pl-3 pr-3 py-3 border border-gray-200 rounded-xl bg-gray-50 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
              placeholder="Name"
              required
            />
            <div class="mt-2 h-4">
              <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="text-xs text-red-600"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
          </div>

          <!-- Email Input -->
          <div class="relative">
            <input
              wire:model="email"
              type="email"
              class="block w-full pl-3 pr-3 py-3 border border-gray-200 rounded-xl bg-gray-50 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
              placeholder="Email"
              required
            />
            <div class="mt-2 h-4">
              <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="text-xs text-red-600"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
          </div>

          <!-- Password Input -->
          <div class="relative">
            <input
              wire:model="password"
              type="password"
              class="block w-full pl-3 pr-3 py-3 border border-gray-200 rounded-xl bg-gray-50 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
              placeholder="Password"
              required
            />
            <div class="mt-2 h-4">
              <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="text-xs text-red-600"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
          </div>

          <!-- Sign Up Button -->
          <button
            type="submit"
            class="w-full py-3 px-4 bg-gray-900 hover:bg-gray-800 text-white font-medium rounded-xl transition-colors duration-200"
          >
            Sign Up
          </button>
        </form>

        <!-- Footer -->
        <div class="flex items-center justify-between mt-6">
          <p class="text-sm text-gray-600">
            Already have an account?
            <a href="/login" class="text-blue-600 hover:text-blue-700">
              Sign in
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH D:\ecommerceweb\resources\views/livewire/auth/register-page.blade.php ENDPATH**/ ?>