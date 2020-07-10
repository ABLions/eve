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
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="images">                     
                                <img src={{ asset("storage/AppsStores.png") }}  class="img-fluid img-responsive center-block" id="storeImages" alt="Responsive image">
                            </div>
                            <div class="caption text-center">
                                <h3>Apps Móviles</h3>
                                <p>Android, IOS y aplicaciones multiplataformas.</p>
                                <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="images"> 
                                <img src={{ asset("storage/Web.png") }}  class="img-fluid img-responsive center-block" id="webImages" alt="Responsive image">
                            </div>
                            <div class="caption text-center">
                                <h3>Páginas Web</h3>
                                <p>Formularios de contacto, páginas web</p>
                                <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <div class="images"> 
                            <img src={{ asset("storage/Platform.png") }}  class="img-fluid img-responsive center-block" id="PlatformImages" alt="Responsive image">
                        </div>
                        <div class="caption text-center">
                            <h3>Plataformas</h3>
                            <p>Plataformas empresariales, soluciones a la medida.</p>
                            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="images">
                                <img src={{ asset("storage/e-commerce.png") }}  class="img-fluid img-responsive center-block" id="ecommerceImages" alt="Responsive image">
                            </div>
                        <div class="caption text-center">
                            <h3>E-commerce</h3>
                            <p>Tiendas virtuales, con panel de administración.</p>
                            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="images">
                                <img src={{ asset("storage/GoogleCloud.png") }}  class="img-fluid img-responsive center-block" id="googleCloud" alt="Responsive image">
                                </div>
                            <div class="caption text-center">
                                <h3>Google Cloud</h3>
                                <p>Seguridad e infraestructura de Google Cloud</p>
                                <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="images">
                                <img src={{ asset("storage/SocialNet.png") }}  class="img-fluid img-responsive center-block" id="socialNet" alt="Responsive image">
                            </div>
                        <div class="caption text-center">
                            <h3>Marketing Digital</h3>
                            <p>Mayor visibilidad en redes sociales. </p>
                            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-6 col-sm-offset-6"> 
        <section class="content-header">
            <h1>
                Contáctanos
            </h1>
        </section>
        <div class="content">
            @include('adminlte-templates::common.errors')
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row" style="margin-top:20px">
                        {!! Form::open(['route' => 'myClients.store']) !!}

                            @include('my_clients.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
