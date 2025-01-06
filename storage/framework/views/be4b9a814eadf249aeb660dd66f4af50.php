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
          <h2 class="text-2xl font-bold text-gray-800">Sign in with email</h2>
          <p class="text-gray-500 mt-2 text-sm">
            Unlock exclusive deals, track your orders, and enjoy a seamless
            shopping experience.
          </p>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="save" class="space-y-4">
          <!-- Email Input -->
          <div class="relative">
            <div
              class="absolute top-4 left-0 pl-3 flex items-center pointer-events-none"
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
                  d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25"
                />
              </svg>
            </div>
            <input
              wire:model="email"
              type="email"
              class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-xl bg-gray-50 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
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
            <div
              class="absolute top-4 left-0 pl-3 flex items-center pointer-events-none"
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
                  d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
                />
              </svg>
            </div>
            <input
              wire:model="password"
              type="password"
              id="password"
              class="block w-full pl-10 pr-12 py-3 border border-gray-200 rounded-xl bg-gray-50 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
              placeholder="Password"
              required
            />
            <button
              type="button"
              onclick="togglePassword()"
              id="toggleButton"
              class="absolute top-3 right-3 flex items-center text-gray-400 hover:text-gray-600"
            >
              <!-- Default icon: Mata Terbuka -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                id="iconVisible"
                class="size-6"
              >
                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path
                  fill-rule="evenodd"
                  d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                  clip-rule="evenodd"
                />
              </svg>
              <!-- Hidden icon: Mata Tertutup -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                id="iconHidden"
                class="size-6 hidden"
              >
                <path
                  d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z"
                />
                <path
                  d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z"
                />
                <path
                  d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z"
                />
              </svg>
            </button>
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

          <!-- Submit Button -->
          <div class="flex items-center justify-between">
            <a
              href="/register"
              class="text-sm text-blue-600 hover:text-blue-700"
            >
              Register
            </a>

            <!-- Forgot Password -->

            <a href="/forgot" class="text-sm text-blue-600 hover:text-blue-700">
              Forgot password?
            </a>
          </div>

          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full py-3 px-4 bg-gray-900 hover:bg-gray-800 text-white font-medium rounded-xl transition-colors duration-200"
          >
            Get Started
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const iconVisible = document.getElementById("iconVisible");
    const iconHidden = document.getElementById("iconHidden");

    if (passwordInput.type === "password") {
      // Ganti input menjadi teks (password terlihat)
      passwordInput.type = "text";
      iconVisible.classList.add("hidden");
      iconHidden.classList.remove("hidden");
    } else {
      // Ganti input menjadi password (password tersembunyi)
      passwordInput.type = "password";
      iconVisible.classList.remove("hidden");
      iconHidden.classList.add("hidden");
    }
  }
</script>
<?php /**PATH D:\ecommerceweb\resources\views/livewire/auth/login-page.blade.php ENDPATH**/ ?>