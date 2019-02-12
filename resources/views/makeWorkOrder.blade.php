@extends('layout.mainlayout')

@section('content')

       <!DOCTYPE html>
<html >
<head>
    
<style>
    
    .backGround{        
        
        background: #E7E2D2;
        background-clip: content-box;
        
    }
    
table, th, td {
  
  border: 2px solid #6F6F6F;
  border-collapse: collapse;
}
th {
  
  width:11%;
  padding: 5px;
  text-align: left;
  font-weight:500;
  
}
    td {
  width:50% ;
  padding: 5px;
  text-align: left;    
  
}
    

    
    .tableWidth {
     
    width:60%; 
    margin-left:20%; 
    margin-right:15%;
  }
    .date {
     padding-left:5px;
     margin-left: 5px;
     width: 30%; 
     background-color:azure;
     box-shadow:5px 3px #888888;
     box-sizing: border-box;
     font-family: sans-serif;
     font-weight:500;

        
}
    .button {
        border: 2px solid #444444;
        border-radius: 7px;
        margin-left:20%;
        padding:5px;
        margin-top: 10px;
        box-shadow:5px 3px #888888;
        background-color:#E3EFBE;
        font-family: sans-serif;
        font-weight: bold;

    }
    
    .radio{
        border: 2px solid #444444;
        margin-left: 5px;
        background-color:azure;
        box-sizing: border-box;
        font-family: sans-serif;
        font-weight:500;
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
    <td contenteditable="true" ><input class="radio" type="radio" name="Y/N" value="Yes">  Yes <!--name of the radio button defines slection -->
         <input class="radio" type="radio" name="Y/N" value="No"> No
     
        </td>
        
  </tr>
  <tr>
    <th >Customer</th>
    <td></td>
  </tr>
    <tr>
    <th>Order date</th>
    <td ><input class="date" type="date" name="orderdate"></td>
  </tr>
  <tr>
    <th >Deadline</th>
    <td> <input class="date" type="date" name="orderdate"></td>
  </tr>
    <tr>
    <th>Absolute deadline</th>
    <td ><input class="date" type="date" name="orderdate"></td>
  </tr>
  <tr>
    <th >Additional info:</th>
    <td contenteditable="true"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td contenteditable="true"><input class="radio"  type="radio" name="N/Y" value=""></td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivery by:</th>
    <td><input class="radio" type="radio" name="y/n" value=""> Customer retrives</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Mail:</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Matkahuolto</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Other</td>
  </tr>

</table>
    <button class="button" type="submit" value="Submit">Submit</button>  
    

</body>

</html>

		
@endsection