{{-- <h2>{{ $exception->getMessage() }}</h2> --}}
@if ($exception->getMessage())
    <h1>Contact Us</h1>
    <p>This is the contact page.</p>
@endif
