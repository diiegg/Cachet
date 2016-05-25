@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.credits.credits') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Cachet</h4>

                <p>{!! trans('dashboard.settings.credits.license') !!}</p>

                <hr>

                <h4>{{ trans('dashboard.settings.credits.backers-title') }}</h4>

                <p>{!! trans('dashboard.settings.credits.backers') !!}</p>

                <ul>
                    @foreach($backers as $backer)
                    <li>{{ $backer[0] }}</li>
                    @endforeach
                </ul>

                <hr>

                <h4>{{ trans('dashboard.settings.credits.credits') }}</h4>

                <p>{{ trans('dashboard.settings.credits.thank-you', ['count' => count($credits)]) }}</p>

                <ul class="list-inline">
                    @foreach($credits as $credit)
                    <li>
                        <img src="https://gravatar.com/avatar/{{$credit[2]}}/100" class="img-rounded img-responsive" title="{{ $credit[0] }}" data-toggle="tooltip">
                    </li>
                    @endforeach
                </ul>

                <hr>
            </div>
        </div>
    </div>
</div>
@stop
