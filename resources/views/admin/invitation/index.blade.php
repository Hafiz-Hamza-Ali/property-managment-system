@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Contact Messages</h3>


    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.invitations.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.invitations.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($invitations) > 0 ? 'datatable' : '' }} @can('note_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('note_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Number</th>
                        <th>Content</th>
                        <th>Action</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($invitations) > 0)
                        @foreach ($invitations as $note)
                            <tr data-entry-id="{{ $note->id }}">
                                @can('note_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='property'>{{ $note->name or '' }}</td>
                                <td field-key='user'>{{ $note->email or '' }}</td>
                                <td field-key='note_text'>{{ $note->subject or '' }}</td>
                                <td field-key='note_text'>{{ $note->number or '' }}</td>
                                <td field-key='note_text'>{{ $note->content or '' }}</td>
                                <td>
                                    @can('note_edit')
                                    <a href="{{ route('admin.invitations.edit',[$note->id]) }}" class="btn btn-xs btn-info">Show</a>
                                    @endcan
                                    @can('note_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.invitations.destroy', $note->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
       

    </script>
@endsection