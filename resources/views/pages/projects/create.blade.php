@extends('layouts.admin')

@section('style')
    
    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Crear Proyecto</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Proyectos</a></li>
                    <li class="breadcrumb-item active">Crear Proyecto</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("projects.store")}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input class="form-control" type="text" name="title" id="foto" required>
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label for="">Fecha de publicacion</label>
                                    <input class="form-control" type="date" value="{{date('yy-m-d')}}" name="publish_date" id="example-date-input" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-left">
                                <label for="">Status de Publicidad</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="1">Publicado</option>
                                    <option value="0">No Publicado</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-12 text-left">
                                <div class="form-group">
                                    <label>Cuerpo del Proyecto</label>
                                    <textarea id="elm1" name="body"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Imagenes (La primera imagen seleccionada sera la imagen de portada) </label>
                                    <input id="file_images" type="file" name="images[]" class="filestyle" data-buttonname="btn-secondary" multiple required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="container-image"></div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-client waves-effect waves-light mr-1">
                                    Crear
                                </button>
                                <a  class="btn btn-secondary waves-effect" href="{{route('projects.index')}}">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script>
    document.getElementById("file_images").addEventListener("change", previewImages);

    function previewImages(){
        document.getElementById("container-image").innerHTML="";
        let images = document.getElementById('file_images');
        if(images && images.files.length > 0){
            for (var i = 0; i <= images.files.length - 1; i++) {
                previewImage(images.files[i]);
            }
        }
    }

    function previewImage(img) {
        let reader = new FileReader();
        reader.readAsDataURL(img);
        reader.onloadend = function() {
            let img = '<img src="' + reader.result + '" width="250" height="250" class="img-fit">';
            $("#container-image").append(img);
        }
    }
</script>

<script src="{{asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('admin/assets/pages/form-advanced.js')}}"></script>
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!--Wysiwig js-->
<script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
    
    
</script>
@endsection