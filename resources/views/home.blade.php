@extends('adminTemplate.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ol class="breadcrumb">
              <li><a href="{{ url('/welcome') }}">Home</a></li>
              <li><a href="{{ url('/account') }}">Account</a></li>
              <li class="active">Accountoverzicht</li>
            </ol>
            <div class="panel pane-default">
                    <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-primary btn-lg btn-block">Meldkamer</button></a><br>
                    <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-default btn-lg btn-block">SOREG</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accountoverzicht</div>

                <div class="panel-body">
                    <h2>Algemene informatie</h2>
                    Uw naam:<br> <span class="badge">{{ Auth::user()->name }}</span> <br>
                    Organisatie:<br> <span class="badge">WouwLite</span> <br>
                    Emailadres:<br> <span class="badge">{{ Auth::user()->email }}</span> <br><br>
                    
                    <div class="btn btn-default"><a href="{{ url('/account/edit') }}">Wijzigen</a></div>
                    
                    <h2>Rechten</h2>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Onderdeel</th>
                            <th>Toegang</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <!-- Change code to a for-each loop. -->
                            <td>Meldkamer Globaal</td>
                            <td>
                                @if ((Auth::user()->authDispatchGlobal) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchGlobal) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Meldkamer Organisatie</td>
                            <td>
                                @if ((Auth::user()->authDispatchOrganisatie) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchOrganisatie) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Meldkamer Security</td>
                            <td>
                                @if ((Auth::user()->authDispatchSecurity) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchSecurity) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Meldkamer Medical</td>
                            <td>
                                @if ((Auth::user()->authDispatchMedical) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchMedical) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Meldkamer Fire</td>
                            <td>
                                @if ((Auth::user()->authDispatchFire) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchFire) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td>SOREG</td>
                            <td>
                                @if ((Auth::user()->authDispatchSOREG) == 1)
                                    <span class="label label-success">Beschikbaar</span>
                                @elseif ((Auth::user()->authDispatchSOREG) == 0)
                                    <span class="label label-danger">Geen licentie</span>
                                @else
                                    <span class="label label-warning">Onbekend</span>
                                @endif
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
