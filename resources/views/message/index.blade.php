@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">messages</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($message as $messages)
        <tr>
            <td>{{$messages->id}}</td>
            <td>{{$messages->name}}</td>
            <td>{{$messages->department}}</td>
            <td>{{$messages->company}}</td>
            <td>{{$messages->show_message}}</td>
            <td>
                <a href="{{ route('message.edit',$messages->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('message.destroy', $messages->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection