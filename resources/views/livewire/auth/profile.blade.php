<div style="height: 93.1vh" class=" bg-gray-900 overflow-hidden grid justify-center items-center">
    <div class="bg-gray-800 rounded-lg shadow-xl p-8 max-w-md w-full">
        <img src="https://via.placeholder.com/120" alt="Profile picture"
            class="w-32 h-32 rounded-full mx-auto mb-4 bg-gray-600">
        <h1 class="text-2xl font-bold text-center mb-2 text-gray-400">{{ $user['name'] }}</h1>
        <h2 class="text-xl text-gray-400 text-center mb-4">Senior Software Engineer</h2>
        <p class="text-center mb-6 text-gray-300">
            {{ $user['description'] }}
        </p>
        <div class="flex justify-center space-x-4 mb-6">
            <a href="#" aria-label="Email" class="text-gray-300 hover:text-white transition-colors">
                <i class="fas fa-envelope text-xl"></i>
            </a>
            <a href="#" aria-label="Phone" class="text-gray-300 hover:text-white transition-colors">
                <i class="fas fa-phone text-xl"></i>
            </a>
            <a href="#" aria-label="LinkedIn" class="text-gray-300 hover:text-white transition-colors">
                <i class="fab fa-linkedin text-xl"></i>
            </a>
            <a href="#" aria-label="Twitter" class="text-gray-300 hover:text-white transition-colors">
                <i class="fab fa-twitter text-xl"></i>
            </a>
            <a href="#" aria-label="GitHub" class="text-gray-300 hover:text-white transition-colors">
                <i class="fab fa-github text-xl"></i>
            </a>
        </div>
        @if ($user['id'] == Auth::user()->id)
            afasfsf
        @endif
        <a href="#"
            class="block w-full  bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded text-center transition-colors">
            Contact Me
        </a>

    </div>
</div>
