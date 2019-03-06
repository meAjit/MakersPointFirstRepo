@extends('layout.mainlayout')

@section('content')

       <div class="row">
         <h1>This is list of work orders</h1>

       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>

		</div>
		<style>
         #form tr:hover{background-color: #f5f5f5;}
          form  table, th, tr, td{
                border:2px solid black;
                border-collapse: collapse;
            
            }
          #form th{
                text-align: left;
                height: 50%;
                padding: 15px;
                background-color: #4CAF50;
            }
            table{
                width: 100%;
            }
</style>
		<table id="form">
		    <tr>
		        <th>Work-id</th>
		        <th>Title</th>
		        <th>Status</th>
		        <th>Info</th>
<!--
		        <th>provider</th>
		        <th>customer</th>
		        <th>orderdate</th>
		        <th>deadline</th>
		        <th>absolutedeadline</th>
		        <th>additionalinfo</th>
		        <th>nomaterial</th>
		        <th>addmaterial</th>
		        <th>wetransfer</th>
		        <th>existingmaterial</th>
		        <th>deliveryby</th>
-->
		    </tr>
		    <tbody>
		        <@foreach($user as $users)
		        <tr>
		            <td>{{$users->workid}}</td>
		            <td>{{$users->title}}</td>
<!--
		            <td>{{$users->provider}}</td>
		            <td>{{$users->customer}}</td>
		            <td>{{$users->orderdate}}</td>
		            <td>{{$users->deadline}}</td>
		            <td>{{$users->absolutedeadline}}</td>
		            <td>{{$users->additionalinfo}}</td>
		            <td>{{$users->nomaterial}}</td>
		            <td>{{$users->addmaterial}}</td>
		            <td>{{$users->wetransfer}}</td>
		            <td>{{$users->existingmaterial}}</td>
		            <td>{{$users->deliveryby}}</td>
-->
		       @endforeach
		       
		        
		    </tbody>
		</table>

@endsection