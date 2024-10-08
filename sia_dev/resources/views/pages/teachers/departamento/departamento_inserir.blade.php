
@extends('layouts.app')
@section('title', 'Inserir Departamento')
@section('content') 
 

    
     @include('pages.teachers.header_teacher')


          
              <div class="tab-content mt-4 mb-8">              
            
                    @include('pages.teachers.menu_tab')
                        
                    <div class="card height-auto">
                        <div class="card-body border">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Departamento Funcionario Inserir</h3>
                                </div>
                            
                            </div>
                        
                            <form class="new-added-form mb-4" method="POST" action="{{ route('store_departamento') }}"   enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_funcionario" value="{{ $id }}">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    
                                        <label>Faculdade *</label>
                                        <select selected class="select2" name="id_faculdade" readonly>                                           
                                            @foreach ($fac as $data)
                                                <option selected value="{{ $data->id_faculdade }}" readonly>{{ $data->nome_faculdade }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                       
                                        <label>Departamento *</label>
                                        <select class="select2" name="id_departamento">
                                            <option selected disabled value="">Escolha *</option>
                                            @foreach ($dep as $data)
                                                <option value="{{ $data->id_departamento }}">{{ $data->nome_departamento }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                 
                                </div>


                                <div class="row">
                                    <div class="col-6-xxxl col-lg-6 col-12 form-group">
                                        <label>Data inicio*</label>
                                        <input type="date" name="data_inicio" class="form-control" required>
                                    </div>

                                    <div class="col-6-xxxl col-lg-6 col-12 form-group">
                                        <label>Data Fim</label>
                                        <input type="date" name="data_fim" class="form-control">
                                    </div>
                                    
                                 
                                </div>
                            

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <a href="{{ route('departamento', $detail->id_funcionario) }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancelar</a>

                                </div>
            
                            </form>
                        </div>
                     </div>

             </div>
              
            
     
            
   
@endsection

