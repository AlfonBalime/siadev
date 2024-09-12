@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Docentes</h3>
        <ul>
            <li><a href="/docentes">Tabela</a></li>
            <li>Docente Detalho</li>
        </ul>
    </div>

    <!-- Header Section with Image and Info -->
    <div class="card height-auto">
        <div class="card-body border">
            <div class="heading-layout1">
                <div class="item-title">
                    {{-- Header Title --}}
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    @if (is_null($detail->controlo_estado))
                        <div class="ribbon bg-primary">
                            <span class="text-white text-center">Ativo</span>
                        </div>
                    @elseif ($detail->controlo_estado == 'deleted')
                        <div class="ribbon bg-danger">
                            <span class="text-white text-center">Nao Ativo</span>
                        </div>
                    @endif
                    <img class="border" src="{{asset('img/pessoa_neutra.png')}}" width="200" height="250" alt="docent">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h4 class="text-dark-medium font-medium">{{$detail->nome_docente}}</h4>
                    </div>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Sexo:</td>
                                    <td class="font-medium text-dark-medium">{{$detail->sexo}}</td>
                                </tr>
                                <tr>
                                    <td>Nivel Educacão:</td>
                                    <td class="font-medium text-dark-medium">{{$detail->nivel_educacao}}</td>
                                </tr>
                                <tr>
                                    <td>Estatuto (P/IP/C):</td>
                                    <td class="font-medium text-dark-medium">{{$detail->categoria_estatuto}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Navigation (Static) -->
    <div class="card ui-tab-card mt-2">
    @include('pages.teachers.menu_tab')

                @if (request('tab') == 'identificacao' || is_null(request('tab')))
                    @include('pages.teachers.identificacao') <!-- Identificao Content -->
               
                @endif

      
    </div>
@endsection
