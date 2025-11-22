@extends("layouts.app")
@section("title", "My Orders - " . config("app.name"))
@section("content")
    <!-- Page Header -->
    <div class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800">My Account</h1>
            <p class="mt-2 text-gray-600">Welcome back, John Doe</p>
        </div>
    </div>

    <!-- Account Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 lg:grid-cols-4">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="rounded-lg bg-white p-6 shadow-md">
                        <div class="mb-6 text-center">
                            <div
                                class="mx-auto mb-3 flex h-20 w-20 items-center justify-center rounded-full bg-blue-600 text-2xl font-bold text-white"
                            >
                                JD
                            </div>
                            <h3 class="text-lg font-semibold">John Doe</h3>
                            <p class="text-sm text-gray-600">
                                john.doe@email.com
                            </p>
                        </div>
                        <nav class="space-y-2">
                            <a
                                href="/account/orders"
                                class="block rounded bg-blue-50 px-4 py-2 font-semibold text-blue-600"
                            >
                                My Orders
                            </a>
                            <a
                                href="/account/profile"
                                class="block rounded px-4 py-2 text-gray-700 hover:bg-gray-50"
                            >
                                Profile Settings
                            </a>
                            <a
                                href="/account/addresses"
                                class="block rounded px-4 py-2 text-gray-700 hover:bg-gray-50"
                            >
                                Addresses
                            </a>
                            <a
                                href="/account/password"
                                class="block rounded px-4 py-2 text-gray-700 hover:bg-gray-50"
                            >
                                Change Password
                            </a>
                            <form action="/logout" method="POST">
                                <button
                                    type="submit"
                                    class="w-full rounded px-4 py-2 text-left text-red-600 hover:bg-red-50"
                                >
                                    Logout
                                </button>
                            </form>
                        </nav>
                    </div>
                </div>

                <!-- Orders Content -->
                <div class="lg:col-span-3">
                    <div class="mb-6 rounded-lg bg-white p-6 shadow-md">
                        <h2 class="mb-6 text-2xl font-bold">My Orders</h2>

                        <!-- Order Filters -->
                        <div class="mb-6 flex flex-wrap gap-3">
                            <button
                                class="rounded-lg bg-blue-600 px-4 py-2 font-semibold text-white"
                            >
                                All
                            </button>
                            <button
                                class="rounded-lg border px-4 py-2 hover:bg-gray-50"
                            >
                                Processing
                            </button>
                            <button
                                class="rounded-lg border px-4 py-2 hover:bg-gray-50"
                            >
                                Shipped
                            </button>
                            <button
                                class="rounded-lg border px-4 py-2 hover:bg-gray-50"
                            >
                                Delivered
                            </button>
                            <button
                                class="rounded-lg border px-4 py-2 hover:bg-gray-50"
                            >
                                Cancelled
                            </button>
                        </div>

                        <!-- Order 1 -->
                        <div class="mb-4 rounded-lg border p-6">
                            <div
                                class="mb-4 flex flex-col justify-between md:flex-row md:items-center"
                            >
                                <div>
                                    <h3 class="mb-1 text-lg font-semibold">
                                        Order #12345
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Placed on Nov 1, 2024
                                    </p>
                                </div>
                                <div class="mt-3 md:mt-0">
                                    <span
                                        class="inline-block rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700"
                                    >
                                        Delivered
                                    </span>
                                </div>
                            </div>

                            <div class="mb-4 space-y-3">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-16 w-16 flex-shrink-0 rounded bg-gray-200"
                                    ></div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold">
                                            Wireless Headphones
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            Quantity: 1
                                        </p>
                                    </div>
                                    <span class="font-bold">$79.99</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-16 w-16 flex-shrink-0 rounded bg-gray-200"
                                    ></div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold">
                                            Phone Case
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            Quantity: 2
                                        </p>
                                    </div>
                                    <span class="font-bold">$29.98</span>
                                </div>
                            </div>

                            <div
                                class="flex flex-col items-start justify-between border-t pt-4 md:flex-row md:items-center"
                            >
                                <div>
                                    <p class="mb-1 text-sm text-gray-600">
                                        Total:
                                        <span
                                            class="text-lg font-bold text-gray-800"
                                        >
                                            $109.97
                                        </span>
                                    </p>
                                </div>
                                <div class="mt-3 flex gap-2 md:mt-0">
                                    <a
                                        href="/orders/12345"
                                        class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                    >
                                        View Details
                                    </a>
                                    <button
                                        class="rounded border px-4 py-2 text-sm hover:bg-gray-50"
                                    >
                                        Buy Again
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Order 2 -->
                        <div class="mb-4 rounded-lg border p-6">
                            <div
                                class="mb-4 flex flex-col justify-between md:flex-row md:items-center"
                            >
                                <div>
                                    <h3 class="mb-1 text-lg font-semibold">
                                        Order #12344
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Placed on Oct 28, 2024
                                    </p>
                                </div>
                                <div class="mt-3 md:mt-0">
                                    <span
                                        class="inline-block rounded-full bg-blue-100 px-4 py-2 text-sm font-semibold text-blue-700"
                                    >
                                        Shipped
                                    </span>
                                </div>
                            </div>

                            <div class="mb-4 space-y-3">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-16 w-16 flex-shrink-0 rounded bg-gray-200"
                                    ></div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold">
                                            Smart Watch
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            Quantity: 1
                                        </p>
                                    </div>
                                    <span class="font-bold">$149.99</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div
                                    class="flex items-center text-sm text-gray-600"
                                >
                                    <svg
                                        class="mr-2 h-5 w-5 text-blue-600"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                    <span>Expected delivery: Nov 12, 2024</span>
                                </div>
                            </div>

                            <div
                                class="flex flex-col items-start justify-between border-t pt-4 md:flex-row md:items-center"
                            >
                                <div>
                                    <p class="mb-1 text-sm text-gray-600">
                                        Total:
                                        <span
                                            class="text-lg font-bold text-gray-800"
                                        >
                                            $149.99
                                        </span>
                                    </p>
                                </div>
                                <div class="mt-3 flex gap-2 md:mt-0">
                                    <a
                                        href="/orders/12344"
                                        class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                    >
                                        Track Order
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Order 3 -->
                        <div class="mb-4 rounded-lg border p-6">
                            <div
                                class="mb-4 flex flex-col justify-between md:flex-row md:items-center"
                            >
                                <div>
                                    <h3 class="mb-1 text-lg font-semibold">
                                        Order #12343
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Placed on Oct 15, 2024
                                    </p>
                                </div>
                                <div class="mt-3 md:mt-0">
                                    <span
                                        class="inline-block rounded-full bg-yellow-100 px-4 py-2 text-sm font-semibold text-yellow-700"
                                    >
                                        Processing
                                    </span>
                                </div>
                            </div>

                            <div class="mb-4 space-y-3">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-16 w-16 flex-shrink-0 rounded bg-gray-200"
                                    ></div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold">
                                            Laptop Backpack
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            Quantity: 1
                                        </p>
                                    </div>
                                    <span class="font-bold">$39.99</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div
                                        class="h-16 w-16 flex-shrink-0 rounded bg-gray-200"
                                    ></div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold">
                                            Water Bottle
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            Quantity: 1
                                        </p>
                                    </div>
                                    <span class="font-bold">$19.99</span>
                                </div>
                            </div>

                            <div
                                class="flex flex-col items-start justify-between border-t pt-4 md:flex-row md:items-center"
                            >
                                <div>
                                    <p class="mb-1 text-sm text-gray-600">
                                        Total:
                                        <span
                                            class="text-lg font-bold text-gray-800"
                                        >
                                            $59.98
                                        </span>
                                    </p>
                                </div>
                                <div class="mt-3 flex gap-2 md:mt-0">
                                    <a
                                        href="/orders/12343"
                                        class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                    >
                                        View Details
                                    </a>
                                    <button
                                        class="rounded border border-red-500 px-4 py-2 text-sm text-red-500 hover:bg-red-50"
                                    >
                                        Cancel Order
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8 flex justify-center">
                            <nav class="flex items-center space-x-2">
                                <button
                                    class="rounded border px-4 py-2 hover:bg-gray-100"
                                >
                                    Previous
                                </button>
                                <button
                                    class="rounded bg-blue-600 px-4 py-2 text-white"
                                >
                                    1
                                </button>
                                <button
                                    class="rounded border px-4 py-2 hover:bg-gray-100"
                                >
                                    2
                                </button>
                                <button
                                    class="rounded border px-4 py-2 hover:bg-gray-100"
                                >
                                    3
                                </button>
                                <button
                                    class="rounded border px-4 py-2 hover:bg-gray-100"
                                >
                                    Next
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push("scripts")
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
@endpush
