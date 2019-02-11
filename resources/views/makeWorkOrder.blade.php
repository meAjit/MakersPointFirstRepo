@extends('layout.mainlayout')

@section('content')

       <!DOCTYPE html>
<html >
<head>
    
<style>
    
    .backGround{        
        
        background: #D0CBBA;
        background-clip: content-box;
        
    }
    
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
  width:10%;
  padding: 5px;
  text-align: left;    
  
}
    td {
  width:50% ;
  padding: 10px;
  text-align: left;    
  
}
    

    
    .tableWidth {
  
    width:50%; 
    margin-left:25%; 
    margin-right:15%;
  }
    .edit {
     padding: 0;
     width: 30%; 
     background-color:azure;
     box-sizing: border-box;
     font-family: sans-serif;
     font-weight: bold;

        
}
    
</style>
</head>

<body class="backGround">

    


<table class ="tableWidth" >
  <tr>
    <th>Work-id:</th>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <th >Title:</th>
    <td contenteditable="true"></td>
  </tr>
    <tr>
    <th>Provider</th>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <th >Customer</th>
    <td>
        </td>
  </tr>
    <tr>
    <th>Order date</th>
    <td ><input class="edit" type="date" name="orderdate"></td>
  </tr>
  <tr>
    <th >Deadline</th>
    <td> <input class="edit" type="date" name="orderdate"></td>
  </tr>
    <tr>
    <th>Absolute deadline</th>
    <td ><input class="edit" type="date" name="orderdate"></td>
  </tr>
  <tr>
    <th >Additional info:</th>
    <td contenteditable="true"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivary by:</th>
    <td>Customer retrives</td>
    </tr>
    
    <tr>
    <td>Mail:</td>
    </tr>
    
    <tr>
    <td>Matkahuolto</td>
    </tr>
    
    <tr>
    <td>Other</td>
  </tr>

</table>
    

</body>

</html>

		
@endsection