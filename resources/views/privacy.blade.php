@extends('components.layouts.app.main')
@section('content')
    <div class="bg-white shadow-md rounded-lg p-4 flex items-start space-x-8">

        <!-- Left Section: Icon/Image -->
        <div class="flex-shrink-0">
            <img src="{{ asset('images/privacy.jpg') }}" alt="Privacy Policy" class="w-72 h-auto rounded-lg shadow-lg">
        </div>

        <!-- Right Section: Text and Content -->
        <div class="flex-grow">
            <!-- Header Section -->
            <div class="mb-6">
                <h1 class="text-4xl font-bold text-blue-600 mb-4">Privacy Policy</h1>
                <p class="text-gray-600 text-lg">
                    Your privacy is important to us. This privacy policy outlines how we collect, use, and protect your personal information.
                    Please read it carefully to understand our practices regarding your data.
                </p>
            </div>

            <!-- Main Content Section -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Key Highlights:</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><span class="font-semibold">Information Collection:</span> Details of the information we collect and why.</li>
                    <li><span class="font-semibold">Data Usage:</span> How your information is used to improve services.</li>
                    <li><span class="font-semibold">Your Rights:</span> Understand your rights regarding your personal data.</li>
                    <li><span class="font-semibold">Third-Party Sharing:</span> How we share limited data with third-party partners under strict agreements.</li>
                    <li><span class="font-semibold">Security Measures:</span> Comprehensive steps we take to secure your data.</li>
                    <li><span class="font-semibold">Updates to Policy:</span> How you’ll be notified about new policy updates.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
