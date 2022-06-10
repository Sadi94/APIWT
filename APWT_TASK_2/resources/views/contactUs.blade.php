@extends('layouts.app')
@section('content')

<h1 style="text-align: center;"> NeighborCare</h1>
<p style="text-align: center;"> Welcome to Neighborcare</p>
<p style="text-align: center;"> +880 1712345678</p>
<form action="{{route('contactUs')}}" class="form-group" method="post">
{{csrf_field()}}

        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <label for="">Message</label>
        <input type="text" name="message" id="" value="{{old('message')}}" class="form-control">
        @error('message')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <input type="submit">

</form>
<img align="center" style="width: 80%; height:40%" src="https://graphicriver.img.customer.envatousercontent.com/files/309719654/preview.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=303bc91a4347593feff9879a165eb0c7" alt="">
<h5>&copy; <?php echo("Sadi"); ?></h5>
@endsection