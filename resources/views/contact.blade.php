@extends('components.layouts.app.main')
@section('title')
    <title>Contact Us</title>
@endsection
@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 flex items-start space-x-8">
        <!-- Left Section: Description -->
        <div class="flex-shrink-0 w-1/3">
            <h1 class="mb-1 font-medium">Contact Us</h1>
            <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                Have questions or need assistance? Fill out the form provided, and we’ll get back to you as soon as possible.
            </p>

            <!-- Added Image -->
            <img src="{{ asset('images/contact-us.jpg') }}" alt="Contact Us" class="w-full mb-6">

            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- Right Section: Form -->
        <div class="flex-grow">
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300"
                        value="{{ old('name') }}"
                        required
                    >
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300"
                        value="{{ old('email') }}"
                        required
                    >
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300"
                        value="{{ old('phone') }}"
                    >
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300"
                        required
                    >{{ old('message') }}</textarea>
                </div>

                <!-- Buttons Section -->
                <div class="flex justify-end space-x-4">
                    <!-- Cancel Button -->
                    <a
                        href="{{ route('home') }}"
                        class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        Cancel
                    </a>

                    <!-- Submit Button
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        Send Message
                    </button> -->

                    <div class="flex items-center justify-end">
                        <flux:button type="submit" variant="primary" class="w-full">
                            {{ __('Send Message') }}
                        </flux:button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
