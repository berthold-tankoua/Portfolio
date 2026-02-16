@extends('admin_master')

@section('admin')
@section('title')
    Portofolio | Sous categorie
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Content Wrapper. Contains page content -->

<div class="container-fluid">
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-7">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">SubCategorie Liste <span
                                class="badge badge-danger badge-pill">{{ count($subcategories) }}</span></h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped table-bordered display"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Categorie</th>

                                        <th>Nom</th>
                                        <th style="text-align: center !important;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $item)
                                        <tr>
                                            <td><img src="{{ $item->img_url }}" alt="category image"
                                                    style="width: 40px; height: 40px;"></td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td width="20%" style="text-align: center !important;">
                                                <a href="{{ route('subcategory.edit', $item->id) }}"
                                                    class="btn btn-info" style="margin-bottom: 5px;"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="{{ route('subcategory.delete', $item->id) }}" id="delete"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ===========================================
            Add Subcategory Section
            ============================================ --}}
            <div class="col-5">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Add SubCategory </h4>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>Selectionner Categorie <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select id="select" name="id" required class="form-control">
                                        <option value="" selected disabled>Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Nom <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" value="">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" id="image" name="image" class="form-control">

                                    <img src="" alt="" id="showImg">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info" value="Ajouter">
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
<script type="text/javascript">
    $(document).ready(function() {

        $('#image').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $("#showImg").attr("src", e.target.result).width(80).height(80);
            }

            reader.readAsDataURL(e.target.files[0]);

        });

    });
</script>
@endsection
