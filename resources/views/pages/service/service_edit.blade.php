@extends('admin_master')

@section('admin')
@section('title')
    Portofolio | Servive
@endsection
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">EditerServive</h1>
                </div>
                <form action="{{ route('service.update') }}" method="POST" enctype="multipart/form-data">
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

                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-user btn-block">

            </div>
        </div>
    </div>
</div>
@endsection
