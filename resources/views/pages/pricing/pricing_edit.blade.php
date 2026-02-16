@extends('admin_master')

@section('admin')
@section('title')
    Portofolio | Prix
@endsection
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Editer Prix</h1>
                </div>
                <form action="{{ route('pricing.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="controls">
                            <label for="name">Nom Complet</label>
                            <input type="text" class="form-control form-control-user" name="name"
                                value="{{ $item->name }}" placeholder="Nom">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc">Desc</label>
                        <div class="controls">
                            <input type="text" class="form-control form-control-user" name="desc"
                                value="{{ $item->desc }}">
                            @error('desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label for="name">Prix FCFA</label>
                            <input type="text" class="form-control form-control-user"
                                name="price"value="{{ $item->price }}">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Avantages <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="advantage" class="form-control" value="{{ $item->advantage }}"
                                data-role="tagsinput">
                            @error('advantage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Desavantages <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="disadvantage" class="form-control"
                                value="{{ $item->disadvantage }}" data-role="tagsinput">
                            @error('disadvantage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label for="name">WhatsApp Msg</label>
                            <input type="text" class="form-control form-control-user" name="msg_txt"
                                value="{{ $item->msg_txt }}">
                            @error('msg_txt')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <input type="submit" value="Enregistrer" class="btn btn-primary btn-user btn-block">

            </div>
        </div>
    </div>
</div>
@endsection
