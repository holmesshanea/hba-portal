@extends('components.layouts.app.main')
@section('title')
    <title>Privacy Policy</title>
@endsection
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
                <h1 class="mb-1 font-medium">Privacy Policy</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    Your privacy is important to us. This privacy policy outlines how we collect, use, and protect your personal information.
                    Please read it carefully to understand our practices regarding your data.
                </p>
            </div>

            <!-- Main Content Section -->
            <div>
                <h1 class="mb-1 font-medium">Key Highlights:</h1>
                <ul class="list-disc list-inside text-gray-700 space-y-2 flex flex-col mb-4 lg:mb-6">
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Information Collection:</span> Details of the information we collect and why.</li>
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Data Usage:</span> How your information is used to improve services.</li>
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Your Rights:</span> Understand your rights regarding your personal data.</li>
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Third-Party Sharing:</span> How we share limited data with partners.</li>
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Security Measures:</span> Comprehensive steps we take to secure your data.</li>
                 <li><span class="font-semibold items-center gap-4 py-2 relative">Updates to Policy:</span> How you’ll be notified about new policy updates.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
