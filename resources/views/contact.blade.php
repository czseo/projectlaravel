@extends('layouts/app')

@section('title')
    Contact title
@endsection


@section('content')
    <h1>Contact</h1>



    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="Message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send message</button>

    </form>



    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur corporis deserunt ducimus enim eos facere laudantium numquam odio, quia quisquam, quod quos rem rerum tenetur. Culpa ipsam nisi vero?</p>

@endsection
