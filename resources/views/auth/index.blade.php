@extends('layouts.master')


@section('title', 'Users Setup')

@section('content')

<div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Contacts </h3> 
                </div>
                  
                <div class="row">
                
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-body p-t-0">
                                <div class="input-group">
                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div> <!-- End row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-body p-t-10">
                                <div class="media-main">
                                    <a class="pull-left" href="#">
                                        <img class="thumb-lg img-circle bx-s" src="img/avatar-2.jpg" alt="">
                                    </a>
                                    <div class="pull-right btn-group-sm">
                                        <a href="#" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>Jonathan Smith</h4>
                                        <p class="text-muted">Graphics Designer</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>
                                <ul class="social-links list-inline p-b-10">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- end col -->

                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-body p-t-10">
                                <div class="media-main">
                                    <a class="pull-left" href="#">
                                        <img class="thumb-lg img-circle bx-s" src="img/avatar-3.jpg" alt="">
                                    </a>
                                    <div class="pull-right btn-group-sm">
                                        <a href="#" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>Jonathan Smith</h4>
                                        <p class="text-muted">Graphics Designer</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>
                                <ul class="social-links list-inline p-b-10">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- end col -->
</div>
@endsection