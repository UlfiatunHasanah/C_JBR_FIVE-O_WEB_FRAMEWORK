   <!--sidebar start-->
   <aside>
       <div id="sidebar" class="nav-collapse ">
           <!-- sidebar menu start-->
           <ul class="sidebar-menu">
               <li class="active">
                   <a class="" href="{{url('adminweb')}}">
                       <i class="icon_house_alt"></i>
                       <span>Dashboard</span>
                   </a>
               </li>
               <li class="sub-menu">
                   <a href="javascript:;" class="">
                       <i class="fas fa-map-marker-alt"></i>
                       <span>Asal Komunitas</span>
                       <span class="menu-arrow arrow_carrot-right"></span>
                   </a>
                   <ul class="sub">
                       <li><a class="" href="{{url('adminweb/provinsi')}}">Provinsi</a></li>
                       <li><a class="" href="{{url('adminweb/kabkot')}}">Kabupaten/Kota</a></li>
                   </ul>
               <li>
                   <a class="" href="{{url('adminweb/datakom')}}">
                       <i class="fas fa-poll-h"></i>
                       <span>Data Komunitas</span>
                   </a>
               </li>
               </li>
               <li class="sub-menu">
                   <a href="javascript:;" class="">
                       <i class="fas fa-user"></i>
                       <span>Data Akun</span>
                       <span class="menu-arrow arrow_carrot-right"></span>
                   </a>
                   <ul class="sub">
                       <li><a class="" href="{{route('admink')}}">Akun Admin Komunitas</a></li>
                       <li><a class="" href="grids.html">Akun Admin Website</a></li>
                   </ul>
               </li>
           </ul>
           <!-- sidebar menu end-->
       </div>
   </aside>
   <!--sidebar end-->
