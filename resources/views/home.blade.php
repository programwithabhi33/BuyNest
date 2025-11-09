@extends("layouts.app")

@section("title", "Home - " . config("app.name"))

@section("content")
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="container mx-auto px-4 py-16 md:py-24">
            <div class="grid items-center gap-8 md:grid-cols-2">
                <div>
                    <h1 class="mb-4 text-4xl font-bold md:text-6xl">
                        Summer Sale
                    </h1>
                    <p class="mb-6 text-xl text-blue-100 md:text-2xl">
                        Up to 50% off on selected items
                    </p>
                    <p class="mb-8 text-lg">
                        Discover amazing deals on your favorite products.
                        Limited time offer!
                    </p>
                    <button
                        class="cursor-pointer rounded-lg bg-white px-8 py-4 text-lg font-semibold text-blue-600 transition hover:bg-gray-100"
                    >
                        Shop Now
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
                <div class="hidden justify-center md:flex">
                    <div
                        class="bg-opacity-10 flex h-96 w-96 items-center justify-center rounded-full bg-gradient-to-r from-purple-300 to-blue-800 backdrop-blur-sm"
                    >
                        <i
                            class="fas fa-shopping-bag text-opacity-30 text-9xl text-white"
                        ></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <h2 class="mb-10 text-center text-3xl font-bold">
                Shop by Category
            </h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4 md:gap-6">
                <a href="#" class="group">
                    <div
                        class="rounded-xl bg-white p-6 text-center shadow-md transition hover:shadow-xl"
                    >
                        <div
                            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-blue-100 transition group-hover:bg-blue-600"
                        >
                            <i
                                class="fas fa-laptop text-3xl text-blue-600 transition group-hover:text-white"
                            ></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Electronics</h3>
                    </div>
                </a>
                <a href="#" class="group">
                    <div
                        class="rounded-xl bg-white p-6 text-center shadow-md transition hover:shadow-xl"
                    >
                        <div
                            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-purple-100 transition group-hover:bg-purple-600"
                        >
                            <i
                                class="fas fa-tshirt text-3xl text-purple-600 transition group-hover:text-white"
                            ></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Fashion</h3>
                    </div>
                </a>
                <a href="#" class="group">
                    <div
                        class="rounded-xl bg-white p-6 text-center shadow-md transition hover:shadow-xl"
                    >
                        <div
                            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-green-100 transition group-hover:bg-green-600"
                        >
                            <i
                                class="fas fa-couch text-3xl text-green-600 transition group-hover:text-white"
                            ></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Home & Living
                        </h3>
                    </div>
                </a>
                <a href="#" class="group">
                    <div
                        class="rounded-xl bg-white p-6 text-center shadow-md transition hover:shadow-xl"
                    >
                        <div
                            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-red-100 transition group-hover:bg-red-600"
                        >
                            <i
                                class="fas fa-basketball-ball text-3xl text-red-600 transition group-hover:text-white"
                            ></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Sports</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="bg-white py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="mb-10 flex items-center justify-between">
                <h2 class="text-3xl font-bold">Featured Products</h2>
                <a
                    href="#"
                    class="font-semibold text-blue-600 hover:text-blue-700"
                >
                    View All
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Product Card 1 -->
                <div
                    class="group overflow-hidden rounded-xl bg-white shadow-md transition hover:shadow-xl"
                >
                    <div class="relative overflow-hidden bg-gray-100">
                        <img
                            src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400"
                            alt="Product"
                            class="h-64 w-full cursor-pointer object-cover transition duration-300 group-hover:scale-110"
                        />
                        <span
                            class="absolute top-3 left-3 rounded-full bg-red-500 px-3 py-1 text-sm font-semibold text-white"
                        >
                            -20%
                        </span>
                        <button
                            class="absolute top-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white transition hover:bg-red-500 hover:text-white"
                        >
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Wireless Headphones
                        </h3>
                        <div class="mb-2 flex items-center">
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">
                                (4.5)
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-gray-800">
                                    $79.99
                                </span>
                                <span class="ml-2 text-gray-400 line-through">
                                    $99.99
                                </span>
                            </div>
                            <button
                                class="h-10 w-10 rounded-full bg-blue-600 text-white transition hover:bg-blue-700"
                            >
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div
                    class="group overflow-hidden rounded-xl bg-white shadow-md transition hover:shadow-xl"
                >
                    <div class="relative overflow-hidden bg-gray-100">
                        <img
                            src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400"
                            alt="Product"
                            class="h-64 w-full cursor-pointer object-cover transition duration-300 group-hover:scale-110"
                        />
                        <button
                            class="absolute top-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white transition hover:bg-red-500 hover:text-white"
                        >
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Classic Watch
                        </h3>
                        <div class="mb-2 flex items-center">
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">
                                (4.0)
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-gray-800">
                                    $149.99
                                </span>
                            </div>
                            <button
                                class="h-10 w-10 rounded-full bg-blue-600 text-white transition hover:bg-blue-700"
                            >
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div
                    class="group overflow-hidden rounded-xl bg-white shadow-md transition hover:shadow-xl"
                >
                    <div class="relative overflow-hidden bg-gray-100">
                        <img
                            src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400"
                            alt="Product"
                            class="h-64 w-full cursor-pointer object-cover transition duration-300 group-hover:scale-110"
                        />
                        <span
                            class="absolute top-3 left-3 rounded-full bg-green-500 px-3 py-1 text-sm font-semibold text-white"
                        >
                            New
                        </span>
                        <button
                            class="absolute top-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white transition hover:bg-red-500 hover:text-white"
                        >
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Running Shoes
                        </h3>
                        <div class="mb-2 flex items-center">
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">
                                (5.0)
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-gray-800">
                                    $89.99
                                </span>
                            </div>
                            <button
                                class="h-10 w-10 rounded-full bg-blue-600 text-white transition hover:bg-blue-700"
                            >
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div
                    class="group overflow-hidden rounded-xl bg-white shadow-md transition hover:shadow-xl"
                >
                    <div class="relative overflow-hidden bg-gray-100">
                        <img
                            src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400"
                            alt="Product"
                            class="h-64 w-full cursor-pointer object-cover transition duration-300 group-hover:scale-110"
                        />
                        <button
                            class="absolute top-3 right-3 flex h-10 w-10 items-center justify-center rounded-full bg-white transition hover:bg-red-500 hover:text-white"
                        >
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Sunglasses
                        </h3>
                        <div class="mb-2 flex items-center">
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">
                                (4.2)
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-gray-800">
                                    $59.99
                                </span>
                            </div>
                            <button
                                class="h-10 w-10 rounded-full bg-blue-600 text-white transition hover:bg-blue-700"
                            >
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-100 py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 md:grid-cols-4">
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-blue-600"
                    >
                        <i class="fas fa-shipping-fast text-2xl text-white"></i>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold">Free Shipping</h3>
                    <p class="text-sm text-gray-600">On orders over $50</p>
                </div>
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-green-600"
                    >
                        <i class="fas fa-undo text-2xl text-white"></i>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold">Easy Returns</h3>
                    <p class="text-sm text-gray-600">30-day return policy</p>
                </div>
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-purple-600"
                    >
                        <i class="fas fa-lock text-2xl text-white"></i>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold">Secure Payment</h3>
                    <p class="text-sm text-gray-600">
                        100% secure transactions
                    </p>
                </div>
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-red-600"
                    >
                        <i class="fas fa-headset text-2xl text-white"></i>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold">24/7 Support</h3>
                    <p class="text-sm text-gray-600">
                        Dedicated customer support
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section
        class="bg-gradient-to-r from-blue-600 to-purple-600 py-12 text-white md:py-16"
    >
        <div class="container mx-auto px-4 text-center">
            <h2 class="mb-4 text-3xl font-bold md:text-4xl">
                Subscribe to Our Newsletter
            </h2>
            <p class="mb-8 text-lg text-blue-100">
                Get the latest updates on new products and upcoming sales
            </p>
            <div class="mx-auto flex max-w-md flex-col gap-3 sm:flex-row">
                <input
                    type="email"
                    placeholder="Enter your email"
                    class="flex-1 rounded-lg bg-white px-6 py-4 text-gray-800 focus:ring-2 focus:ring-white focus:outline-none"
                />
                <button
                    class="cursor-pointer rounded-lg bg-white px-8 py-4 font-semibold text-blue-600 transition hover:bg-gray-100"
                >
                    Subscribe
                </button>
            </div>
        </div>
    </section>
@endsection
