@extends('layout/master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
                                @if(auth() ->user()-> role == 'admin')
                                                       
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$admin->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
										<h3 class="name">{{$admin->nama}}</h3>
										<span class="online-status status-available">{{auth()->user()->role}}</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											{{totalSiswa()}}<span>Data Jumlah Siswa</span>
											</div>
											<div class="col-md-4 stat-item">
											{{totalWalikelas()}} <span>Data Jumlah Guru</span>
											</div>
											<div class="col-md-4 stat-item">
											{{totalAdmin()}} <span>Data Jumlah Admin</span>
											</div>
										</div>
									</div>
								</div>
                                <!-- END PROFILE HEADER -->
                                
								<!-- PROFILE DETAIL -->
								{{-- <div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Jumlah Data</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span>{{$admin->jenis_kelamin}}</span></li>
											<li>Agama <span>{{$admin->agama}}</span></li>
											<li>Alamat <span>{{$admin->alamat}}</span></li>
										</ul>
									</div>
									
									
								</div> --}}
								
                               
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- TABBED CONTENT -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Diri</h3>
									<div class="text-center" style ="float: right; display: block;"><a href="/edit/{{$admin->id}}" class="btn btn-warning btn-sm">Edit Profile</a></div>
								</div>
								<br>
								<div class="panel-body">
									<table class="table table-condensed">
										<thead>
											<tbody>
											<tr>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
											</tr>

											<tr>
												<th>{{$admin->nama}}</th>
												<th>{{$admin->jenis_kelamin}}</th>
												<th>{{$admin->agama}}</th>
												<th>{{$admin->alamat}}</th>
											</tr>
										</tbody>
											
										</thead>
										
											
										



										
											
										
									</table>
									
								</div>
								
							</div>
							<br><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

                                @endif
                                
                                @if(auth() ->user()-> role == 'walikelas')
                                                       
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$walikelas->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
										<h3 class="name">{{$walikelas->nama}}</h3>
									<span class="online-status status-available">{{auth()->user()->role}}</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-6 stat-item">
												{{$kelas[0]->kode_kelas}}<span>Walikelas</span>
											</div>
											<div class="col-md-6 stat-item">
												{{totalSiswa()}}<span>Jumlah Siswa</span>
											</div>
										</div>
									</div>
								</div>
                                <!-- END PROFILE HEADER -->
                                
								<!-- PROFILE DETAIL -->
								{{-- <div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Data Diri</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span>{{$walikelas->jenis_kelamin}}</span></li>
											<li>Agama <span>{{$walikelas->agama}}</span></li>
											<li>Alamat <span>{{$walikelas->alamat}}</span></li>
										</ul>
									</div>
									
									
                                </div> --}}
                               
								<!-- END PROFILE DETAIL -->
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- TABBED CONTENT -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Diri</h3>
									<div class="text-center" style ="float: right; display: block;"><a href="/edit/{{$walikelas->id}}" class="btn btn-warning btn-sm">Edit Profile</a></div><br>
								</div>
								<div class="panel-body">
									<table class="table table-condensed">
										
										<thead>
											<tr>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
											</tr>
										</thead>
											<tbody>
											<tr>
												<th>{{$walikelas->nama}}</th>
												<th>{{$walikelas->jenis_kelamin}}</th>
												<th>{{$walikelas->agama}}</th>
												<th>{{$walikelas->alamat}}</th>
											</tr>
											
										
										
										</tbody>
									</table>
								</div>
							</div>
							<br><br><br><br>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

                                @endif
                                
                                @if(auth() ->user()-> role == 'siswa')
                                                       
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$siswa->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
										<h3 class="name">{{$siswa->nama}}</h3>
										<span class="online-status status-available">{{auth()->user()->role}}</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-6 stat-item">
												{{$kelas_siswa[0]->walikelas->nama}} <span>Walikelas</span>
											</div>
											<div class="col-md-6 stat-item">
												{{$kelas_siswa[0]->kelas->kode_kelas}} <span>Kelas</span>
											</div>
										
										</div>
									</div>
								</div>
                                <!-- END PROFILE HEADER -->
                                
								<!-- PROFILE DETAIL -->
								{{-- <div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Data Diri</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
											<li>Agama <span>{{$siswa->agama}}</span></li>
											<li>Alamat <span>{{$siswa->alamat}}</span></li>
										</ul>
									</div>
									
									
                                </div> --}}
                               
							</div>
							<!-- END PROFILE DETAIL -->
						</div>
						<!-- END LEFT COLUMN -->
						<!-- RIGHT COLUMN -->
						<div class="profile-right">
							
							<!-- TABBED CONTENT -->
							<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Diri</h3>
								<div class="text-center" style ="float: right; display: block;"><a href="/edit/{{$siswa->id}}" class="btn btn-warning btn-sm">Edit Profile</a></div><br>
							</div>
							<div class="panel-body">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>NAMA</th>
											<th>JENIS KELAMIN</th>
											<th>AGAMA</th>
											<th>ALAMAT</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>{{$siswa->nama_depan}} </td>
											<td>{{$siswa->jenis_kelamin}}</td>
											<td>{{$siswa->agama}}</td>
											<td>{{$siswa->alamat}}</td>
											
										</tr>
										
									</tbody>
								</table>
							</div>
							
							<br><br><br>
						</div>
						
						</div>
						<!-- END RIGHT COLUMN -->
					</div>
				</div>
			</div>
			
		<!-- END MAIN CONTENT -->
								@endif

@stop