@extends('frontend.layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Cookies Policy</h1>
        <p>At [Your Company Name], we use cookies to enhance your experience on our website. By continuing to use our site, you agree to our use of cookies.</p>

        <h2>What Are Cookies?</h2>
        <p>Cookies are small text files that are placed on your device when you visit a website. They are used to store information such as your preferences or login information.</p>

        <h2>How We Use Cookies</h2>
        <ul>
            <li>To personalize your experience.</li>
            <li>To analyze site traffic and performance.</li>
            <li>To serve advertisements relevant to you.</li>
        </ul>

        <h2>Types of Cookies We Use</h2>
        <p>We use both session cookies (temporary cookies that are deleted after you close your browser) and persistent cookies (cookies that remain on your device for a set period of time).</p>

        <h2>Managing Cookies</h2>
        <p>You can control cookies through your browser settings. You can choose to block cookies or delete cookies stored on your device. However, disabling cookies may affect the functionality of the website.</p>

        <h2>Changes to This Policy</h2>
        <p>We may update our Cookies Policy from time to time. Any changes will be posted on this page.</p>

        <p>If you have any questions or concerns about our use of cookies, please <a href="{{ route('contact') }}">contact us</a>.</p>
    </div>
@endsection
