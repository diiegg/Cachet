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
                <h4>Donators and Sponsors:</h4>
                <ul>
                    @foreach($backers as $backer)
                    <li>{{ $backer[0] }}</li>
                    @endforeach
                </ul>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <p><a class="btn btn-success" href="https://patreon.com/jbrooksuk">Support Cachet</a></p>
                        </div>
                    </div>
                </div>

                <h4>Credits:</h4>
                <ul>
                    @foreach($credits as $credit)
                    <li>{{ $credit[0] }}, {{ $credit[1] }} <a href="https://github.com/{{ $credit[2] }}" class="btn btn-xs btn-primary"><i class="ion ion-social-github"></i> {{ $credit[2] }}</a></li>
                    @endforeach
                </ul>

                <hr>
            </div>
        </div>
    </div>
</div>
@stop
