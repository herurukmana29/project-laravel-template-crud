@extends('layouts.tables')

@section('title', 'tables')
@section('table anggota')
 <div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Anggota</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No angggota</th>
								  <th>Nama anggota</th>
								  <th>Jenis kelamin</th>
								  <th>Alamat</th>
								  <th>No Hp</th>
								  <th>Email</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($anggota as $anggotas)
							<tr>
								<td>{{ $anggotas->NA }}</td>
								<td class="center">{{ $anggotas->Nama }}</td>
								<td class="center">{{ $anggotas->jk }}</td>
								<td class="center">{{ $anggotas->Alamat }}</td>
								<td class="center">{{ $anggotas->Nohp }}</td>
								<td class="center">{{ $anggotas->Email }}</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
							
						  </tbody>
					  </table>
                    </div>
                </div>

@endsection

@section('table buku')
<div class="box span12">
					  <div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Buku</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div> 

					  <table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Kode buku</th>
								  <th>Judul buku</th>
								  <th>Jumlah buku</th>
								  <th>Kode penerbit</th>
								  <th>Stok buku</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($buku as $bukus)
							<tr>
								<td>{{ $bukus->Kdbuku }}</td>
								<td class="center">{{ $bukus->Jdlbuku }}</td>
								<td class="center">{{ $bukus->Jmlbuku }}</td>
								<td class="center">{{ $bukus->Kdpenerbit }}</td>
								<td class="center">{{ $bukus->stokbuku }}</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
							
						  </tbody>
					  </table>           
					</div>
				</div><!--/span-->

@endsection
				
			
