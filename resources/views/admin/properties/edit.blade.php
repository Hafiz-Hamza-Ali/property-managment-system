@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.properties.title')</h3>
    {!! Form::model($property, ['method' => 'PUT', 'route' => ['admin.properties.update', $property->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
        <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('global.properties.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('global.properties.fields.address').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Total Area', trans('global.properties.fields.area').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('area', old('area'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('area'))
                        <p class="help-block">
                            {{ $errors->first('area') }}
                        </p>
                    @endif
                </div>
            </div>            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('price', trans('global.properties.fields.price').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('price'))
                        <p class="help-block">
                            {{ $errors->first('price') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('global.properties.fields.description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('global.properties.fields.phone').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location', trans('global.properties.fields.location').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location'))
                        <p class="help-block">
                            {{ $errors->first('location') }}
                        </p>
                    @endif
                </div>
            </div>      
            <div class="row">
                <div class="col-xs-12 form-group">
                    @php 
                    $type['0']='Sale';
                    $type['1']='Rent';
                    @endphp
                    {!! Form::label('type', trans('global.properties.fields.type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('type',$type, old('type_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>                       
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', trans('global.properties.fields.description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('global.properties.fields.phone').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>            
            <!-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location', trans('global.properties.fields.location').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>       -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    @php 
                    $type['0']='Sale';
                    $type['1']='Rent';
                    @endphp
                    {!! Form::label('type', trans('global.properties.fields.type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('type',$type, old('type_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>                       
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', trans('global.properties.fields.photo').'', ['class' => 'control-label']) !!}
                    {!! Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;','multiple'=>"multiple"]) !!}
                    {!! Form::hidden('photo_max_size', 10) !!}
                    {!! Form::hidden('photo_max_width', 4096) !!}
                    {!! Form::hidden('photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                    <input type="file" class="form-control" name="imagen[]" multiple/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bedroom', trans('global.properties.fields.bedroom').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('bedroom', old('bedroom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bedroom'))
                        <p class="help-block">
                            {{ $errors->first('bedroom') }}
                        </p>
                    @endif
                </div>
            </div>  
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('garage', trans('global.properties.fields.garage').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('garage', old('garage'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('garage'))
                        <p class="help-block">
                            {{ $errors->first('garage') }}
                        </p>
                    @endif
                </div>
            </div>                       
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sqft', trans('global.properties.fields.sqft').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('sqft', old('sqft'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sqft'))
                        <p class="help-block">
                            {{ $errors->first('sqft') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @php 
                    $type['0']='Yes';
                    $type['1']='No';
                    @endphp
                    {!! Form::label('balcony', trans('global.properties.fields.balcony').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('balcony',$type, old('type_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('balcony'))
                        <p class="help-block">
                            {{ $errors->first('balcony') }}
                        </p>
                    @endif
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bathroom', trans('global.properties.fields.bathroom').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('bathroom', old('bathroom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bathroom'))
                        <p class="help-block">
                            {{ $errors->first('bathroom') }}
                        </p>
                    @endif
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tv', trans('global.properties.fields.tv').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('tv', old('bathroom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tv'))
                        <p class="help-block">
                            {{ $errors->first('tv') }}
                        </p>
                    @endif
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('floors', trans('global.properties.fields.floors').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('floors', old('floors'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('floors'))
                        <p class="help-block">
                            {{ $errors->first('floors') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('global.properties.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 form-group">
                    @php 
                    $type['0']='Featured';
                    $type['1']='notFeatured';
                    @endphp
                    {!! Form::label('pro_type', trans('global.properties.fields.pro_type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('pro_type',$type, old('pro_type'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

