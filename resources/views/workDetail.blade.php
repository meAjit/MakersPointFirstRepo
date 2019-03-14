@extends('layout.mainlayout')

@section('content')

<form action="store" method="post" >

<table class ="MWO" >
  <tr>
    <th>Work-id:</th>
    <td> <input type="text" name="workid" id="workid"></td>
  </tr>
  <tr>
    <th >Title:</th>
    <td> <input type="text" name="title" id="title"> </td>
  </tr>
    <tr>
    <th >Provider name:</th>
    <td  >
       <span margin-left= "5px" contenteditable="false"></span>
          <span> <input type="text" name="provider" id="provider"></span>
        </td>
        
  
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
    <td> <input class="date" type="date" name="deadline"></td>
  </tr>
    
  <tr>
    <th >Additional info:</th>
    <td><input type="text" contenteditable="true" name="additionalinfo" id="additionalinfo"></td>
  </tr>
    <tr>
    <th> material</th>
    <td ><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td > <span contenteditable="false"><input class="radio"  type="radio" name="N/Y" value=""></span>
         <span contenteditable="true"> link here</span>
        </td>
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
</form>

@endsection
