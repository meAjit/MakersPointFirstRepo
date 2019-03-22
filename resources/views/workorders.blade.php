@extends('layout.mainlayout')

@section('content')

       <table class ="WO">
           <col width="25">
           <col width="200">
           <col width="10">
           <col width="1">
           <col width="0.5">
           
  <tr>
    <th>WORK ID:</th>
    <th>Title</th> 
    <th>status</th>
    <th>info</th> 
    <th>??</th>
  </tr>
           
           @foreach($user as $users)
           @if($users->material != 'No material')
            
  <tr>
      
    <td>{{$users->workid}}</td>
    <td><a href="/workDetail" class="header-link">{{$users->title}}</a></td>
   <td>
        
    <select>
      <div class="dropdown-content">
      <option id="Not processing" >Not processing</option>
      <option id="processing" >processing</option>
      <option id="ready" >ready</option>

          
    </div>
        </select>
       </td>
    <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">Subcontractor</a>
      <a href="#">material info here</a>
     
    </div>
        </div>
      </td>
    <td></td>
  </tr> 
           
    @endif      
               
              
@endforeach
           
  

@endsection