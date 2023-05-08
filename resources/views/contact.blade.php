@extends('layouts.app')

@section('title-block')andersen-tech-task @endsection   

@section('content')
<section class="container mt-5">
    <form action="{{route('contacts.store')}}" method="post" >
       @csrf 
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" placeholder="enter name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" placeholder="enter email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">message</label>
        <textarea name="message" id="message" class="form-control" placeholder="enter message"></textarea>
    </div>
    <div class="form-group text-center mt-3">
         <button  type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</section>
@foreach($contacts as $el)
<div class="container"><table>
<tr>
<td>{{ $el->name }} |</td>
<td>{{ $el->email }} |</td>
<td>{{ $el->created_at }} |</td>
<td>{{ $el->message }} |</td>
@endforeach
</tr>
</table>
</div>
@endsection    




