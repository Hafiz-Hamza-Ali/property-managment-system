@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.teams.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.teams.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('global.teams.fields.name').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('designation', trans('global.teams.fields.designation').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('designation', old('designation'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('designation'))
                        <p class="help-block">
                            {{ $errors->first('designation') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                <label for="type" class="control-label">Photo*</label>
                    {!! Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;','multiple'=>"multiple", 'required' => '']) !!}
                    {!! Form::hidden('photo_max_size', 10) !!}
                    {!! Form::hidden('photo_max_width', 4096) !!}
                    {!! Form::hidden('photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('fb', trans('global.teams.fields.fb').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('fb', old('fb'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('fb'))
                        <p class="help-block">
                            {{ $errors->first('fb') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('twitter', trans('global.teams.fields.twitter').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('twitter', old('twitter'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('twitter'))
                        <p class="help-block">
                            {{ $errors->first('twitter') }}
                        </p>
                    @endif
                </div>
            </div>       
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('insta', trans('global.teams.fields.insta').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('insta', old('insta'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('twitter'))
                        <p class="help-block">
                            {{ $errors->first('twitter') }}
                        </p>
                    @endif
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('linkedin', trans('global.teams.fields.linkedin').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('linkedin', old('linkedin'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('linkedin'))
                        <p class="help-block">
                            {{ $errors->first('linkedin') }}
                        </p>
                    @endif
                </div>
            </div>                              
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

