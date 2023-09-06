<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sayang</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="dark:bg-gray-900">
    <section class="h-screen">
        <div class="container h-full px-6 py-24">
          <div
            class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
            <!-- Left column container with background-->
            <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
              <img
                src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="w-full"
                alt="Phone image" />
            </div>
      
            <!-- Right column container with form -->
            <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
              <div class="flex flex-col items-center justify-center  mx-auto  ">
                      <a href="#" class=" text flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                          <img class="w-8 h-8 mr-2" src="https://lh3.googleusercontent.com/drive-viewer/AITFw-wYQI8TzZnjoeBn1Nql12I3fEx9GPFsUokWaGMbYuxWzdqfiWFBTPa0TW97bI6BdsqSqgwSi6KEN-q_0fbur9YwYOuyRA=s2560" alt="logo">
                          AdminPanel  
                      </a>
                      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                  Sign in to your account
                              </h1>
                              <form action="{{ route('auth.login') }}" method="POST" class="space-y-4 md:space-y-6" >
                                @method('POST')
                                @csrf
                                  <div>
                                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Username</label>
                                      <input type="text" name="username" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                                  </div>
                                  <div>
                                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                  </div>
                                  <div class="flex items-center justify-between">
                                      <div class="flex items-start">
                                          <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                          </div>
                                          <div class="ml-3 text-sm">
                                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                          </div>
                                      </div>
                                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                                  </div>
                                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                      Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                                  </p>
                              </form>
                          </div>
                      </div>
              </div>
          </div>
        </div>
      </section>
    <script>
        // Initialization for ES Users
        import {
        Input,
        Ripple,
        initTE,
        } from "tw-elements";

        initTE({ Input, Ripple });
    </script>
</body>
</html>