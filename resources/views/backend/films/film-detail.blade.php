@extends('backend.master')
@section('main')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <h1>{{ $film->name }}</h1>
        <br />
        <b>Description:</b>
        <p>{{ $film->description}}</p>
        <b>Type:</b>
        <p>{{ $film->type}}</p>
        <b>Sell ticket:</b>
        <p>{{ $numberOfSellTickets }}</p>
        <b>Profit:</b>
        <p>{{ $profit }} VNĐ</p>
</div>
@stop
