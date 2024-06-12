@if ($errors->any())
    <div class="alert alert-danger p-2 small">
            {{ $errors->all()[0] }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger p-2 small">
        <span class="alert-text">
            {{ session('error') }}
        </span>
    </div>
@elseif (session('success'))
    <div class="alert alert-success p-2 small">
        <span class="alert-text">
            {{ session('success') }}
        </span>
    </div>
@endif