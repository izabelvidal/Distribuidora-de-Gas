@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('message'))
    <div class="alert alert-success">
        <ul>
            <li>{{ session('message') }}</li>
        </ul>
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning">
        <ul>
            <li>{{ session('warning') }}</li>
        </ul>
    </div>
@endif
