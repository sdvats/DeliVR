<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <div class="alert alert-primary" role="alert">
                {{ Session::get('alert-' . $msg) }}
            </div>
        @endif
    @endforeach
</div>