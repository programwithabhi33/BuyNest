<!-- Footer -->
<footer class="bg-gray-900 text-gray-300">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Company Info -->
            <div>
                <div class="mb-4 flex items-center space-x-2">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"
                    >
                        <i class="fas fa-shopping-bag text-white"></i>
                    </div>
                    <span class="text-xl font-bold text-white">
                        {{ config("app.name") }}
                    </span>
                </div>
                <p class="mb-4">
                    Your one-stop shop for all your needs. Quality products at
                    affordable prices.
                </p>
                <div class="flex space-x-4">
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 transition hover:bg-blue-600"
                    >
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 transition hover:bg-blue-600"
                    >
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 transition hover:bg-blue-600"
                    >
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 transition hover:bg-blue-600"
                    >
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">
                    Quick Links
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="transition hover:text-white">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Track Order
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Careers
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">
                    Customer Service
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Help Center
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Returns
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Shipping Info
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Terms & Conditions
                        </a>
                    </li>
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">
                    Contact Us
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt mt-1"></i>
                        <span>{{ config("app.support_address") }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone"></i>
                        <span>{{ config("app.support_phone") }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope"></i>
                        <span>{{ config("app.support_email") }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Fri: 9AM - 6PM</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Payment Methods -->
        <div class="mt-8 border-t border-gray-800 pt-8">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <p class="mb-4 text-sm md:mb-0">
                    &copy;{{ date("Y") }} {{ config("app.name") }}. All rights
                    reserved.
                </p>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">We Accept:</span>
                    <i class="fab fa-cc-visa text-3xl"></i>
                    <i class="fab fa-cc-mastercard text-3xl"></i>
                    <i class="fab fa-cc-stripe text-3xl"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
