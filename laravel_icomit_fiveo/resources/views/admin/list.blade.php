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
                        <h2>Daftar Komunitas</h2>
                    
                       
                    </header>

                    <section class="panel">
                            <header class="panel-heading">
                               
                        
                                <h2 class="panel-title">Daftar Komunitas</h2>
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
                                            <th>No Hp</th>
                                            <th>No Wa</th>
                                            <th>Profil Komunitas</th>
                                           
                                            
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
                                            <td>{{$pengguna->nohp}}</td>
                                            <td>{{$pengguna->nowa}}</td>
                                           
                                            
                                                <td class="actions">

                                                <a href="{{url('detail/'.$pengguna->id.'/')}}"method="GET" class="text-primary" ><i >Lihat Detail</i></a>
                                                
                                                </td>

                                             
                                          
                                        
                                   @endforeach
                                
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        </section>
                        
                        


                    @endsection