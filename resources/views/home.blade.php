@extends('layouts.main-layout')

@section('content')
  <ul>
    {{json_encode($stanze)}}
  </ul>
@endsection
