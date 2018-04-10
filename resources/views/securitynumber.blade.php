@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

           <div class="panel-body">
                    <form class="form-horizontal" method="GET" action="{{ route('home') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label">Input security code: </label>

                            <div class="col-md-6">
                                <input id="text" type="password" class="form-control" name="code" value="" required autofocus>
                                
                                
                            </div>
                        </div>
                        <br><br>
                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Verify
                                </button>
                            </div>
                        </div>

                 
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
