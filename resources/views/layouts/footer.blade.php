<!-- resources/views/partials/footer.blade.php -->
<footer id="Contact" class="bg-gray-800 shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex flex-col items-center mb-4 sm:mb-0 space-y-4 rtl:space-y-reverse">
                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('public/img/LOGO PPK BEM FEB 1.png') }}" class="h-8" alt="Logo PPK BEM FEB" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">MUJUR</span>
                </div>
                <div class="text-center">
                    <span class="block text-white font-semibold">Desa Munding || BEM FEB UNDIP</span>
                    <!-- <span class="block text-white mt-2 font-semibold">Tim BEM FEB UNDIP</span> -->
                </div>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 space-x-6">
                <li class="flex flex-col items-center">
                    <a href="#" class="hover:underline mb-2">About</a>
                </li>
                <li class="flex flex-col items-center">
                    <a href="#" class="hover:underline mb-2">Privacy Policy</a>
                </li>
                <li class="flex flex-col items-center">
                    <a href="https://www.instagram.com/" class="hover:underline mb-2">Instagram</a>
                    <img src="{{ asset('public/img/Undip.png') }}" class="h-8 mt-2" alt="Logo Undip" />
                </li>
                <li class="flex flex-col items-center">
                    <a href="https://api.whatsapp.com/send/?phone=" class="hover:underline mb-2">WhatsApp</a>
                    <img src="{{ asset('public/img/Undip.png') }}" class="h-8 mt-2" alt="Logo Undip" />
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2024 MUJUR. All Rights
            Reserved.</span>
    </div>
</footer>