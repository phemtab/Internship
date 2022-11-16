@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a person</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('message.update', $message->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">    
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="{{$message->name}}"/>
            </div>
            <div class="form-group">
              <label for="profile">Profile Picture:</label>
              <input type="file" name="profile" class="form-control" >
              @if ($errors->has('profile'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('profile') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" name="department" placeholder="{{$message->department}}"/>
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" name="company" placeholder="{{$message->company}}"/>
            </div>
            <div class="form-group">
                <label for="show_message">Message:</label>
                <input type="text" class="form-control" name="show_message" placeholder="{{$message->show_message}}"/>
            </div>            
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger" onclick="goBack()">Cancel</button>
        </form>
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
    </div>
</div>
@endsection