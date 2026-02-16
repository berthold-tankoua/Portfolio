@extends('dashboard')

@section('admin')

@section('title')
Portofolio | Service
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste Service</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($services as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td width="10%" class="text-center">
                                        <a href="{{route('service.edit',$item->id)}}" class="btn btn-info btn-sm" style="margin-bottom:5px" ><i class="fas fa-edit" title="Editer"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card shadow p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Ajouter Service</h1>
                </div>
                <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="name">Nom Complet</label>
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Nom">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div><br>
                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-user btn-block">
                        
            </div>
        </div>
    </div>
</div>
@endsection