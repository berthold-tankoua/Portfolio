@extends('admin_master')

@section('admin')
@section('title')
    portofolio | A propos
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->

<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Mes Projets </h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped table-bordered display"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>sub</th>
                                        <th>Status</th>
                                        <th style="text-align: center !important;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->sub }}</td>
                                            <td>
                                                {{ $item->status }}
                                            </td>
                                            <td style="text-align: center !important;">
                                                <a href="{{ route('project.edit', $item->id) }}" class="btn btn-info"
                                                    style="margin-right: 5px;"><i class="fa fa-edit"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-md-6 1 end -->

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
<!--===============================
    AJAX JS SCRIPT FOR ADD MULTIPLE SPECIFICATIONS
    ================================-->

<script type="text/javascript">
    $(document).ready(function() {
        var counter = 0;
        $(document).on('click', '.addeventmore', function() {
            var extra_item_to_add = $("#extra_item_to_add").html();
            $('.add_item').append(extra_item_to_add);
            counter++;
        }); //End to add item
        $(document).on('click', '.removeeventmore', function() {
            $(this).closest(".delete_extra_item_to_add").remove();
            counter--
        }); //End remove item
    }); //End Initialize Jquery Script
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('texteditor1');
    CKEDITOR.replace('texteditor2');
    CKEDITOR.replace('texteditor3');
    CKEDITOR.replace('texteditor4');
    CKEDITOR.replace('texteditor5');
</script>
@endsection
