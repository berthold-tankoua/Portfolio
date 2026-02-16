@extends('admin_master')

@section('admin')
@section('title')
    Portofolio | Sous categorie
@endsection

<!-- Content Wrapper. Contains page content -->
<br>
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Edit Subcategory </h4>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('subcategory.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="id" value="{{ $subcategory->id }}">
                            <div class="form-group">
                                <h5>Select Category <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select id="select" name="category_id" required class="form-control">
                                        <option value="" selected="">Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $subcategory->category_id ? 'selected' : '' }}>
                                                {{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5> Nom <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $subcategory->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <input type="hidden" name="old_img" value="{{ $subcategory->image }}">
                                <div class="controls">
                                    <input type="file" id="image" name="image" class="form-control">
                                    <br>
                                    <img src="{{ $subcategory->image }}" alt="" id="showImg" width="50px"
                                        height="50px">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->
@endsection
