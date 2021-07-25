@extends('Layout/admin')

@section('container')



				
					<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                      <li >
                                        <a href="{{url('/admin-home')}}">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Pendaftar Baru</span>
                                        </a>
                                    </li>
                                    <li class="nav-active" >
                                        <a href="{{url('/admin-list')}}">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            <span>Daftar Komunitas</span>
                                        </a>
                                    </li>
                                   
                                    
                                   
                                    
                                    
                                </ul>
                            </nav>
                
                            
                
                </aside>
                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Profil Komunitas</h2>
                    
                       
                    </header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="{{url('logo/'.$pengguna->logo) }}" class="rounded img-responsive" >
										<div class="thumb-info-title">
											<span class="thumb-info-inner">{{$pengguna->coname}}</span>
											
										</div>
									</div>

									<div >
										
										<div >
											<div class="progress progress-xs light">
												
											</div>
										</div>
										
									</div>

									

									<div class="social-icons-list " >
										<a rel="tooltip" data-placement="bottom" target="_blank" href="{{$pengguna->ins}}" data-original-title="Instagram"><i class="fa fa-instagram"></i><span>Instagram</span></a>
										<a rel="tooltip" data-placement="bottom" target="_blank" href="{{$pengguna->you}}" data-original-title="Youtube"><i class="fa fa-youtube"></i><span>Youtube</span></a>
										
									</div>

								</div>
							</section>


							

						</div>
						<div class="col-md-11 col-lg-9">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Deskripsi Komunitas</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Data Komunitas</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										<h4 class="mb-md">Tentang Komunitas</h4>

										<section class="simple-compose-box mb-xlg">
											<form  >
												<textarea readonly="readonly" name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="15">{{$pengguna->deskripsi}}</textarea>
											</form>
											
										</section>

										


										<div class=" mt-xlg mb-md">
											<div class="tm-body">
										
											</div>
										</div>
									</div>


									<div id="edit" class="tab-pane">

										<form class="form-horizontal panel-body" method="get">
											<h4 class="mb-xlg">Info Komunitas</h4>
											 <form class="form-horizontal form-bordered" >
												<div class="form-group">

													<label class="col-md-3 control-label" >Nama Komunitas</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="{{$pengguna->coname}}"> 
													</div>
												</div>
												<div class="form-group">

													<label class="col-md-3 control-label" >Nama Pengurus</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="{{$pengguna->nama}}" > 
													</div>
												</div>
												<div class="form-group">

													<label class="col-md-3 control-label" >Provinsi</label>
													<div class="col-md-8">
														<input type="text" class="form-control"  value="{{$pengguna->prov}}" > 
													</div>
												</div>

												<div class="form-group">

													<label class="col-md-3 control-label" >Kabupaten</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="{{$pengguna->kab}}" > 
													</div>
												</div>

												<div class="form-group">

													<label class="col-md-3 control-label" >Email</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="{{$pengguna->email}}" > 
													</div>
												</div>

												<div class="form-group">

													<label class="col-md-3 control-label" >Nomor Hp</label>
													<div class="col-md-8">
														<input type="text" class="form-control"  value="{{$pengguna->nohp}}">  
													 </div>
												</div>

												<div class="form-group">

													<label class="col-md-3 control-label" >Nomor What's App</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="{{$pengguna->nowa}}"> 
													</div>
												</div>



											</form>
											
											

										</form>

									</div>
								</div>
							</div>
						</div>
						
					<!-- end: page -->
				</section>
			</div>

			
		</section>

  @endsection