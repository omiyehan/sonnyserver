@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.transaction.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $transaction->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.project') }}
                                    </th>
                                    <td>
                                        {{ $transaction->project->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.transaction_type') }}
                                    </th>
                                    <td>
                                        {{ $transaction->transaction_type->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.income_source') }}
                                    </th>
                                    <td>
                                        {{ $transaction->income_source->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.amount') }}
                                    </th>
                                    <td>
                                        ${{ $transaction->amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.currency') }}
                                    </th>
                                    <td>
                                        {{ $transaction->currency->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.transaction_date') }}
                                    </th>
                                    <td>
                                        {{ $transaction->transaction_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $transaction->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.transaction.fields.description') }}
                                    </th>
                                    <td>
                                        {!! $transaction->description !!}
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