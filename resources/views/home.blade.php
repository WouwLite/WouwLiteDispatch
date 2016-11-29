@extends('adminTemplate.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel pane-default">
                <div class="panel-heading">Title</div>
                
                <div class="panel-body">
                    Hello world!<br><br>
                    
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
                    You are logged in!<br><br>
                    
                    Name: <span class="badge">{{ Auth::user()->name }}</span> <br>
                    Email: <span class="badge">{{ Auth::user()->email }}</span><br><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
