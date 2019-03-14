@extends('layout.mainlayout')

@section('content')

       


    


<form action="store" method="post" >

<table class ="MWO" >
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <tr>
    <th>Work-id:</th>
    <td> <input type="text" name="workid" id="workid"></td>
  </tr>
  <tr>
    <th >Title:</th>
    <td> <input type="text" name="title" id="title"> </td>
  </tr>
    <tr>
    <th rowspan="2">Provider</th>
    <td  ><input class="radio" type="radio" name="provider" value="Yes" contenteditable="false">Yes
         <input  class="radio" type="radio" name="provider" value="No" contenteditable="false"> No 
      <tr> <td > <span margin-left= "5px" contenteditable="false">Provider Name:</span>
          <span> <input type="text" name="provider" id="provider"></span></td>
        </tr>
        
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
    <td> <input class="date" type="date" name="deadline"></td>
  </tr>
    <tr>
    <th rowspan="2">Absolute deadline</th>
    <td ><input class="date" type="date" name="absolutedeadline">
        <tr>
        <td ><span contenteditable="false">Reason for absolute deadline:</span>
            <span contenteditable="true"></span></td>
        </tr>
  </tr>
  <tr>
    <th >Additional info:</th>
    <td><input type="text" contenteditable="true" name="additionalinfo" id="additionalinfo"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ><input class="radio" type="radio" name="material" value=""></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="material" value=""></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td > <span contenteditable="false"><input class="radio"  type="radio" name="material" value=""></span>
         <span contenteditable="true"> link here</span>
        </td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td><input class="radio" type="radio" name="material" value=""></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivery by:</th>
    <td><input class="radio" type="radio" name="delivery" value=""> Customer retrives</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="delivery" value=""> Mail:</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="delivery" value=""> Matkahuolto</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="delivery" value=""> Other</td>
  </tr>

</table>
    <button class="button" type="submit" value="Submit">Submit</button>  
</form>





		
@endsection