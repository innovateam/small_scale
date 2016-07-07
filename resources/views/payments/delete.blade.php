@extends('layouts.master')

@section('title')
Delete Payment?
@endsection
        

@section('content')

<div class="wraper container-fluid">

    <div class="page-title"> 
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/payments') }}">Payments</a></li>
            <li class="active">Delete</li>
        </ol>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-color panel-danger">
            <div class="panel-heading"> 
                <h3 class="panel-title">Delete Payment ?</h3> 
            </div> 
            <div class="panel-body text-center"> 
            <h3>GHs {{ $payment->amount }} [{{ $payment->member->company }}]</h3>
            <p>Are you sure you want to delete ?</p>
            <br>

            </div> 
            <div class="panel-footer">
                <button class="btn btn-primary"> Cancel</button>
                <a href="{{ url('/payments/destroy/'.$payment->_id) }}" class="btn btn-danger pull-right"> Confirm Delete</a>
            </div>
        </div>
    </div>

</div>
@endsection

