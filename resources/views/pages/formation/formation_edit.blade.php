@extends('admin_master')

@section('admin')
@section('title')
    Portofolio |Formation
@endsection
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">EditerFormation</h1>
                </div>
                <form action="{{ route('formation.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="name">Nom Complet</label>
                            <input type="text" class="form-control form-control-user" name="name"
                                value="{{ $item->name }}" placeholder="Nom">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="duration">Duree</label>
                            <input type="text" class="form-control form-control-user" name="duration"
                                value="{{ $item->duration }}">
                            @error('duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="image">Certification Image</label>
                            <input type="file" class="form-control form-control-user" name="image"
                                value="{{ $item->image }}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="hidden" name="old_image" value="{{ $item->image }}">
                        </div>
                    </div><br>

                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-user btn-block">

            </div>
        </div>
    </div>
</div>
@endsection
