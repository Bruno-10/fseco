@extends('layouts.layout')

@section('titulo')
    Pagina de Perfil
@endsection

@section('principal')
<div class="container-fluid padding">
                <main class="row col-sm-12 col-md-12 col-lg-12 margencero">
                    <div class="row col-sm-12 col-md-12 col-lg-12 emp-profile margencero">
                        <form method="post">
                            <div class="row col-sm-12 col-md-12 col-lg-12">
                                <div class="col-md-6  cajausuario">
                                    <div class="profile-img marco row">

                                    <img src="/storage/{{$usuario['img']}} " alt="">
                                        
                                        <div class="col-md-4 col-lg-8 col-sm-2">
                                            <div class="profile-head">
                                                <h5>
                                                    
                                                </h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div id="datos">
                            <div class="profile-head"> 
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos personales</a>
                                    </li>
{{--                                     <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Compras realizadas</a>
                                    </li> --}}
                                </ul>
                            </div>
                               
                                <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Nombre</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>{{$usuario['nombre']}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Apellido</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>{{$usuario['apellido']}}</p>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>{{$usuario['email']}}</p>
                                                        </div>
                                                    </div>
                                        </div>
{{--                                         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Experiencia</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Junior</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>English Level</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Expert</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Availability</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>6 months</p>
                                                        </div>
                                                    </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Your Bio</label><br/>
                                                    <p>Your detail description</p>
                                                </div>
                                            </div>
                                        </div> --}} 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>           
                    </div>
                </main>
    </div>
@endsection