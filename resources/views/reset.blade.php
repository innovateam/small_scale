@extends('layouts.auth')


@section('title')
 Request for password reset
@endsection

@section('content')

	 <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">

                <form method="post" action="{{ url('/login') }}" role="form" class="text-center"> 
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class="form-group m-b-0"> 
                        <div class="input-group"> 
                            <input type="password" class="form-control" placeholder="Enter Email"> 
                            <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                                        
                
            </div>
        </div>
@endsection