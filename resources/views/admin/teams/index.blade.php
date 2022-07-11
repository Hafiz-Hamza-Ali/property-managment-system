@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.teams.title')</h3>
    <p>
        <a href="{{ route('admin.teams.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
    </p>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($teams) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('global.teams.fields.name')</th>
                        <th>@lang('global.teams.fields.designation')</th>
                        <th>@lang('global.teams.fields.photo')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($teams) > 0)
                        @foreach ($teams as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                @can('user_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'>{{ $user->name }}</td>
                                <td field-key='email'>{{ $user->designation }}</td>
                                <td field-key='email'>{{ $user->photo }}</td>

                                                                <td>
                                    
                                    <!-- <a href="{{ route('admin.teams.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a> -->
                                
                                    <a href="{{ route('admin.teams.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                    
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <!-- <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan

    </script> -->
@endsection