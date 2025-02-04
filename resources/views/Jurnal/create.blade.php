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


            <label for="name">Nama Jurnal <span style="color:red;">*</span></label>
            <input required value="{{old('name')}}" class="form-control {{$errors->first('name') ? " is-invalid" : ""}}" placeholder="Nama Jurnal" type="text" name="name" id="name" />
            <div class="invalid-feedback">
              {{$errors->first('name')}}
            </div>
            <br>
            <label for="tanggal_publish">Tanggal Publish</label>
            <input class="form-control {{$errors->first('tmt_cpns') ? "is-invalid" : ""}}" placeholder="Tanggal Publish" type="date" name="tanggal_publish" id="tanggal_publish" />
            <div class="invalid-feedback">
              {{$errors->first('tanggal_publish')}}
            </div>
            <br>
            <label for="deskripsi">Deskripsi <span style="color:red;">*</span></label>
          <textarea required placeholder="Deskripsi, (minimal 3 kata, maksimal 200 kata)" class="form-control {{$errors->first('deskripsi') ? "is-invalid" : ""}}" name="deskripsi" id="deskripsi" style="height: 200px;"></textarea>
          <div class="invalid-feedback">
            {{$errors->first('deskripsi')}}
          </div>
          <br>
          <br>

            <input class="btn btn-primary" type="submit" value="Save" />
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
