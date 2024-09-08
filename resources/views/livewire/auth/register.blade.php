<div>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">

                Taskmaster
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" wire:submit.prevent='save'>
                        @csrf
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email')text-red-700 dark:text-red-500 @enderror">Your
                                Username</label>
                            <input type="text"  wire:model.defer="name"
                                class="
                            bg-gray-700 border text-white   rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                            @if ($errors->has('password')) border-red-500 @endif
                            "
                                placeholder="Enter Your Username">

                            @error('name')
                                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email')text-red-700 dark:text-red-500 @enderror">Your
                                Email</label>
                            <input type="email" wire:model.defer="email"
                                class="
                            bg-gray-700 border text-white   rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                            @if ($errors->has('password')) border-red-500 @endif
                            "
                                placeholder="Enter Your Email">

                            @error('email')
                                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email')text-red-700 dark:text-red-500 @enderror">Your
                                password</label>
                            <input type="password" wire:model.defer="password"
                                class="
                            bg-gray-700 border text-white   rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                            @if ($errors->has('password')) border-red-500 @endif
                            "
                                placeholder="***************">

                            @error('password')
                                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email')text-red-700 dark:text-red-500 @enderror">Your
                                password</label>
                            <input type="password"  wire:model.defer="password_confirmation"
                                class="
                            bg-gray-700 border text-white   rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                            @if ($errors->has('password')) border-red-500 @endif
                            "
                                placeholder="***************">

                            @error('password_confirmation')
                                <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
