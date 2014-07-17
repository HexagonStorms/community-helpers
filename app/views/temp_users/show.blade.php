@extends('layouts.master')

@section('content')

<p>{{{ $user->first_name }}}</p><br>
<p>{{{ $user->last_name }}}</p><br>
<p>{{{ $user->email }}}</p><br>
<p>{{{ $user->birth_date }}}</p><br>
<p>{{{ $user->is_helper }}}</p><br>
<p>{{{ $user->is_admin }}}</p><br>
<p>{{{ $user->street }}}</p><br>
<p>{{{ $user->city }}}</p><br>
<p>{{{ $user->state }}}</p><br>
<p>{{{ $user->zip }}}</p><br>

@stop