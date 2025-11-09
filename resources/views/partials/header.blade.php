<!-- Header -->
<header class="sticky top-0 z-50 bg-white shadow-lg">
    <!-- Main Header -->
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"
                >
                    <i class="fas fa-shopping-bag text-xl text-white"></i>
                </div>
                <span class="text-2xl font-bold text-gray-800">
                    {{ config("app.name") }}
                </span>
            </a>

            <!-- Search Bar -->
            <div class="mx-8 hidden max-w-2xl flex-1 md:flex">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="Search products..."
                        class="w-full rounded-lg border-2 border-gray-200 px-4 py-3 pr-14 focus:border-blue-500 focus:outline-none"
                    />
                    <button
                        class="absolute top-1/2 right-3 -translate-y-1/2 transform text-blue-600 hover:text-blue-700"
                    >
                        <i class="fas fa-search text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Header Actions -->
            <div class="flex items-center space-x-6">
                <a
                    href="#"
                    class="hidden items-center space-x-2 hover:text-blue-600 lg:flex"
                >
                    <i class="fas fa-box text-xl"></i>
                    <span class="text-sm">Products</span>
                </a>
                <a
                    href="#"
                    class="hidden items-center space-x-2 hover:text-blue-600 lg:flex"
                >
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-sm">Account</span>
                </a>
                <a
                    href="#"
                    class="relative flex items-center space-x-2 hover:text-blue-600"
                >
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span
                        class="absolute -top-2 -right-2 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs text-white"
                    >
                        3
                    </span>
                    <span class="hidden text-sm lg:inline">Cart</span>
                </a>
                <button
                    id="mobileMenuButton"
                    class="cursor-pointer text-2xl transition-transform duration-300 md:hidden"
                    onclick="toggleMobileMenu()"
                    aria-label="Toggle menu"
                >
                    <i id="menuIcon" class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Search -->
        <div class="mt-4 md:hidden">
            <input
                type="text"
                placeholder="Search products..."
                class="w-full rounded-lg border-2 border-gray-200 px-4 py-2 focus:border-blue-500 focus:outline-none"
            />
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        id="mobileMenu"
        class="hidden overflow-hidden border-t bg-gradient-to-b from-gray-50 to-white md:hidden"
    >
        <div class="container mx-auto px-4 py-6">
            <!-- User Section -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <a
                    href="#"
                    class="flex items-center space-x-4 rounded-lg p-3 transition hover:bg-blue-50"
                >
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-r from-blue-600 to-purple-600"
                    >
                        <i class="fas fa-user text-xl text-white"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">My Account</p>
                        <p class="text-sm text-gray-500">
                            Login or Create Account
                        </p>
                    </div>
                </a>
            </div>

            <!-- Quick Actions -->
            <div class="mb-6 grid grid-cols-2 gap-3">
                <a
                    href="#"
                    class="flex flex-col items-center justify-center space-y-2 rounded-xl bg-white p-4 shadow-sm transition hover:shadow-md"
                >
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-100"
                    >
                        <i class="fas fa-box text-xl text-blue-600"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">
                        Products
                    </span>
                </a>
                <a
                    href="#"
                    class="relative flex flex-col items-center justify-center space-y-2 rounded-xl bg-white p-4 shadow-sm transition hover:shadow-md"
                >
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100"
                    >
                        <i
                            class="fas fa-shopping-cart text-xl text-red-600"
                        ></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">
                        Cart (3)
                    </span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-1">
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-laptop w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">Electronics</span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-tshirt w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">Fashion</span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-couch w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">Home & Living</span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-basketball-ball w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">Sports</span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg bg-gradient-to-r from-red-50 to-pink-50 px-4 py-3 transition hover:from-red-100 hover:to-pink-100"
                >
                    <i class="fas fa-tag w-5 text-red-600"></i>
                    <span class="font-semibold text-red-600">
                        Special Deals
                    </span>
                    <span
                        class="ml-auto rounded-full bg-red-500 px-2 py-1 text-xs font-bold text-white"
                    >
                        Hot
                    </span>
                </a>
            </nav>

            <!-- Support Section -->
            <div class="mt-6 border-t border-gray-200 pt-6">
                <p
                    class="mb-3 px-4 text-xs font-semibold text-gray-500 uppercase"
                >
                    Support
                </p>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-headset w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">Help Center</span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-phone w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">
                        Contact Us: +1 234 567 890
                    </span>
                </a>
                <a
                    href="#"
                    class="flex items-center space-x-3 rounded-lg px-4 py-3 transition hover:bg-blue-50"
                >
                    <i class="fas fa-envelope w-5 text-gray-600"></i>
                    <span class="font-medium text-gray-700">
                        support@store.com
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
