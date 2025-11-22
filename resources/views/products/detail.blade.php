@extends("layouts.app")
@section("title", "Product Detail - " . config("app.name"))
@section("content")
    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <a href="/products" class="hover:text-blue-600">Products</a>
                <span class="mx-2">/</span>
                <span class="text-gray-800">Wireless Headphones</span>
            </div>
        </div>
    </div>

    <!-- Product Detail -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="mb-12 grid gap-8 md:grid-cols-2">
                <!-- Product Image -->
                <div>
                    <div
                        class="mb-4 flex h-96 items-center justify-center rounded-lg bg-gray-200"
                    >
                        <span class="text-gray-400">Product Image</span>
                    </div>
                    <div class="grid grid-cols-4 gap-2">
                        <div
                            class="h-20 cursor-pointer rounded border-2 border-blue-600 bg-gray-200"
                        ></div>
                        <div
                            class="h-20 cursor-pointer rounded bg-gray-200 hover:border-2 hover:border-blue-600"
                        ></div>
                        <div
                            class="h-20 cursor-pointer rounded bg-gray-200 hover:border-2 hover:border-blue-600"
                        ></div>
                        <div
                            class="h-20 cursor-pointer rounded bg-gray-200 hover:border-2 hover:border-blue-600"
                        ></div>
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <h1 class="mb-4 text-3xl font-bold text-gray-800">
                        Wireless Headphones
                    </h1>

                    <div class="mb-4 flex items-center">
                        <div class="mr-2 flex text-yellow-400">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>☆</span>
                        </div>
                        <span class="text-gray-600">(24 reviews)</span>
                    </div>

                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-800">
                            $79.99
                        </span>
                        <span class="ml-3 text-gray-500 line-through">
                            $99.99
                        </span>
                        <span
                            class="ml-3 rounded-full bg-red-100 px-3 py-1 text-sm font-semibold text-red-600"
                        >
                            20% OFF
                        </span>
                    </div>

                    <div class="mb-6">
                        <h3 class="mb-2 font-semibold">Description:</h3>
                        <p class="leading-relaxed text-gray-600">
                            Experience premium sound quality with our wireless
                            headphones. Features include active noise
                            cancellation, 30-hour battery life, and comfortable
                            over-ear design. Perfect for music lovers,
                            travelers, and professionals who need to focus.
                        </p>
                    </div>

                    <div class="mb-6">
                        <h3 class="mb-2 font-semibold">Key Features:</h3>
                        <ul
                            class="list-inside list-disc space-y-1 text-gray-600"
                        >
                            <li>Active Noise Cancellation</li>
                            <li>30-hour battery life</li>
                            <li>Bluetooth 5.0 connectivity</li>
                            <li>Comfortable over-ear design</li>
                            <li>Built-in microphone for calls</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3 class="mb-2 font-semibold">Color:</h3>
                        <div class="flex space-x-3">
                            <button
                                class="h-10 w-10 rounded-full border-2 border-blue-600 bg-black"
                            ></button>
                            <button
                                class="h-10 w-10 rounded-full border-2 border-gray-300 bg-gray-400 hover:border-blue-600"
                            ></button>
                            <button
                                class="h-10 w-10 rounded-full border-2 border-gray-300 bg-blue-600 hover:border-blue-600"
                            ></button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="mb-2 font-semibold">Quantity:</h3>
                        <div class="flex items-center space-x-3">
                            <button
                                class="h-10 w-10 rounded border hover:bg-gray-100"
                            >
                                -
                            </button>
                            <input
                                type="number"
                                value="1"
                                class="w-16 rounded border py-2 text-center"
                            />
                            <button
                                class="h-10 w-10 rounded border hover:bg-gray-100"
                            >
                                +
                            </button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2 font-semibold text-green-600">
                            In Stock
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row">
                        <button
                            class="flex-1 rounded-lg bg-blue-600 py-4 font-semibold text-white transition hover:bg-blue-700"
                        >
                            Add to Cart
                        </button>
                        <button
                            class="rounded-lg border-2 border-blue-600 px-8 py-4 font-semibold text-blue-600 transition hover:bg-blue-50"
                        >
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="mb-12">
                <div class="border-b">
                    <nav class="flex space-x-8">
                        <button
                            onclick="showTab('description')"
                            id="tab-description"
                            class="border-b-2 border-blue-600 py-4 font-semibold text-blue-600"
                        >
                            Description
                        </button>
                        <button
                            onclick="showTab('reviews')"
                            id="tab-reviews"
                            class="py-4 text-gray-600 hover:text-blue-600"
                        >
                            Reviews (24)
                        </button>
                        <button
                            onclick="showTab('shipping')"
                            id="tab-shipping"
                            class="py-4 text-gray-600 hover:text-blue-600"
                        >
                            Shipping
                        </button>
                    </nav>
                </div>

                <!-- Description Tab -->
                <div id="content-description" class="py-8">
                    <h3 class="mb-4 text-xl font-semibold">
                        Product Description
                    </h3>
                    <div class="space-y-4 text-gray-600">
                        <p>
                            Our premium wireless headphones deliver exceptional
                            audio quality with deep bass and crystal-clear
                            highs. The active noise cancellation technology
                            blocks out ambient noise, allowing you to immerse
                            yourself in your music or focus on your work.
                        </p>
                        <p>
                            Designed for all-day comfort, these headphones
                            feature soft memory foam ear cushions and an
                            adjustable headband. The lightweight design ensures
                            you can wear them for hours without discomfort.
                        </p>
                        <p>
                            With up to 30 hours of battery life on a single
                            charge, you can enjoy your favorite music, podcasts,
                            or audiobooks throughout your day. Quick charge
                            feature provides 5 hours of playback with just 10
                            minutes of charging.
                        </p>
                    </div>
                </div>

                <!-- Reviews Tab -->
                <div id="content-reviews" class="hidden py-8">
                    <h3 class="mb-6 text-xl font-semibold">Customer Reviews</h3>

                    <!-- Review 1 -->
                    <div class="mb-6 border-b pb-6">
                        <div class="mb-3 flex items-start justify-between">
                            <div>
                                <h4 class="font-semibold">
                                    Amazing Sound Quality!
                                </h4>
                                <div class="mt-1 flex text-sm text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">
                                Nov 10, 2024
                            </span>
                        </div>
                        <p class="mb-2 text-gray-600">
                            These headphones exceeded my expectations. The noise
                            cancellation is fantastic, and the battery life is
                            even better than advertised. Highly recommend!
                        </p>
                        <p class="text-sm text-gray-500">- Sarah M.</p>
                    </div>

                    <!-- Review 2 -->
                    <div class="mb-6 border-b pb-6">
                        <div class="mb-3 flex items-start justify-between">
                            <div>
                                <h4 class="font-semibold">Great for Work</h4>
                                <div class="mt-1 flex text-sm text-yellow-400">
                                    <span>★★★★☆</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">
                                Nov 5, 2024
                            </span>
                        </div>
                        <p class="mb-2 text-gray-600">
                            Perfect for blocking out office noise. Very
                            comfortable for all-day wear. Only minor complaint
                            is they're a bit bulky for travel.
                        </p>
                        <p class="text-sm text-gray-500">- John D.</p>
                    </div>

                    <!-- Review 3 -->
                    <div class="pb-6">
                        <div class="mb-3 flex items-start justify-between">
                            <div>
                                <h4 class="font-semibold">
                                    Best Purchase This Year
                                </h4>
                                <div class="mt-1 flex text-sm text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">
                                Oct 28, 2024
                            </span>
                        </div>
                        <p class="mb-2 text-gray-600">
                            Worth every penny! The sound quality is incredible,
                            and they're so comfortable I forget I'm wearing
                            them. Great for both music and calls.
                        </p>
                        <p class="text-sm text-gray-500">- Emma L.</p>
                    </div>

                    <button
                        class="mt-4 rounded-lg border-2 border-blue-600 px-6 py-3 font-semibold text-blue-600 transition hover:bg-blue-50"
                    >
                        Write a Review
                    </button>
                </div>

                <!-- Shipping Tab -->
                <div id="content-shipping" class="hidden py-8">
                    <h3 class="mb-6 text-xl font-semibold">
                        Shipping Information
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg
                                class="mr-3 h-6 w-6 flex-shrink-0 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <div>
                                <h4 class="mb-1 font-semibold">
                                    Free Standard Shipping
                                </h4>
                                <p class="text-gray-600">
                                    On orders over $50. Delivery in 5-7 business
                                    days.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg
                                class="mr-3 h-6 w-6 flex-shrink-0 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <div>
                                <h4 class="mb-1 font-semibold">
                                    Express Shipping
                                </h4>
                                <p class="text-gray-600">
                                    Available for $9.99. Delivery in 2-3
                                    business days.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg
                                class="mr-3 h-6 w-6 flex-shrink-0 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <div>
                                <h4 class="mb-1 font-semibold">Easy Returns</h4>
                                <p class="text-gray-600">
                                    30-day return policy. Free return shipping
                                    on all orders.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg
                                class="mr-3 h-6 w-6 flex-shrink-0 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            <div>
                                <h4 class="mb-1 font-semibold">
                                    Order Tracking
                                </h4>
                                <p class="text-gray-600">
                                    Track your order status in real-time with
                                    our tracking system.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div>
                <h2 class="mb-6 text-2xl font-bold">Related Products</h2>
                <div
                    class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4"
                >
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
                                    class="mb-2 font-semibold hover:text-blue-600"
                                >
                                    Bluetooth Speaker
                                </h3>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold">$49.99</span>
                                <button
                                    class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                >
                                    View
                                </button>
                            </div>
                        </div>
                    </div>

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
                                    class="mb-2 font-semibold hover:text-blue-600"
                                >
                                    Phone Case
                                </h3>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold">$14.99</span>
                                <button
                                    class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                >
                                    View
                                </button>
                            </div>
                        </div>
                    </div>

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
                                    class="mb-2 font-semibold hover:text-blue-600"
                                >
                                    USB Cable
                                </h3>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold">$9.99</span>
                                <button
                                    class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                >
                                    View
                                </button>
                            </div>
                        </div>
                    </div>

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
                                    class="mb-2 font-semibold hover:text-blue-600"
                                >
                                    Smart Watch
                                </h3>
                            </a>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold">$149.99</span>
                                <button
                                    class="rounded bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700"
                                >
                                    View
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push("scripts")
        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            }

            function showTab(tabName) {
                // Hide all tab contents
                document
                    .getElementById('content-description')
                    .classList.add('hidden');
                document
                    .getElementById('content-reviews')
                    .classList.add('hidden');
                document
                    .getElementById('content-shipping')
                    .classList.add('hidden');

                // Remove active state from all tabs
                document
                    .getElementById('tab-description')
                    .classList.remove('border-blue-600', 'text-blue-600');
                document
                    .getElementById('tab-reviews')
                    .classList.remove('border-blue-600', 'text-blue-600');
                document
                    .getElementById('tab-shipping')
                    .classList.remove('border-blue-600', 'text-blue-600');

                document
                    .getElementById('tab-description')
                    .classList.add('text-gray-600');
                document
                    .getElementById('tab-reviews')
                    .classList.add('text-gray-600');
                document
                    .getElementById('tab-shipping')
                    .classList.add('text-gray-600');

                // Show selected tab content and mark tab as active
                document
                    .getElementById('content-' + tabName)
                    .classList.remove('hidden');
                document
                    .getElementById('tab-' + tabName)
                    .classList.add('border-blue-600', 'text-blue-600');
                document
                    .getElementById('tab-' + tabName)
                    .classList.remove('text-gray-600');
            }
        </script>
    @endpush
@endsection
