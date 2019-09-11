@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.document.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.document.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $document->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.document.fields.project') }}
                                    </th>
                                    <td>
                                        {{ $document->project->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.document.fields.document_file') }}
                                    </th>
                                    <td>
                                        {{ $document->document_file }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.document.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $document->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.document.fields.description') }}
                                    </th>
                                    <td>
                                        {!! $document->description !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection