@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            My Clients
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                <img src={{ asset("storage/Robot1.jpg") }}>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'myClients.store']) !!}

                        @include('my_clients.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
