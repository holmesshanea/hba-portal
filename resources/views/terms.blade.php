@extends('components.layouts.app.main')
@section('content')
    <div class="bg-white shadow-md rounded-lg p-4 flex items-start space-x-8">

        <!-- Left Section: Icon/Image -->
        <div class="flex-shrink-0">
            <img src="{{ asset('images/terms.jpg') }}" alt="Terms of Service" class="w-72 h-auto rounded-lg shadow-lg">
        </div>

        <!-- Right Section: Text and Content -->
        <div class="flex-grow">
            <!-- Header Section -->
            <div class="mb-6">
                <h1 class="mb-1 font-medium">Terms of Service</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    Welcome to our platform. Please review these terms and conditions carefully before using our services. By accessing or using this platform, you agree to be bound by these terms.
                </p>
            </div>

            <!-- Main Content Section -->
            <div>
                <h1 class="mb-1 font-medium">Key Sections:</h1>
                <ul class="list-disc list-inside text-gray-700 space-y-2 flex flex-col mb-4 lg:mb-6">
                    <li><span class="font-semibold items-center gap-4 py-2 relative">Acceptance of Terms:</span> Your use of the platform constitutes your agreement to abide by these terms.</li>
                    <li><span class="font-semibold items-center gap-4 py-2 relative">Modifications:</span> We reserve the right to update these terms without notice.</li>
                    <li><span class="font-semibold items-center gap-4 py-2 relative">User Conduct:</span> Please ensure your usage aligns with applicable laws and community guidelines.</li>
                    <li><span class="font-semibold items-center gap-4 py-2 relative">Privacy Policy:</span> Your data is governed by our privacy policy, accessible from the homepage.</li>
                    <li><span class="font-semibold items-center gap-4 py-2 relative">Account Responsibility:</span> You are fully responsible for maintaining the security of your account information.</li>
                    <li><span class="font-semibold items-center gap-4 py-2 relative">Contact Information:</span> For any questions or concerns, please reach out using the provided contact options.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
