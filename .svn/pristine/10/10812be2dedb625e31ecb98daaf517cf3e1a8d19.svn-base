<div class="col-md-6"> 
      {!! Form::hidden('alert_id', $data[0]->id, array('id' => 'alert_id')) !!}
      @if(isset($data[0]->buildingType['NameFR']) && isset($data[0]->buildingType['NameEN']))
     <div class="form-group{{ $errors->first('Date', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Search type Name(FR)</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('',$data[0]->buildingType['NameFR'], ['class' => 'form-control' , 'readonly'=>'readonly' ]) !!}
          
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Date', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Search type Name(EN)</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('',$data[0]->buildingType['NameEN'], ['class' => 'form-control' , 'readonly'=>'readonly' ]) !!}
          
        </div>
    </div>  
    @endif
    
    @if(isset($cityData[0]->city['CityName']) && isset($cityData[0]->city['CityName']))
    <div class="form-group">
        <label class="col-lg-4 col-md-4 control-label">Search Alert City</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('',$cityData[0]->city['CityName'], ['class' => 'form-control' , 'readonly'=>'readonly' ]) !!}
          
        </div> 
    </div>
    @endif 
    
    @if(isset($catData[0]->BuildingCategory['NameFR']) && isset($catData[0]->BuildingCategory['NameEN']))
    <div class="form-group{{ $errors->first('Date', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">  Alert Category(EN)</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('',$catData[0]->BuildingCategory['NameEN'], ['class' => 'form-control' , 'readonly'=>'readonly' ]) !!}
        </div> 
    </div> 
    <div class="form-group">
        <label class="col-lg-4 col-md-4 control-label">  Alert Category(FR)</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('',$catData[0]->BuildingCategory['NameEN'], ['class' => 'form-control' , 'readonly'=>'readonly' ]) !!}
        </div> 
    </div> 
    @endif
    
     <div class="form-group{{ $errors->first('Email', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Email</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::Text('Email',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Email', ':message') }}</span>
        </div>
    </div> 


    <div class="form-group{{ $errors->first('Min_price', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Min price</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Min_price',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Min_price', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Max_price', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Max price</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Max_price',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Max_price', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Min_rooms_number', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Min rooms number</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Min_rooms_number',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Min_rooms_number', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Min_bathroom_number', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Min bathroom number</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Min_bathroom_number',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Min_bathroom_number', ':message') }}</span>
        </div>
    </div> 


     <div class="form-group{{ $errors->first('Living_area_size', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label"> Living area size</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Living_area_size',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Living_area_size', ':message') }}</span>
        </div>
    </div> 

     <div class="form-group{{ $errors->first('Property_size', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Property size</label>
        <div class="col-lg-8 col-md-8"> 
              {!! Form::number('Property_size',null, ['class' => 'form-control', 'id'=>'breview' ]) !!}
            <span class="label label-danger">{{ $errors->first('Property_size', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Brand_new', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Brand new</label>
        <div class="col-lg-8 col-md-8"> 
              
              <select name="Brand_new" id="Brand_new" class="form-control">
                  <option value="0" @if($systemAlertSearch->Brand_new==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->Brand_new==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('Brand_new', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Free_tour', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Free tour</label>
        <div class="col-lg-8 col-md-8"> 
              
              <select name="Free_tour" id="Free_tour" class="form-control">
                  <option value="0" @if($systemAlertSearch->Free_tour==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->Free_tour==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('Free_tour', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Garage', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Garage</label>
        <div class="col-lg-8 col-md-8"> 
           
              <select name="Garage" id="Garage" class="form-control">
                  <option value="0" @if($systemAlertSearch->Garage==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->Garage==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('Garage', ':message') }}</span>
        </div>
    </div> 


<div class="form-group{{ $errors->first('Pool', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Pool</label>
        <div class="col-lg-8 col-md-8"> 
              
              <select name="Pool" id="Pool" class="form-control">
                   <option value="0" @if($systemAlertSearch->Pool==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->Pool==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('Pool', ':message') }}</span>
        </div>
    </div> 


 <div class="form-group{{ $errors->first('No_neighbors_behind', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">No neighbors behind</label>
        <div class="col-lg-8 col-md-8"> 
         
              <select name="No_neighbors_behind" id="No_neighbors_behind" class="form-control">
                  <option value="0" @if($systemAlertSearch->No_neighbors_behind==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->No_neighbors_behind==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('No_neighbors_behind', ':message') }}</span>
        </div>
    </div> 

    <div class="form-group{{ $errors->first('Disabled', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Disabled</label>
        <div class="col-lg-8 col-md-8"> 
         
              <select name="Disabled" id="Disabled" class="form-control">
                  <option value="0" @if($systemAlertSearch->Disabled==0) selected="selected" @endif >No</option>
                  <option value="1" @if($systemAlertSearch->Disabled==1) selected="selected" @endif>Yes</option>
              </select>
            <span class="label label-danger">{{ $errors->first('Disabled', ':message') }}</span>
        </div>
    </div> 
 
   
    <div class="form-group">
        <label class="col-lg-4 col-md-4 control-label"></label>
        <div class="col-lg-2 col-md-2">

            {!! Form::submit('Submit', ['class'=>'btn btn-primary text-white']) !!}
        </div>
         <div class="col-lg-2 col-md-2">
             <a href="{{ route('systemAlertSearch') }}">
            {!! Form::button('Back', ['class'=>'btn btn-primary text-white']) !!} </a>
        </div>
    </div>  

</div>
      