@extends('app')

@section('content')
@include('inc.header')


<div class="container">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        Please correct the following errors:<br />
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
<div class="row">
  <div class="col-sm-8">
{!! Form::open(array('route' => 'contact_store', 'class' => 'form',
  'novalidate' => 'novalidate')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!',
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
<div class="col-sm-4">
         <h2>Contact Us</h2>
         <address>
             <strong>Start Bootstrap</strong>
             <br>3481 Melrose Place
             <br>Beverly Hills, CA 90210
             <br>
         </address>
         <address>
             <abbr title="Phone">P:</abbr>(123) 456-7890
             <br>
             <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
         </address>
     </div>
</div>
<div class="row">
<div="col-sm-12">
<div id="map">
      <h2 class="text-center">Visit us!</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.3410572056064!2d-2.985844184656182!3d53.408726377738795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b213abd9d1d0d%3A0x2148068139a41b53!2s27+Old+Haymarket%2C+Liverpool%2C+Merseyside+L1+6ER%2C+UK!5e0!3m2!1sen!2sbg!4v1456235714228" frameborder="0"></iframe>
    </div>
</div>
@include('inc.footer')
</div>





@endsection
