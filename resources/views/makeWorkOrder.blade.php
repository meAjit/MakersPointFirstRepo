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

<form action="store" method="post" >
<table class ="tableWidth"  >
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

  <tr>
   <th><label for="">Work-Id</label></th>
   <td> <input type="text" name="workid" id="workid"></td>
<!--
    <th>Work-id:</th>
   
    contenteditable="true" name="workid" id="workid">
      <td input type="text" contenteditable="true" name="workid" id="workid">

 </td>    z
-->
<!-- name=workid added-->
  </tr>
 
  <tr>
    <th> <label for="">Title:</label> </th>
    <td> <input type="text" contenteditable="true" name="title" id="title"></td><!--   name=title added-->
  </tr>
    <tr>
    <th>Provider</th>
    <td contenteditable="true" ><input class="radio" type="radio" name="provider" value="Yes">  Yes <!--   name=provider added-->
        <!--name of the radio button defines slection -->
         <input class="radio" type="radio" name="provider" value="No"> No
     
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
    <td> <input class="date" type="date" name="deadline"></td><!--  name was orderdate before and should be deadline-->
  </tr>
    <tr>
    <th>Absolute deadline</th>
    <td ><input class="date" type="date" name="absolutedeadline"></td><!--  name was orderdate before and should be absolute deadline-->
  </tr>
  <tr>
    <th >Additional info:</th>
     <td> <input type="text" contenteditable="true" name="additionalinfo" id="additionalinfo"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ><input class="radio" type="radio" name="nomaterial" value="nomaterial"></td>
    
<!--   // <td><input class="radio" type="radio" name="addmaterial" value="addmaterial">Add Material</td>-->
    
  </tr>
    
  
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="addmaterial" value="addmaterial"></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td contenteditable="true"><input class="radio"  type="radio" name="wetransfer" value="wetransfer"></td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td><input class="radio" type="radio" name="existingmaterial" value="existingmaterial"></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivery by:</th>
    <td><input class="radio" type="radio" name="customerretrives" value="customerretrives"> Customer retrives</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="mail" value="mail"> Mail:</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="matkahuolto" value="matkahuolto"> Matkahuolto</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="other" value="other"> Other</td>
  </tr>

</table>
    <button class="button" type="submit" value="Submit">Submit</button>  
    
</form>
</body>

</html>

		
@endsection