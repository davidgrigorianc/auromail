@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($subscribers as $subscriber)
    <tr>
        <th>{{ $subscriber['email_address'] }}</th>
        <td>{{$subscriber['merge_fields']['FNAME']}}</td>
        <td>{{$subscriber['merge_fields']['FNAME']}}</td>
    </li>
    @endforeach
  </tbody>
</table>
    
</div>
<div style="display: flex; justify-content: center;">
    {{ $subscribers->links() }}

</div>
@endsection
