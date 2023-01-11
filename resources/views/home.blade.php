test
{!! Form::open(['route' => 'logout']) !!}
    @csrf
    <button>Logout</button>
{!! Form::close() !!}