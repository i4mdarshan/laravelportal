@extends('layouts.app')

@section('content')
<div class="container" height="70%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Intern Requests') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <table border="1 solid" width="100%">

                 	<tr>
                 		<td>Name:</td>
                 		<td>{{$InternData['full_name']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Gender:</td>
                 		<td>{{$InternData['gender']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Age:</td>
                 		<td>{{$InternData['age']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Date of Birth:</td>
                 		<td>{{$InternData['dob']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Contact Number:</td>
                 		<td>{{$InternData['contact']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Email Id:</td>
                 		<td>{{$InternData['email']}}</td>
                 	</tr>
                 	<tr>
                 		<td>College/Employement Type:</td>
                 		<td>{{$InternData['type']}}</td>
                 	</tr>
                 	<tr>
                 		<td>Resume:</td>
                 		<td><a href="{{asset('uploads/'.$InternData['resume'])}}" target="_blank">{{$InternData['resume']}}</a></td>
                 	</tr>
                 	<tr>
                 		<td>Interview Date & Time:</td>
                 		<td><b>{{$InternData['a_date']}}</b> at <b>{{$InternData['a_time']}}</b></td>
                 	</tr>
                 </table>
                 <div class="py-5">
                 	<form method="POST" action="/AddDetail/{{$InternData['id']}}">
                 		@csrf
                 		<div class="form-group">
                 			<input type="date" name="a_date"><br>
                 		</div>
                 		<div class="form-group">
                 			<input type="time" name="a_time"><br>
                 		</div>
                 		
                 		<input type="submit" name="accept">
                 	</form>
                 </div>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
