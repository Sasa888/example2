@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong></strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3><strong>Thank you for your time</strong></h3>
                        <p>Your selection has been registered.</p>
                    <br>
                    <br>
                       
                     <a class="btn btn-primary" href="https://home.kuehne-nagel.com" role="button">BACK TO KUEHNE+NAGEL</a>
                       

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
   {{-- <script src="{{ URL::to('js/custom.js') }}"></script> --}} 
@endsection

