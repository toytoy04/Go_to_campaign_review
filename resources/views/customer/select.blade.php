@extends('layouts.app')
@section('content')

<a href="{{ route('customer.create') }}"><button>新規のお客様</button></a>
<a href="{{ route('customer.index') }}"><button>既存のお客様</button></a>
@endsection
