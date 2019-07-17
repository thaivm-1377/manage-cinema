<div class="no-padding">
    <div class="large-2 medium-12 small-12 columns">
        <ul class="side-nav">
            <li>
                <a class="padding-0" href="{{ route('users.index') }}">
                    <div class="col-md-4"><i class="fa fa-user-circle-o"></i></div>
                    {{ trans('messages.user-list') }}
                </a>
            </li>
            <li>
                <a class="padding-0" href="">
                    <div class="col-md-4"><i class="fa fa-windows"></i></div>
                    {{ trans('messages.room') }}
                </a>
            </li>
            <li>
                <a class="padding-0" href="">
                    <div class="col-md-4"><i class="fa fa-money"></i></div>
                    {{ trans('messages.profit') }}
                </a>
            </li>
            <li>
                <a class="padding-0" href="{{ action('FilmController@index') }}">
                    <div class="col-md-4">
                        <i class="fa fa-film" aria-hidden="true"></i>
                    </div>
                    {{ trans('messages.film') }}
                </a>
            </li>
            
            <li>
                <a class="padding-0" href="{{ route('logout') }}">
                    <div class="col-md-4">
                        <i class="fa fa-sign-out"></i>
                    </div>
                    {{ trans('messages.logout') }}
                </a>
            </li>
        </ul>
    </div>
</div>
