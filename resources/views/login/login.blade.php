<section class="bg-[#718478] h-screen flex items-center justify-center">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-12">
  
    <!-- Login Container -->

    <div class="w-full max-w-2xl bg-[#F7F5ED] rounded-2xl shadow dark:border md:mt-0 sm:max-w-xl xl:p-14 py-10">
      <div class="space-y-6 md:space-y-12 sm:m-14">
      <img src="{{ asset('images/m.png') }}" alt="logo" class="w-20 h-20 mx-auto">
        <!-- Login Title -->
        <h1 class="text-xl font-bold leading-tight tracking-tight text-[#3F563B] md:text-3xl text-center">
          LOGIN
        </h1>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p style="color: red;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Form -->
        <form class="space-y-4 md:space-y-6" action="{{ route('login_user') }}" method="GET">
          <!-- Email Input -->
          <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" id="floating_email"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#81a684] peer"
              placeholder=" " required />
            <label for="email"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#9BB291] peer-focus:dark:text-[#9BB291] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
              address</label>
          </div>

          <!-- Password Input -->
          <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" id="floating_password"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#81a684] peer"
              placeholder=" " required />
            <label for="password"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#9BB291] peer-focus:dark:text-[#9BB291] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
          </div>

          <!-- Remember Me and Forgot Password -->
          <div class="flex items-center justify-between">
            <div class="flex items-start">
              <input id="remember" type="checkbox"
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#A0B2A3]">
              <label for="remember" class="ml-3 text-sm text-gray-600">Remember me</label>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full py-2 text-white bg-[#D1B365] rounded-full font-semibold hover:bg-[#B3994F] transition-all duration-300 ease-in-out">LOGIN</button>

          <!-- Sign Up Link -->
          <p class="text-sm text-center text-gray-600">
            Don’t have an account yet? <a href="#" class="font-semibold text-[#3F563B] hover:underline">Sign up</a>
          </p>
        </form>
      </div>

    </div>
  </div>
</section>
