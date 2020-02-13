@include('header');
    <div class="row mt-3">
        <div class="col-8">
            <h1>{{$title}}</h1>
                <ul>
                    @forelse ($users as $user)
                        <li>{{$user}}</li>
                    @empty
                        <p>No hay usuarios registrados</p>
                    @endforelse
                </ul>
        </div>
        <div class="col-4">
            @include('sidebar');
        </div>
    </div>
@include('footer');
