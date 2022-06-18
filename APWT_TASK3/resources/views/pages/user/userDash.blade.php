@extends('layouts.app')
@section('content')

@php 
$id=(Session::get("userId"));
@endphp


@if (Session::get("userName")) 

<br>
<center>
<a class="btn btn-danger" href="{{route("userLogout")}}">Logout </a>
<a class="btn btn-primary" href="/userUpdate">Update Profile </a>
</center>
<br>

<h3 class="text-center">Hi...{{Session::get ("userName")}}</h3>

<table>
<tr><td>ID: {{Session::get ("userId")}} </td></tr>
<tr><td>Name: {{Session::get ("userName")}} </td></tr>
<tr><td>Address: {{Session::get ("userAddress")}} </td></tr>
<tr><td>Phone: {{Session::get ("userPhone")}} </td></tr>
<tr><td>Mail: {{Session::get ("userEmail")}} </td></tr>
</table>

@endif

@endsection