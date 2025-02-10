<x-app-layout>
    @section('title') TAMBAH KATEGORI @endsection
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
          <h4 class="inline-block pt-2">TAMBAH KATEGORI</h4>
          <a href="{{ URL::previous() }}" class="btn btn-danger float-right mt-1">Kembali</a>
        </div>

        <div class="card-body">
          @if(session('status'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('status')}}
          </div>
          @endif
          <form enctype="multipart/form-data" action="{{route('kategori.store')}}" method="POST">
            @csrf


            <label for="nama_kategori_jurnal">Nama Kategori Jurnal <span style="color:red;">*</span></label>
            <input required value="{{old('nama_kategori_jurnal')}}" class="form-control {{$errors->first('nama_kategori_jurnal') ? " is-invalid" : ""}}" placeholder="Nama Kategori Jurnal" type="text" name="nama_kategori_jurnal" id="nama_kategori_jurnal" />
            <div class="invalid-feedback">
              {{$errors->first('nama_kategori_jurnal')}}
            </div>
            <br>            
          <br>

            <input class="btn btn-primary" type="submit" value="Save" />
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
