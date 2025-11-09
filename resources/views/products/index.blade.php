@extends("layouts.app")
@section("title", "Products - " . config("app.name"))
@section("content")
    <!-- Products Grid -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Product 1 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/1">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/1">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Wireless Headphones
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Premium sound quality with noise cancellation
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $79.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/2">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/2">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Smart Watch
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Track your fitness and health goals
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $149.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/3">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/3">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Laptop Backpack
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Durable backpack with multiple compartments
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $39.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/4">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/4">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Running Shoes
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Comfortable shoes for daily running
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $89.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/5">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/5">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Coffee Maker
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Brew perfect coffee every morning
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $59.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/6">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/6">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Desk Lamp
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            LED lamp with adjustable brightness
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $29.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/7">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/7">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Yoga Mat
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Non-slip exercise mat for yoga
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $24.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/8">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/8">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Water Bottle
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Insulated stainless steel bottle
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $19.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 9 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/9">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/9">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Bluetooth Speaker
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Portable speaker with great bass
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $49.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 10 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/10">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/10">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Phone Case
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Protective case for smartphones
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $14.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 11 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/11">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/11">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                USB Cable
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Fast charging USB-C cable
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $9.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 12 -->
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition hover:shadow-lg"
                >
                    <a href="/products/12">
                        <div
                            class="flex h-48 items-center justify-center bg-gray-200"
                        >
                            <span class="text-sm text-gray-400">
                                Product Image
                            </span>
                        </div>
                    </a>
                    <div class="p-4">
                        <a href="/products/12">
                            <h3
                                class="mb-2 text-lg font-semibold hover:text-blue-600"
                            >
                                Notebook
                            </h3>
                        </a>
                        <p class="mb-3 text-sm text-gray-600">
                            Premium quality ruled notebook
                        </p>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-800">
                                $12.99
                            </span>
                        </div>
                        <button
                            class="w-full rounded bg-blue-600 py-2 text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <button class="rounded border px-4 py-2 hover:bg-gray-100">
                        Previous
                    </button>
                    <button class="rounded bg-blue-600 px-4 py-2 text-white">
                        1
                    </button>
                    <button class="rounded border px-4 py-2 hover:bg-gray-100">
                        2
                    </button>
                    <button class="rounded border px-4 py-2 hover:bg-gray-100">
                        3
                    </button>
                    <button class="rounded border px-4 py-2 hover:bg-gray-100">
                        Next
                    </button>
                </nav>
            </div>
        </div>
    </section>
@endsection
