@extends('layouts.app')
@section('title', 'Students')
@section('content')
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Estudantes</h3>
        <ul>
            <li>
                <a href="/home">Home</a>
            </li>
            <li>Formulário de Submissão de Estudante</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>{{ isset($student) ? 'Editar Estudante' : 'Adicionar novo Estudante' }}</h3>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="new-added-form"
                action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($student))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Nome Completo *</label>
                        <input type="text" class="form-control" name="complete_name"
                            value="{{ old('complete_name', $student->complete_name ?? '') }}" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Sexo *</label>
                        <select class="form-control select2" name="gender" required>
                            <option value="" disabled>Selecionar *</option>
                            <option value="Male" {{ old('gender', $student->gender ?? '') == 'Male' ? 'selected' : '' }}>
                                Masculino</option>
                            <option value="Female"
                                {{ old('gender', $student->gender ?? '') == 'Female' ? 'selected' : '' }}>Feminino</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Lugar de nascimento *</label>
                        <input type="text" class="form-control" name="place_of_birth"
                            value="{{ old('place_of_birth', $student->place_of_birth ?? '') }}" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Data de Nascimento *</label>
                        <input type="date" placeholder="dd/mm/yyyy" class="form-control"
                            data-position='bottom right' name="date_of_birth"
                            value="{{ old('date_of_birth', isset($student->date_of_birth) ? $student->date_of_birth->format('d/m/Y') : '') }}"
                            required>
                        <!-- <i class="far fa-calendar-alt"></i> -->
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Número Registo Estudante (NRE)</label>
                        <input type="text" class="form-control" name="nre"
                            value="{{ old('nre', $student->nre ?? '') }}" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Faculdade</label>
                        <input type="text" name="faculty" class="form-control" value="CIÊNCIA DA SAÚDE" readonly>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Programa Estudo *</label>
                        <select class="form-control select2" name="id_programa_estudo" required>
                            @foreach ($programaEstudo as $data)
                                <option value="{{ $data->id_programa_estudo }}">
                                    {{ $data->nome_programa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Semestre *</label>
                        <select class="form-control select2" name="id_semestre" required>
                            @foreach ($semestre as $data)
                                <option value="{{ $data->id_semestre }}">
                                    {{$data->numero_semestre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Ano Início</label>
                        <input type="number" class="form-control" name="start_year"
                            value="{{ old('start_year', $student->start_year ?? '') }}" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="text-dark-medium">Submeter imagem de Estudante (150px X 150px)</label>
                        <input type="file" class="form-control-file" name="student_image">
                        @if (isset($student) && $student->student_image)
                            <img src="{{ asset('storage/' . $student->student_image) }}" alt="Student Image"
                                width="100">
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Observação BIO</label>
                        <textarea class="textarea form-control" name="observation" id="form-message" rows="5">{{ old('observation', $student->observation ?? '') }}</textarea>
                    </div>
                    <div class="col-md-12 form-group text-right">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                            {{ isset($student) ? 'Atualizar' : 'Salvar' }}
                        </button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Admit Form Area End Here -->
@endsection
