@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr> <th>first name</th>

              @foreach($users as $row) <tr>
              <td>{{$row['name']}}</td>
              <td><a href="#" class="btn btn-primary">Edit</a></td>
              <from method="post" class="delete_form" action = "{{action('UsersController',$row['id'])}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="btn btn-danger">Delete</button>
              </from>
              </tr>
              @endforeach
              </table>






               </div>
               </div>
               </div>
               @stop