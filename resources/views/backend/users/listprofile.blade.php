@extends('backend.master')
@section('main')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <section id="general">
            <div class="row">
                <div class="custom-panel columns">
                    <div class="custom-panel-heading">
                        <h4>{{ trans('messages.user-list') }}</h4>
                    </div>
                    <div class="custom-panel-body">
                            <h5>{{ trans('messages.enter-link') }}</h5>
                            <input type="text" name="link">
                            <a href="#" class="button radius tiny coral-bg button-slide">{{ trans('messages.add') }}</a>
                        </div>
                    <div class="custom-panel-body display-inline">
                        <ul class="slide-list">
                            @foreach($listuser as $value)
                                <li class="user-item display-inline">
                                    {{ HTML::image($value->pathImage) }}
                                    <div class="user-sub">
                                        <div>
                                            <a href="#"><b>{{ $value->name }}</b></a>
                                        </div>
                                        <div>
                                            <a href="#"><b>{{ trans('messages.email') }}: {{ $value->email }}</b></a>
                                        </div>
                                        <div class="btn-group">
                                            {!! Form::open(['action' => ['UserController@destroy', $value->id], 'method' =>  'DELETE']) !!}
                                                <div class="btn-group-sm">
                                                    <a href="{{ action('UserController@edit', ['id' => $value->id]) }}" class="button radius tiny coral-bg button-slide">
                                                        {{ trans('messages.change') }}
                                                    </a>
                                                   {!! Form::submit(Lang::get('messages.del'), ['class' => 'button radius tiny blue-bg button-slide']) !!}
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <br />
        </section>
    </div>
@stop
