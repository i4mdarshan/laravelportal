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
                        <colgroup>
                           <col span="1" style="width: 15%;">
                           <col span="1" style="width: 60%;">
                           <col span="1" style="width: 25%;">
                        </colgroup>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <?php $n=1; ?>
                        @foreach($interns as $intern)
                            <tr>
                                <td>{{$n}}</td>
                                <td>{{$intern['full_name']}}</td>
                                <td><a href="/home/detail/{{$intern['id']}}" class="btn btn-primary">View</a>
                                    <a href="/reject/{{$intern['id']}}" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                            <?php $n++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
