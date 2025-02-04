<x-app-layout>
    @section('title') Jurnal @endsection
    @if(session('status'))
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{session('status')}}
    </div>
    @endif
    {{-- <div class="row" style="margin: auto;">
        </div> --}}
    <div class="row pt-3 pl-3 pr-3">
      <div class="card" style="width: 100%">
        <div class="card-header">
          <h4 class="inline-block pt-2">JURNAL</h4>
          <a href="" class="btn btn-primary float-right mt-1">Tambah Jurnal</a>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered data table-hover">
            <thead align="center">
                <tr>
                    <th><b>No.</b></th>
                    <th><b>Nama</b></th>
                    <th><b>Golongan</b></th>
                    <th><b>Ruangan</b></th>
                    <th><b>Urutan</b></th>

                    <th><b>Action</b></th>
                  </tr>
            </thead>
            <tbody>
                @php
                $no=0;
                @endphp
                @foreach($jurnals as $jurnal)
                @php
                $no++;
                @endphp
                <tr>
                  <td width="5%">{{$no}}</td>
                  <td align="left">{{ $jurnal->judul }}       </td>
                  <td align="left">{{ $jurnal->abstrak }}         </td>
                  <td align="left">{{ $jurnal->author }}      </td>
                  <td align="left">{{ $jurnal->keyword }}     </td>
                  <td align="left">{{ $jurnal->halaman }}     </td>
                  <td align="left">{{ $jurnal->date_publish}}   </td>
                  <td align="left">{{ $jurnal->file }}        </td>
                <td align="center" width="13%">

                  <a class="btn btn-info text-white btn-sm" title="Edit" href="{{route('jurnal.edit', $jurnal->id)}}"><i class="fas fa-pen"></i></a>
                  {{--
      <form
        onsubmit="return confirm('Reset this user password?')"
        class="d-inline"
        action="{{route('users.resetpassword', [encrypt($jurnal->id)])}}"
                  method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
                  <input type="submit" value="Reset" class="btn btn-warning btn-sm">
                  </form> --}}
                  <form onsubmit="return confirm('Delete this Jurnal permanently?')" class="d-inline" action="{{route('jurnal.destroy', [encrypt($jurnal->id)])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" value="Delete" class="btn btn-danger btn-sm" title="Delete">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            {{-- <tfoot>
              <tr>
                <td colspan=10>
                  {{$users->appends(Request::all())->links()}}
                </td>
              </tr>
            </tfoot> --}}
          </table>
        </div>
      </div>
    </div>
  </x-app-layout>
