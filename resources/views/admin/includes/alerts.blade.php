@if ($errors->any())
    <div class="alert {{$alerta ?? 'alert-success'}}">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @if (isset($texto))
            <p>{{$texto ?? 'Valor padrão'}}</p>
        @endif
    </div>
@endif