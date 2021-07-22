@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li class="nav-active" >
                                        <a href="/admin-home">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Pendaftar Baru</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href="/admin-list">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            <span>Daftar Komunitas</span>
                                        </a>
                                    </li>
                                   
                                    
                                   
                                    
                                    
                                </ul>
                            </nav>
                
                            
                
                </aside>
                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Pendaftar Baru</h2>
                    
                       
                    </header>

                    <section class="panel">
                            <header class="panel-heading">
                              
                        
                                <h2 class="panel-title">Pendaftar Baru</h2>
                            </header>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                           <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                    
                                    
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Komunitas</th>
                                            <th>Nama Pengurus</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>No Wa</th>
                                            
                                            <th>Foto Kegiatan</th>


                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                             @foreach ($pengguna as $pengguna)
                                        <tr class="gradeX">
                                            <td>{{$pengguna->id}} </td>
                                            <td>{{$pengguna->coname}}</td>
                                            <td>{{$pengguna->nama}}</td>
                                            <td>{{$pengguna->prov}}</td>
                                            <td>{{$pengguna->kab}}</td>
                                            <td>{{$pengguna->email}}</td>
                                            <td>{{$pengguna->nohp}}</td>
                                            <td>{{$pengguna->nowa}}</td>
                                            
                                            <td> <img src="{{url('fkeg/'.$pengguna->fkeg) }}" width="50px" height="50px"  > </td>

                                             @if ($pengguna->status == "Disetujui")
                                            <td class="text-success">
                                               {{ $pengguna->status }} </td>

                                            
                                            @else ($pengguna->status == "Menunggu") 
                                           <td class="text-warning">
                                            {{ $pengguna->status }}  </td>


                                                @endif

                                                <td class="actions">

                                                <a href="/pengguna1/{{$pengguna->id}}/edit"method="GET" ><i class="fa fa-check"></i></a>
                                                <a href="/pengguna2/{{$pengguna->id}}/edit" method="GET"><i class="fa fa-times"></i></a>
                                                
                                                </td>

                                             
                                          
                                        
                                   @endforeach
                                
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        </section>
                        
                        


                    @endsection