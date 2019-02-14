@extends('layout.mainlayout')

@section('content')

       


    


<table class ="MWO" >
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
    





		
@endsection