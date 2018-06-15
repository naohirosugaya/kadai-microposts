    @if (Auth::user()->is_favoritings($micropost->id))
        {!! Form::open(['route' => ['user.unfavorites', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorites', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorites', $micropost->id]]) !!}
            {!! Form::submit('Favorites', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
