@extends("layouts.app")
@section("title", "My Cart - " . config("app.name"))
@section("content")
    <!-- Cart Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 lg:grid-cols-3">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="rounded-lg bg-white shadow-md">
                        <!-- Cart Item 1 -->
                        <div class="border-b p-6">
                            <div class="flex flex-col gap-4 sm:flex-row">
                                <div
                                    class="flex h-32 w-full flex-shrink-0 items-center justify-center rounded bg-gray-200 sm:w-32"
                                >
                                    <span class="text-xs text-gray-400">
                                        Product Image
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3
                                                class="mb-1 text-lg font-semibold"
                                            >
                                                Wireless Headphones
                                            </h3>
                                            <p
                                                class="mb-2 text-sm text-gray-600"
                                            >
                                                Color: Black
                                            </p>
                                        </div>
                                        <button
                                            class="text-red-500 hover:text-red-700"
                                        >
                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="mt-4 flex items-center justify-between"
                                    >
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                -
                                            </button>
                                            <input
                                                type="number"
                                                value="1"
                                                class="w-12 rounded border py-1 text-center"
                                            />
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <span
                                            class="text-xl font-bold text-gray-800"
                                        >
                                            $79.99
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="border-b p-6">
                            <div class="flex flex-col gap-4 sm:flex-row">
                                <div
                                    class="flex h-32 w-full flex-shrink-0 items-center justify-center rounded bg-gray-200 sm:w-32"
                                >
                                    <span class="text-xs text-gray-400">
                                        Product Image
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3
                                                class="mb-1 text-lg font-semibold"
                                            >
                                                Smart Watch
                                            </h3>
                                            <p
                                                class="mb-2 text-sm text-gray-600"
                                            >
                                                Color: Silver
                                            </p>
                                        </div>
                                        <button
                                            class="text-red-500 hover:text-red-700"
                                        >
                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="mt-4 flex items-center justify-between"
                                    >
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                -
                                            </button>
                                            <input
                                                type="number"
                                                value="1"
                                                class="w-12 rounded border py-1 text-center"
                                            />
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <span
                                            class="text-xl font-bold text-gray-800"
                                        >
                                            $149.99
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="p-6">
                            <div class="flex flex-col gap-4 sm:flex-row">
                                <div
                                    class="flex h-32 w-full flex-shrink-0 items-center justify-center rounded bg-gray-200 sm:w-32"
                                >
                                    <span class="text-xs text-gray-400">
                                        Product Image
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3
                                                class="mb-1 text-lg font-semibold"
                                            >
                                                Laptop Backpack
                                            </h3>
                                            <p
                                                class="mb-2 text-sm text-gray-600"
                                            >
                                                Color: Navy Blue
                                            </p>
                                        </div>
                                        <button
                                            class="text-red-500 hover:text-red-700"
                                        >
                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="mt-4 flex items-center justify-between"
                                    >
                                        <div
                                            class="flex items-center space-x-3"
                                        >
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                -
                                            </button>
                                            <input
                                                type="number"
                                                value="2"
                                                class="w-12 rounded border py-1 text-center"
                                            />
                                            <button
                                                class="h-8 w-8 rounded border hover:bg-gray-100"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <span
                                            class="text-xl font-bold text-gray-800"
                                        >
                                            $79.98
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continue Shopping Button -->
                    <div class="mt-6">
                        <a
                            href="/products"
                            class="inline-flex items-center font-semibold text-blue-600 hover:text-blue-700"
                        >
                            <svg
                                class="mr-2 h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                ></path>
                            </svg>
                            Continue Shopping
                        </a>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div
                        class="sticky top-24 rounded-lg bg-white p-6 shadow-md"
                    >
                        <h2 class="mb-4 text-xl font-bold">Order Summary</h2>

                        <div class="mb-4 space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">
                                    Subtotal (4 items)
                                </span>
                                <span class="font-semibold">$309.96</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-semibold text-green-600">
                                    Free
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-semibold">$24.80</span>
                            </div>
                        </div>

                        <div class="mb-6 border-t pt-4">
                            <div class="flex justify-between text-lg">
                                <span class="font-bold">Total</span>
                                <span class="font-bold text-blue-600">
                                    $334.76
                                </span>
                            </div>
                        </div>

                        <!-- Promo Code -->
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-semibold">
                                Promo Code
                            </label>
                            <div class="flex gap-2">
                                <input
                                    type="text"
                                    placeholder="Enter code"
                                    class="flex-1 rounded border px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                />
                                <button
                                    class="rounded bg-gray-800 px-4 py-2 text-white hover:bg-gray-700"
                                >
                                    Apply
                                </button>
                            </div>
                        </div>

                        <button
                            class="mb-3 w-full rounded-lg bg-blue-600 py-4 font-semibold text-white transition hover:bg-blue-700"
                        >
                            Proceed to Checkout
                        </button>

                        <div class="text-center text-sm text-gray-600">
                            <p>Secure checkout powered by Stripe</p>
                        </div>

                        <!-- Trust Badges -->
                        <div class="mt-6 border-t pt-6">
                            <div class="space-y-3 text-sm text-gray-600">
                                <div class="flex items-center">
                                    <svg
                                        class="mr-2 h-5 w-5 text-green-600"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <span>Secure Payment</span>
                                </div>
                                <div class="flex items-center">
                                    <svg
                                        class="mr-2 h-5 w-5 text-green-600"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <span>Free Shipping over $50</span>
                                </div>
                                <div class="flex items-center">
                                    <svg
                                        class="mr-2 h-5 w-5 text-green-600"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <span>30-Day Returns</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
