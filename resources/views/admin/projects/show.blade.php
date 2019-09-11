@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.project.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $project->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $project->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.client') }}
                                    </th>
                                    <td>
                                        {{ $project->client->first_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.description') }}
                                    </th>
                                    <td>
                                        {!! $project->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.start_date') }}
                                    </th>
                                    <td>
                                        {{ $project->start_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.budget') }}
                                    </th>
                                    <td>
                                        {{ $project->budget }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.project.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $project->status->name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                    <ul class="nav nav-tabs">

                    </ul>
                    <div class="tab-content">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection