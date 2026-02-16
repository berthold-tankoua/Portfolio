@extends('dashboard')

@section('admin')

@section('title')
Portofolio | Prix
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste Prix</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pricings as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}} FCFA</td>
                                    <td width="10%" class="text-center">
                                        <a href="{{route('pricing.edit',$item->id)}}" class="btn btn-info btn-sm" style="margin-bottom:5px" ><i class="fas fa-edit" title="Editer"></i></a>
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
                    <h1 class="h4 text-gray-900 mb-4">Ajouter Prix</h1>
                </div>
                <form action="{{route('pricing.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">Selectionner une Categorie</label>
                        <div class="controls">
                            <select name="category_id" class="form-control"  required oninvalid="this.setCustomValidity('Selectionner une categorie')" oninput="this.setCustomValidity('')">
                                <option value="" selected="" disabled="">Selectionner Categorie</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>	
                                @endforeach
                            </select>
                            @error('category_id') 
                                <span class="text-danger">{{ $message }}</span>
                            @enderror 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <div class="controls">         
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Nom">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc">Desc</label>
                        <div class="controls">         
                            <input type="text" class="form-control form-control-user" name="desc" placeholder="Description">
                            @error('desc')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label for="name">Prix FCFA</label>
                            <input type="text" class="form-control form-control-user" name="price" placeholder="Prix service">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Avantages <span class="text-danger">*</span></h5>
                        <div class="controls" >
                            <input type="text" name="advantage" class="form-control" value="Aucun" data-role="tagsinput">
                            @error('advantage') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Desavantages <span class="text-danger">*</span></h5>
                        <div class="controls" >
                            <input type="text" name="disadvantage" class="form-control" value="Aucun" data-role="tagsinput">
                            @error('disadvantage') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label for="name">WhatsApp Msg</label>
                            <input type="text" class="form-control form-control-user" name="msg_txt" placeholder="Message WhatsApp">
                            @error('msg_txt')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div>
                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-user btn-block">
                        
            </div>
        </div>
    </div>
</div>
@endsection