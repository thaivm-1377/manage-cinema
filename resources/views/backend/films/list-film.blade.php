@extends('backend.master')
@section('main')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <div class="row">
            <div class="large-10 columns">
                <div class="page-name">
                    <h3 class="left">{{ trans('messages.film') }}</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <table class="table tab-content table-bordered">
            <thead>
            <tr>
                <th>@sortablelink('id', 'ID')</th>
                <th>@sortablelink('name', 'Film Name')</th>
                <th>{{ trans('messages.film-description') }}</th>
                <th>{{ trans('messages.type') }}</th>
                <th>@sortablelink('profit', 'Profit (VND)')</th>
            </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                    <tr>
                        <td>{{ $film->id }}</td>
                        <td><a href="{{ route('films.show', $film->id) }}">{{ $film->name }}</a></td>
                        <td>{{ $film->description }}</td>
                        <td>{{ $film->type }}</td>
                        <td>{{ $film->profit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@stop
