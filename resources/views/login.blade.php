<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sayang</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
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
              <form action="{{ route('auth.login') }}" method="POST" >
                @method('POST')
                @csrf

                <!-- Email input -->
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input
                    type="text"
                    name="username"

                    placeholder="Username" />

                </div>
      
                <!-- Password input -->
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input
                    type="password"
                    name="password"

                    placeholder="Password" />

                </div>
                <button type="submit">submit</button>
              </form>
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