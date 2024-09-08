<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    @livewireStyles
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" font-main-font">
    @unless (Route::is('login') || Route::is('register'))
        @include('components.nav')
    @endunless
    <div>
        {{ $slot }}
    </div>
    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

@unless (Route::is('login') || Route::is('register'))

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="/" class="flex items-center">
            <svg class="h-8 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Your Company</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Documentation</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Tutorials</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Github</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">Your Company™</a>. All Rights Reserved.</span>
        <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <!-- Facebook Icon -->
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.944 2H5.056A3.056 3.056 0 0 0 2 5.056v13.888A3.056 3.056 0 0 0 5.056 22h7.319V14.16h-2.485v-2.946h2.485v-2.162c0-2.456 1.496-3.792 3.678-3.792 1.048 0 1.947.078 2.208.113v2.56l-1.517.001c-1.189 0-1.419.565-1.419 1.395v1.825h2.838l-.368 2.946h-2.47V22h4.82A3.056 3.056 0 0 0 22 18.944V5.056A3.056 3.056 0 0 0 18.944 2z"/>
            </svg>
            <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <!-- Twitter Icon -->
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.944 4.569a9.987 9.987 0 0 1-2.828.775 4.92 4.92 0 0 0 2.165-2.72c-.963.57-2.032.985-3.164 1.207a4.923 4.923 0 0 0-8.384 4.482A13.975 13.975 0 0 1 1.671 3.149 4.917 4.917 0 0 0 3.195 9.73a4.903 4.903 0 0 1-2.229-.616v.061c0 2.271 1.616 4.168 3.759 4.602a4.902 4.902 0 0 1-2.223.084 4.923 4.923 0 0 0 4.6 3.419A9.865 9.865 0 0 1 0 19.54a13.925 13.925 0 0 0 7.548 2.211c9.057 0 14.002-7.514 14.002-14.024 0-.213-.004-.425-.013-.636A9.935 9.935 0 0 0 24 4.59z"/>
            </svg>
            <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <!-- Instagram Icon -->
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.18.054 1.964.24 2.419.403a4.897 4.897 0 0 1 1.703.983 4.89 4.89 0 0 1 .983 1.703c.163.455.35 1.239.403 2.419.059 1.265.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.054 1.18-.24 1.964-.403 2.419a4.87 4.87 0 0 1-.983 1.703 4.872 4.872 0 0 1-1.703.983c-.455.163-1.239.35-2.419.403-1.265.059-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.18-.054-1.964-.24-2.419-.403a4.875 4.875 0 0 1-1.703-.983 4.892 4.892 0 0 1-.983-1.703c-.163-.455-.35-1.239-.403-2.419-.059-1.265-.07-1.646-.07-4.85s.012-3.584.07-4.85c.054-1.18.24-1.964.403-2.419a4.87 4.87 0 0 1 .983-1.703 4.875 4.875 0 0 1 1.703-.983c.455-.163 1.239-.35 2.419-.403 1.265-.059 1.646-.07 4.85-.07zM12 0C8.741 0 8.332.011 7.052.072c-1.276.06-2.147.27-2.905.574a6.373 6.373 0 0 0-2.315 1.51A6.4 6.4 0 0 0 .587 4.907c-.304.758-.514 1.629-.574 2.905C.011 8.332 0 8.741 0 12s.011 3.668.072 4.948c.06 1.276.27 2.147.574 2.905a6.4 6.4 0 0 0 1.51 2.315 6.374 6.374 0 0 0 2.315 1.51c.758.304 1.629.514 2.905.574C8.332 23.989 8.741 24 12 24s3.668-.011 4.948-.072c1.276-.06 2.147-.27 2.905-.574a6.4 6.4 0 0 0 2.315-1.51 6.373 6.373 0 0 0 1.51-2.315c.304-.758.514-1.629.574-2.905.06-1.28.072-1.689.072-4.948s-.011-3.668-.072-4.948c-.06-1.276-.27-2.147-.574-2.905a6.375 6.375 0 0 0-1.51-2.315A6.373 6.373 0 0 0 19.855.646c-.758-.304-1.629-.514-2.905-.574C15.668.011 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.998 3.998 0 1 1 0-7.996 3.998 3.998 0 0 1 0 7.996zm6.406-11.845a1.44 1.44 0 1 1 0-2.88 1.44 1.44 0 0 1 0 2.88z"/>
            </svg>
            <span class="sr-only">Instagram page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <!-- Github Icon -->
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.744.084-.729.084-.729 1.205.085 1.839 1.237 1.839 1.237 1.07 1.835 2.809 1.305 3.495.998.107-.775.42-1.305.76-1.605-2.665-.306-5.466-1.333-5.466-5.93 0-1.31.469-2.38 1.236-3.22-.124-.306-.536-1.54.116-3.2 0 0 1.008-.322 3.3 1.23.957-.267 1.98-.399 3-.405 1.02.006 2.043.138 3 .405 2.288-1.552 3.294-1.23 3.294-1.23.656 1.66.244 2.894.12 3.2.77.84 1.234 1.91 1.234 3.22 0 4.61-2.807 5.62-5.478 5.92.431.37.814 1.1.814 2.22 0 1.606-.014 2.898-.014 3.293 0 .322.216.694.824.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
            <span class="sr-only">GitHub account</span>
          </a>
        </div>
      </div>
    </div>
  </footer>


@endunless



</body>

</html>
