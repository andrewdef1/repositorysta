<x-app-layout>
    @section('title') TAMBAH JURNAL @endsection
    @section('footer-scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <style>
      .select2-selection__rendered {
        line-height: 27px !important;
      }

      .select2-container .select2-selection--single {
        height: calc(2.25rem + 2px) !important;
      }

      .select2-selection__arrow {
        height: calc(2.25rem + 2px) !important;
      }
    </style>

    @endsection
    <div class="row pl-3 pr-3 pt-3 pb-3">
      <div class="card" style="width: 100%">
        <div class="card-header">
          <h4 class="inline-block pt-2">TAMBAH JURNAL</h4>
          <a href="{{ URL::previous() }}" class="btn btn-danger float-right mt-1">Kembali</a>
        </div>

        <div class="card-body">
          @if(session('status'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('status')}}
          </div>
          @endif
          <form enctype="multipart/form-data" action="{{route('jurnal.store')}}" method="POST">
            @csrf


            <label for="judul">Judul <span style="color:red;">*</span></label>
            <input required value="{{old('judul')}}" class="form-control {{$errors->first('judul') ? " is-invalid" : ""}}" placeholder="Judul" type="text" name="judul" id="judul" />
            <div class="invalid-feedback">
              {{$errors->first('judul')}}
            </div>
            <br>
            <label for="abstrak">Abstrak <span style="color:red;">*</span></label>
          <textarea required placeholder="Abstrak, (minimal 3 kata, maksimal 200 kata)" class="form-control {{$errors->first('abstrak') ? "is-invalid" : ""}}" name="abstrak" id="abstrak" style="height: 200px;"></textarea>
          <div class="invalid-feedback">
            {{$errors->first('abstrak')}}
          </div>
          <br>
            <label for="author">Author <span style="color:red;">*</span></label>
            <input required value="{{old('author')}}" class="form-control {{$errors->first('author') ? " is-invalid" : ""}}" placeholder="Author" type="text" name="author" id="author" />
            <div class="invalid-feedback">
              {{$errors->first('author')}}
            </div>
            <br>
            <label for="keyword">Keyword <span style="color:red;">*</span></label>
            <input required value="{{old('keyword')}}" class="form-control {{$errors->first('keyword') ? " is-invalid" : ""}}" placeholder="Keyword" type="text" name="keyword" id="keyword" />
            <div class="invalid-feedback">
              {{$errors->first('keyword')}}
            </div>
            <br>
            <label for="halaman">Halaman <span style="color:red;">*</span></label>
            <input required value="{{old('halaman')}}" class="form-control {{$errors->first('halaman') ? " is-invalid" : ""}}" placeholder="Halaman" type="text" name="halaman" id="halaman" />
            <div class="invalid-feedback">
              {{$errors->first('halaman')}}
            </div>
            <br>
            <label for="date_publish">Tanggal Publish</label>
            <input class="form-control {{$errors->first('date_publish') ? "is-invalid" : ""}}" placeholder="Tanggal Publish" type="date" name="date_publish" id="date_publish" />
            <div class="invalid-feedback">
              {{$errors->first('date_publish')}}
            </div>
            <br>
            <label for="file">File <span style="color:red;">*</span></label>
            <input required class="form-control {{$errors->first('file') ? " is-invalid" : ""}}"  type="file" name="file" id="file" />
            <div class="invalid-feedback">
              {{$errors->first('file')}}
            </div>
            <br>
          <br>

            <input class="btn btn-primary" type="submit" value="Save" />
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
