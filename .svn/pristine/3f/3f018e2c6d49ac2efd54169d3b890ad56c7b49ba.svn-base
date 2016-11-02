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
                    <div class="col-md-12">
                       <div class="panel panel-cascade">
                          <div class="panel-body ">
                              <div class="row">
                                 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{ Lang::get('immoclick-lang.groups') }}</h3>
                  <div class="box-tools">
                    <div style="width: 150px;" class="input-group"> 
                        <a href="{{ route('group.create')}}">
                          <button class="btn btn-sm btn-primary"><i class="fa fa-user-plus"></i>{{ Lang::get('immoclick-lang.add_group') }}</button> 
                        </a>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                
                <p>
                    @if(Session::has('flash_alert_notice'))
                    <div class="alert alert-success ">
                         {{ Session::get('flash_alert_notice') }} 
                    </div>
                  @endif
                </p>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>{{ Lang::get('immoclick-lang.id') }}</th>
                      <th>{{ Lang::get('immoclick-lang.title') }}</th>
<!--                      <th>{{ Lang::get('immoclick-lang.repository') }}</th>-->
                      <th>Date</th>
                      <th>{{ Lang::get('immoclick-lang.action') }}</th>
                    </tr>
                     @foreach ($groups as $key => $value)  
                      <tr>
                        <td>{{ $value->GroupID }}</td>
                        <td>{{ $value->Title }}</td>
<!--                        <td>{{ $value->Repository }}</td>-->
                        <td>{{ $value->updated_at }}</td>
                        <td> 
                          <a href="{{ route('group.edit',$value->GroupID)}}">
                            <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                          </a>
                         <!--  <a href="route('group.destroy')">    
                            <i class="fa fa-fw fa-trash" title="Delete"></i>
                          </a> --> 
                          </td>
                      </tr>
                     @endforeach 
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
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
