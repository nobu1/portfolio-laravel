@props(['message'])
@if ($message)
<div class="p-4 m-2 rounded bg-green-100">
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    {{ $message }}
</div>
@endif