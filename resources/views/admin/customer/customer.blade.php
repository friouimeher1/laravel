@extends('admin.layout.auth')


@section('content')

@include('admin.layout.master')

<div class="container">
    <div class="row">
      <div class="col-md-15 col-md-offset-2">
        <div class="col-md-15 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left"><b>tout les clients</b></div>

                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">
                        <table class="table table-bordered table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th><i class="icon_profile"></i> Map</th>
                                 <th><i class="icon_profile"></i> Nom et Prénom</th>
                                 <th><i class="icon_calendar"></i> Email</th>
                                 <th><i class="icon_mail_alt"></i> Addresse</th>
                                 <th><i class="icon_pin_alt"></i> Longitude</th>
                                 <th><i class="icon_mobile"></i> Latitude</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              @foreach($customers as $customer)
                              <tr>
                                <td>MAp here!!! </td>
                                 <td>{{$customer -> name   }} <p>  {{$customer -> prenom}}  </td>
                                 <td>{{$customer -> email}} </td>
                                 <td>{{$customer -> adresse}} </td>
                                 <td>{{$customer -> lng}}</td>
                                 <td>{{$customer ->lat}} </td>
                                 <td>{{$customer ->telephone}} </td>
                                 <td>
                                  <div class="btn-group">

                                    <input type="submit" class="btn btn-success" onclick="return confirm('are you sure ?');" value="Approve">
                                  </div>
                                  <div class="btn-group">

                                  <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure ?');" value="Delete">
                                </div>

                                  </td>

                              </tr>
                              @endforeach
                           </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>




@stop
