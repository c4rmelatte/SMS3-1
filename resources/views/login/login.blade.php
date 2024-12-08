<style>

.logo-size {
  display: block;
  max-width: 250px;
  width: 100%;
  height: 235px;
  margin: auto;
}

.container {
  width: 450px;
  padding: 40px;
  margin: auto;
}

input:-webkit-autofill,
input:-webkit-autofill:focus {
    transition: background-color 600000s 0s, color 600000s 0s;
}
input[data-autocompleted] {
    background-color: transparent !important;
}



</style>

<section class="bg-[url('/images/bg2.png')] bg-cover h-screen flex items-center justify-center">
  <div class="w-full bg-lime-950/60">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-12">
  
    <!-- Login Container with resized max-width -->
    <div class="w-full max-w-2xl bg-lime-950/80 rounded-2xl shadow dark:border md:mt-0 sm:max-w-xl xl:p-14 py-10 container">
      <div class="space-y-6 md:space-y-12">
        <img src="{{ asset('images/L2.png') }}" alt="logo" class="logo-size mx-auto">
        <!-- Login Title -->
        <h1 class="text-4xl tracking-widest font-bold leading-tight tracking-tight text-white text-center">
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
              class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#81a684] peer"
              placeholder=" " required />
            <label for="email"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#9BB291] peer-focus:dark:text-[#9BB291] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
              address</label>
          </div>

          <!-- Password Input -->
          <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" id="floating_password"
              class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#81a684] peer"
              placeholder=" " required />
            <label for="password"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#9BB291] peer-focus:dark:text-[#9BB291] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
          </div>

          <!-- Remember Me and Forgot Password -->
          <div class="flex items-center justify-between">
            <div class="flex items-start">
              <input id="remember" type="checkbox"
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#A0B2A3]">
              <label for="remember" class="ml-3 text-sm text-gray-400">Remember me</label>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full py-2 text-white bg-[#D1B365] rounded-full font-semibold hover:bg-[#B3994F] transition-all duration-300 ease-in-out">LOGIN</button>

        </form>
      </div>

    </div>
  </div>
  </div>
</section>
