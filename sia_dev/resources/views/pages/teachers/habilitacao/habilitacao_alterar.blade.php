@extends('layouts.app')
@section('title', 'Habilitacao Update')
@section('content') 
    <!-- Identificao Content -->
    @include('pages.teachers.header_teacher')

    <div class="tab-content mt-4 mb-8">
        @include('pages.teachers.menu_tab')
        
        <div class="card height-auto">
            <div class="card-body border">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Habilitação Update</h3>
                    </div>
                </div>
            
                <!-- Update form -->
                <form method="POST" action="{{ route('habilitacao.update', $edit->id_habilitacao) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <input type="hidden" name="id_funcionario" value="{{ $edit->id_funcionario }}">
                    
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Nome Habilitação *</label>
                            <input type="text" name="habilitacao" value="{{ $edit->habilitacao }}" placeholder="ex: licenciatura" required class="form-control border">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Area Especialidade *</label>
                            <input type="text" name="area_especialidade" value="{{ $edit->area_especialidade }}" placeholder="ex: Parteira" required class="form-control border">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Universidade origem *</label>
                            <input type="text" name="universidade_origem" value="{{ $edit->universidade_origem }}" required class="form-control border">
                        </div>
                    </div>

                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                        <a href="{{ route('habilitacao_funcionario', $edit->id_funcionario) }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancelar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
