@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($subscribers as $subscriber)
        {{ $subscriber['email_address'] }}
    @endforeach
</div>

{{ $subscribers->links() }}
@endsection
