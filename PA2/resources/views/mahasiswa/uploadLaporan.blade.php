@extends('master') 
 
@section('konten')

<div class="col-md-12" style="padding:1%;"></div>
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>

            <div class="col-md-6" style="text-align: center;">
                <div class="col-md-12">
                    <h2>Kirim Laporan Anda</h2>
                </div>
            </div>
            

            <div class="col-md-3">
                <hr style="height:5px;border:0;box-shadow:0 10px 10px -10px #8c8c8c inset;">
            </div>
            </div>
        </div>
        <div class="col-md-12" style="padding:1%;"></div>

<form id="dropFileForm" action="{{route('uploadLaporanProses')}}" method="post" enctype="multipart/form-data" >
  {{ csrf_field() }}
  <div class="col-md-12 row">
            <div class="col-md-3" style="text-align:left;"><p>Masukkan bukti anda</p></div>
                <div class="col-md-8">
                <input type="file" name="file" id="fileInput" multiple onchange="addFiles(event)">

                <label  style="width:100%;" for="fileInput" id="fileLabel" ondragover="overrideDefault(event);fileHover();" ondragenter="overrideDefault(event);fileHover();" ondragleave="overrideDefault(event);fileHoverEnd();" ondrop="overrideDefault(event);fileHoverEnd();addFiles(event);">
                <i class="fa fa-download fa-5x"></i>
                <br>
                <span id="fileLabelText">Choose a file or drag it here</span>
            </div>  
           
                     
  </div>
     
    <br>
    <span id="uploadStatus"></span>
  </label>
         <div class="col-md-12 form-tambah row">
                <div class="col-md-3" style="text-align:left;">
                    <p>Ringkasan singkat mengenai kegiatan</p>
                </div>
                <div class="col-md-8">
                    <textarea name="keterangan" class="form-control" placeholder="Ketik di sini..." id="" cols="30" rows="10"></textarea>
                </div>  
            <div class="col-lg-12 row">
              <div class="col-md-3">

              </div>
              <div class="col-md-8" style="field:left;">
                  @if(count($errors) > 0)
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                  {{ $error }} <br/>
                  @endforeach
                </div>
                @endif
                  <input type="submit" id="btn" class="btn-tema"  value="Kirim Laporan" >
              </div>
            </div>              
        </div>
</form>

<script>
    var dropFileForm = document.getElementById("dropFileForm");
var fileLabelText = document.getElementById("fileLabelText");
var uploadStatus = document.getElementById("uploadStatus");
var fileInput = document.getElementById("fileInput");
var droppedFiles;

function overrideDefault(event) {
  event.preventDefault();
  event.stopPropagation();
}

function fileHover() {
  dropFileForm.classList.add("fileHover");
}

function fileHoverEnd() {
  dropFileForm.classList.remove("fileHover");
}

function addFiles(event) {
  droppedFiles = event.target.files || event.dataTransfer.files;
  showFiles(droppedFiles);
}

function showFiles(files) {
  if (files.length > 1) {
    fileLabelText.innerText = files.length + " files selected";
  } else {
    fileLabelText.innerText = files[0].name;
  }
}

function uploadFiles(event) {
  event.preventDefault();
  changeStatus("Uploading...");

  var formData = new FormData();

  for (var i = 0, file; (file = droppedFiles[i]); i++) {
    formData.append(fileInput.name, file, file.name);
  }

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(data) {
    //handle server response and change status of
    //upload process via changeStatus(text)
    console.log(xhr.response);
  };
  xhr.open(dropFileForm.method, dropFileForm.action, true);
  xhr.send(formData);
}

function changeStatus(text) {
  uploadStatus.innerText = text;
}

</script>

@endsection