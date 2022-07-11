@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.notes.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <td field-key='property'>{{ $invitations->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td field-key='user'>{{ $invitations->email or '' }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td field-key='note_text'>{!! $invitations->subject !!}</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td field-key='note_text'>{!! $invitations->number !!}</td>
                        </tr>
                        <tr>
                            <th>Content</th>
                            <td field-key='note_text'>{!! $invitations->content !!}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td field-key='note_text'>{!! $invitations->created_at !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.invitations.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
