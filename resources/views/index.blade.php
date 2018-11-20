@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr>
              <th>ID</th>
              <th>first name</th>
              <th>edit</th>
              <th> delete</th>

              @foreach($users as $row) <tr>
              <td>{{$row['id']}}</td>     
              <td>{{$row['name']}}</td>
              

             
              <td>


              <form action="{{action('UsersController@update',$row['id'])}}" method="get">
                   
                     
                  <input type="submit" value="Edit">
                      </form>
</td>
<td>
<form action="{{action('UsersController@destroy',$row['id'])}}" method="get">
                   
                     
                   <input type="submit" value="delete">
                       </form>
 </td>
              

              </tr>
              @endforeach




              </table>
              
               
              <form action="{{action('UsersController@search',1)}}" method="get">
                   ID: <input type="text" name="id">
                     
                  <input type="submit" value="Search">
                      </form>



                      <form action="{{action('RoomController@searchroom',1)}}" method="get">
                   room: <input type="text" name="id">
                     
                  <input type="submit" value="Search">
                      </form>





               </div>
               </div>
               </div>

               <script type="text/javascript">
             $(document).ready(function(){ $(".delete_form").on('submit', function(){

                   if(confirm("ok?"))
                   {
                         return true;
                   }
                   else {
                         return false;
                   }
             });
             });


               </script>
               @stop