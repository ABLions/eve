@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            My Clients
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($myClients, ['route' => ['myClients.update', $myClients->id], 'method' => 'patch']) !!}

                        @include('my_clients.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection