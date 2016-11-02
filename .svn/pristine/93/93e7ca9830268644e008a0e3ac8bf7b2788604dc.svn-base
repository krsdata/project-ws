@extends('packages::layouts.master') 
    @section('content') 
      @include('packages::partials.main-header')
      <!-- Left side column. contains the logo and sidebar -->
        @include('packages::partials.main-sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"> 
      @include('packages::partials.breadcrumb') 

        <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
              <div class="row"> 
                  <div class="col-md-12">  
                       <div class="panel panel-cascade">
                          <div class="panel-body ">
                              <div class="row">
                                  <div class="box-header">
                                    <div class="box-tools">
                                      <div style="width: 150px;" class="input-group"> 
                                          <a href="{{ route('group')}}">
                                            <button class="btn btn-sm btn-primary"><i class="fa fa-group"></i> View  Group</button> 
                                          </a>
                                      </div>
                                    </div>
                                  </div><!-- /.box-header -->
                                  <div class="col-md-9">
                                        {!! Form::model($group, ['method' => 'PATCH', 'route' => ['group.update', $group->GroupID],'class'=>'form-horizontal','id'=>'group_title']) !!}
                                          @include('packages::users.group.form', compact('group'))
                                      {!! Form::close() !!}
                                  </div>
                              </div>
                          </div>
                    </div>
                  
                </div>            
              </div>  
            <!-- Main row --> 
          </section><!-- /.content -->
      </div> 
   
@stop
