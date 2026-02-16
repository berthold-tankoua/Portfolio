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
            <div class="col-12" style="display: block;">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Editer Projet</h4>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('project.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $project->id }}">
                                <input type="hidden" name="img0" value="{{ $project->img_perf }}">
                                <input type="hidden" name="img1" value="{{ $project->image1 }}">
                                <input type="hidden" name="img2" value="{{ $project->image2 }}">
                                <input type="hidden" name="img3" value="{{ $project->image3 }}">
                                <input type="hidden" name="img4" value="{{ $project->image4 }}">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Titre Du Projet<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $project->name }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Sous titre<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="sub" class="form-control"
                                                value="{{ $project->sub }}">
                                            @error('sub')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Youtube Link<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="ytb_link" class="form-control"
                                                value="{{ $project->ytb_link }}">
                                            @error('ytb_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Date Debut<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="start_date" class="form-control"
                                                value="{{ $project->start_date }}">
                                            @error('start_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Date De Fin<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="end_date" class="form-control"
                                                value="{{ $project->end_date }}">
                                            @error('end_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Contact WhatsApp<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="client_contact" class="form-control"
                                                value="{{ $project->client_contact }}">
                                            @error('client_contact')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Selectionner status <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="status" class="form-control" required
                                                oninvalid="this.setCustomValidity('Selectionner une categorie')"
                                                oninput="this.setCustomValidity('')">
                                                <option value="{{ $project->status }}" selected>{{ $project->status }}
                                                </option>
                                                <option value="Terminé">Terminé</option>
                                                <option value="En Cours">En Cours</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Langage Utilise <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="tools" class="form-control"
                                                value="{{ $project->tools }}" data-role="tagsinput">
                                            @error('tools')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Selectionner une Categorie <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" class="form-control" required
                                                oninvalid="this.setCustomValidity('Selectionner une categorie')"
                                                oninput="this.setCustomValidity('')">
                                                <option value="" selected="" disabled="">Selectionner
                                                    Categorie</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $project->category_id }}" selected>
                                                        {{ $project->category->name }}</option>
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> <!-- end col md 4 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5> Image Peformance <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" id="image" name="img_perf"
                                                class="form-control">

                                            <img src="" alt="image" id="showImg">

                                            @error('img_perf')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Url Projet <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="url" class="form-control"
                                                value="{{ $project->url }}">
                                            @error('url')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-2">
                                    <h1>PRESENTATION</h1>
                                </div>
                                <div class="row"> <!-- start 7th row  -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="image1"
                                                    class="form-control">

                                                <img src="" alt="image" id="showImg">

                                                @error('image1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Titre <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="title1" class="form-control"
                                                    value="{{ $project->title1 }}">
                                                @error('title1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="texteditor1" name="desc1" class="form-control" required>
                                                {!! $project->desc1 !!}
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-2">
                                    <h1>CHALLENGE & SOLUTION</h1>
                                </div>
                                <div class="row"> <!-- start 7th row  -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="image2"
                                                    class="form-control">

                                                <img src="" alt="image" id="showImg">

                                                @error('image2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Titre <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="title2" class="form-control"
                                                    value="{{ $project->title2 }}">
                                                @error('title2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="texteditor2" name="desc2" class="form-control" required>
                                                {!! $project->desc2 !!}
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-2">
                                    <h1>OUTILS & SKILL </h1>
                                </div>
                                <div class="row"> <!-- start 7th row  -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="image3"
                                                    class="form-control">

                                                <img src="" alt="image" id="showImg">

                                                @error('image3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Titre <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="title3" class="form-control"
                                                    value="{{ $project->title4 }}">
                                                @error('title3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="texteditor3" name="desc3" class="form-control" required>
                                                {!! $project->desc3 !!}
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-2">
                                    <h1>RESULTAT</h1>
                                </div>
                                <div class="row"> <!-- start 7th row  -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="image4"
                                                    class="form-control">

                                                <img src="" alt="image" id="showImg">

                                                @error('image4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Titre <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="title4" class="form-control"
                                                    value="{{ $project->title4 }}">
                                                @error('title4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="texteditor4" name="desc4" class="form-control" required>
                                                {!! $project->desc4 !!}
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info" value="Editer Projet">
                                </div>
                        </form>
                    </div>
                </div> <!-- /.box -->
            </div> <!-- /.col-12 2 end -->

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
