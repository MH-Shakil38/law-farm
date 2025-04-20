@extends('frontend.layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Disclaimer</h1>
        <p>Welcome to [Your Company Name]. The information provided on this website is for general informational purposes only. While we strive to keep the information accurate and up-to-date, we make no warranties about the completeness, reliability, or accuracy of the information provided on this site.</p>

        <h2>Legal Disclaimer</h2>
        <p>The materials on this website are provided "as is" without any express or implied warranties. We do not guarantee the accuracy, completeness, or usefulness of any information on this website.</p>

        <h2>Limitation of Liability</h2>
        <p>In no event shall [Your Company Name] be liable for any damages or losses, including but not limited to loss of data, loss of profit, or any other loss resulting from the use of this website or reliance on any information provided.</p>

        <h2>External Links</h2>
        <p>This website may contain links to external websites. We are not responsible for the content or practices of any external websites, and you access them at your own risk.</p>

        <h2>Changes to This Disclaimer</h2>
        <p>[Your Company Name] reserves the right to modify this Disclaimer at any time. Any changes will be posted on this page, and the "last updated" date will be updated accordingly.</p>

        <p>If you have any questions or concerns regarding this Disclaimer, please <a href="{{ route('contact') }}">contact us</a>.</p>
    </div>
@endsection
