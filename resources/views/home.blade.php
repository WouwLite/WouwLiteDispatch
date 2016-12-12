@extends('adminTemplate.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel pane-default">
                <div class="panel-heading"><h1>WouwLite Dispatch</h1></div>

                <div class="alert alert-success" role="success">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <span class="sr-only">Success:</span>
                    U bent succesvol aangemeld!
                </div>

                <div class="panel-body">
                    <p>Welkom in het gebruikersportal</p>
                    
                    <a href="dashboard"><button type="button" class="btn btn-default">Naar de Meldkamer</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Account</div>

                <div class="panel-body">
                    <p>Accountoverzicht</p>

                    <p>You are logged in!</p>
                    
                    <p>Name: <span class="badge">{{ Auth::user()->name }}</span></p> <br>
                    <p>Email: <span class="badge">{{ Auth::user()->email }}</span></p> <br><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
