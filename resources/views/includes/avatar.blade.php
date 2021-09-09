@if(Auth::user()->image)
<img class="container-avatar" src="{{ route('user.image', ['filename' => Auth::user()->image ]) }}" />
@endif  