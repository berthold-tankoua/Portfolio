@extends('dashboard')

@section('admin')

@section('title')
Portofolio | Competence
@endsection
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Editer Competence</h1>
                </div>
                <form action="{{route('skill.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="name">Nom Complet</label>
                            <input type="text" class="form-control form-control-user" name="name" value="{{$item->name}}" placeholder="Nom">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="icon">Icone</label>
                            <input type="text" class="form-control form-control-user" name="icon"  value="{{$item->icon}}">
                            @error('icon')
                             <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="exp">Experience</label>
                            <input type="number" class="form-control form-control-user" name="exp" value="{{$item->exp}}">
                            @error('exp')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="certif">Certification Image</label>
                            <input type="file" class="form-control form-control-user" name="certif" value="{{$item->certif}}">
                            @error('certif')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                           <input type="hidden" name="old_certif" value="{{ $item->certif }}">
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="image">Image</label>
                            <input type="file" class="form-control form-control-user" name="image" placeholder="Image ">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                           <img class="mt-2" src="{{ asset($item->image) }}" width="50px" height="50px">
                           <input type="hidden" name="old_img" value="{{ $item->image }}">
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="desc"
                                value="{{$item->desc}}">
                                @error('desc')
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