@extends('layout/master')
@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                <div class="panel-body">
            
                                <table >
    
                                    
                                    <tr>
                                        <th width="1000px">
                                            <h3 class="panel-title">Data Kelas Mapel</h3>
                                        </th>
                                        <th>
                                    
                                        <button type="button" class="btn btn-sm" data-toggle="modal"data-target="#exampleModal">
                                            <span class="btn btn-primary" style=" color: white"> Tambah Data</span></button>
                                    
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>@if(session('sukses'))
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                    {{session('sukses')}}
                                    </div>
                                    @endif
                                    </div></th>
                                    </tr> 
                                </table>
    
                                </div>
                                    <div class="panel-body">
                                    <table class="table table-hover" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>KODE KELAS MAPEL</th>
                                                    <th>NAMA MAPEL</th>
                                                    <th>NAMA KELAS</th>
                                                    <th>WALIKELAS</th>
                                                    <th>AKSI</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kelas_mapel as $km)
                                                <tr>
                                                    <td> {{$km->kode_kelas_mapel}}</a></td>
                                                    <td> {{$km->mapel->nama}}</a></td>
                                                    <td> {{$km->kelas->kode_kelas}}</td>
                                                    <td>{{$km->kelas->walikelas->nama}}</td>
                                                    <td><a href="/kelas_mapel/{{$km->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                                        <a href="#" class="btn btn-danger btn-sm delete" kelas-id="{{$km->id}}">Hapus</a></td> 
                                                </tr>
                                                @endforeach
                                            </tbody>
                                               
                                                 
                                        </table>
    
                                    </div>
    
                                </div>
    
                        </div>
    
                    </div>
    
                </div>
    
    </div>	



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h3 class="modal-title" id="exampleModalLabel">Input Data Kelas mapel</h3>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      <form action="/kelas_mapel/create" method="POST" enctype="multipart/form-data">
<!-- Helper Laravel --> {{csrf_field()}}						  
						  <div class="form-group">
						    <label for="exampleInputEmail1">KODE KELAS MAPEL</label>
						    <input name="kode_kelas_mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Kelas Mapel" value="{{old('kode_kelas_mapel')}}">
						  </div>

							<div class="form-group">
								<label for="exampleFormControlSelect1">KELAS</label>
									<select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
										@foreach ($kelas as $k3)
										<option value="{{$k3->id}}">{{$k3->kode_kelas}}</option>
										@endforeach
									</select>
                            </div>
                            
							<div class="form-group">
								<label for="exampleFormControlSelect1">MATA PELAJARAN</label>
									<select name="mapel_id" class="form-control" id="exampleFormControlSelect1">
										@foreach ($mapel as $k5)
										<option value="{{$k5->id}}">{{$k5->nama}}</option>
										@endforeach
									</select>
							</div>
							
                      </div>
                      
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				       <button type="submit" class="btn btn-primary">Simpan</button>
				    </form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>


@stop


@section('footer')
<script>

	$(document).ready( function () {
    $('#datatable').DataTable();
	} );
	
	$('.delete').click(function(){
		var kelas_mapel_id = $(this).attr('siswa-id');
		swal({
			title: "Yakin ?",
			text: "Mau di hapus data kelas mapel ini??",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
			if (willDelete) {
				if(willDelete){
					window.location = "/siswa/"+kelas_mapel_id+"/delete";
				}
				
			}
			});
	});
		
</script>



@stop