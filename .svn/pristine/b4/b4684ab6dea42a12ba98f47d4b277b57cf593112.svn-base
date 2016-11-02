

  <div class="form-group{{ $errors->first('Title', ' has-error') }}">
    <label class="col-lg-3 col-md-3 control-label"> {{ Lang::get('immoclick-lang.title') }} <span class="error">*</span></label>
    <div class="col-lg-9 col-md-9"> 
        {!! Form::text('Title',null, ['class' => 'form-control form-cascade-control input-small'])  !!} 
          <span class="label label-danger">{{ $errors->first('Title', ':message') }}</span>
    </div>
  </div> 

<!--      <div class="form-group{{ $errors->first('Repository', ' has-error') }}">
        <label class="col-lg-3 col-md-3 control-label">{{ Lang::get('immoclick-lang.repository') }}</label>
        <div class="col-lg-9 col-md-9"> 
            {!! Form::text('Repository',null, ['class' => 'form-control form-cascade-control input-small'])  !!}
             <span class="label label-danger">{{ $errors->first('Repository', ':message') }}</span>
        </div>
    </div>-->

    <div class="form-group">
        <label class="col-lg-3 col-md-3 control-label"></label>
        <div class="col-lg-9 col-md-9">
           
            {!! Form::submit(Lang::get('immoclick-lang.submit'), ['class'=>'btn btn-primary text-white']) !!}
        </div>
    </div> 
