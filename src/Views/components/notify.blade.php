@if(Session::has('danger'))
    <div class="notify notify-danger mb-1">
        <p class="mb-0 text-danger">{{ Session::get('danger') }}</p>
        <button type="button"><i class="fas fa-times-circle"></i></button>
    </div>
@endif

@if(Session::has('info'))
    <div class="notify notify-info mb-1">
        <p class="mb-0 text-info">{{ Session::get('info') }}</p>
        <button type="button"><i class="fas fa-times-circle"></i></button>
    </div>
@endif

@if(Session::has('warning'))
    <div class="notify notify-warning mb-1">
        <p class="mb-0 text-warning">{{ Session::get('warning') }}</p>
        <button type="button"><i class="fas fa-times-circle"></i></button>
    </div>
@endif

@if(Session::has('success'))
    <div class="notify notify-success mb-1">
        <p class="mb-0 text-success">{{ Session::get('success') }}</p>
        <button type="button"><i class="fas fa-times-circle"></i></button>
    </div>
@endif

@if(Session::has('primary'))
    <div class="notify notify-primary mb-1">
        <p class="mb-0 text-primary">{{ Session::get('primary') }}</p>
        <button type="button"><i class="fas fa-times-circle"></i></button>
    </div>
@endif

@isset($errors)
    @if (@$errors->any())
        @foreach (@$errors->all() as $error)
            <div class="notify notify-danger mb-1">
                <p class="mb-0 text-danger">{{ $error }}</p>
                <button type="button"><i class="fas fa-times-circle"></i></button>
            </div>
        @endforeach
    @endif
@endisset