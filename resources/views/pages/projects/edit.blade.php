@extends('layouts.admin')

@section('style')
    
    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Proyecto</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Proyectos</a></li>
                    <li class="breadcrumb-item active">Editar Proyecto</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("projects.update", [$proyecto])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input class="form-control" type="text" name="title" id="title" value="{{$proyecto->title}}">
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label for="">Fecha de publicacion</label>
                                    <input class="form-control" type="date" value="{{$proyecto->publish_date}}" name="publish_date" id="example-date-input" value="{{$proyecto->publish_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-left">
                                <label for="">Status de Publicidad</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1" @if($proyecto->status === 1) selected  @endif >Publicado</option>
                                    <option value="0" @if($proyecto->status === 0) selected  @endif  >No Publicado</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-12 text-left">
                                <div class="form-group">
                                    <label>Cuerpo del proyecto</label>
                                    <textarea id="elm1" name="body"> {{$proyecto->body}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Imagenes (La primera imagen seleccionada sera la imagen de portada) </label>
                                    <input id="file_images" type="file" name="images[]" class="filestyle" data-buttonname="btn-secondary" multiple>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-4 text-left">
                                <div class="form-group">
                                    <label for="">Imagen de portada actual del proyecto</label> <br>
                                    <img class="img-fit" src="{{asset('storage/blogs/'.$proyecto->cover_image)}}" width="200" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 text-left">
                                <div class="form-group">
                                    <label for="">Imagenes Extras</label> <br>
                                    <div class="row  d-flex row-gap-3rem">
                                        @foreach ($proyecto->images as  $img)
                                            <div class="col-lg-4 image_extra position-relative">
                                                <img src="{{asset('storage/blogs/'.$img->filename)}}" width="200" alt="" class="img-fit">
                                                <div data-toggle="tooltip" data-placement="top" title="Eliminar imagen" data-original-title="Eliminar imagen" class="edu_stats_list_trash">
                                                    <a onclick="deleteImage({{$img->id}})">
                                                        <i class="fa fa-trash text-dark" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div data-toggle="tooltip" data-placement="top" title="Actualizar Portada" data-original-title="Actualizar Portada" class="edu_stats_list_update">
                                                    <a onclick="updateCover({{$img->id}})">
                                                        <i class="fa fa-heart text-dark" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-client waves-effect waves-light mr-1">
                                    Actualizar
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
    function deleteImage(id){
        Swal.fire({
                title: "Estas seguro de eliminar esta imagen?",
                text: "!No podrás revertir esto!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: 'Cancelar!',
              }).then(function (result) {
                    if(result.value)
                    {
                        fetch('/admin/posts/destroy/cover/'+id).then(res => res.json()).then(data => {
                            Swal.fire(
                            'Eliminado!',
                            'La imagen fue eliminada.',
                            'success'
                        )
                        location.reload(true);
                        });
                    }
               });
    }

    function updateCover(id){
        Swal.fire({
                title: "Estas seguro de Actualizar la imagen de portada?",
                text: "!No podrás revertir esto!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Si, Actualizar!",
                cancelButtonText: 'Cancelar!',
              }).then(function (result) {
                    if(result.value)
                    {
                        fetch('/admin/posts/update/cover/'+id).then(res => res.json()).then(data => {
                            Swal.fire(
                            'Actualizado!',
                            'La imagen de portada fue actualizada.',
                            'success'
                        )
                        location.reload(true);
                        });
                    }
               });
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