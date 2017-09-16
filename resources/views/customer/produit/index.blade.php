@extends('customer.layouts.app')
@section('content')


<br> <br><br><br>
<div class="container">
    <div class="row">



              <div class="col-md-10 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Ajouter Produit</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                  <div class="form quick-post">


                    <table class="table table-bordered table-striped table-advance table-hover">
                       <tbody>
                          <tr>
                            <th><i class="icon_mobile"></i> ID</th>
                            <th><i class="icon_profile"></i> Nom </th>
                             <th><i class="icon_profile"></i> Description</th>
                             <th><i class="icon_calendar"></i> Nom Catégorie</th>
                             <th><i class="icon_mail_alt"></i> Prix</th>
                             <th><i class="icon_pin_alt"></i> Image</th>
                             <th><i class="icon_cogs"></i> Action</th>
                          </tr>
                          @foreach($produits as $produit)
                          <tr>
                            <td>{{$produit -> id   }}   </td>
                             <td>{{$produit -> nom   }}   </td>
                             <td>{{$produit -> description}} </td>
                             <td>{{$produit -> categorie->nom_categorie}} </td>
                             <td>{{$produit -> prix}}</td>
                             <td><img src="/images/{{$produit ->image}}" width="100px" height="100px"> </td>

                             <td>
                               <form method="POST" action="{{ route('produit.destroy', $produit->id) }}" accept-charset="UTF-8">
               		                            <input name="_method" type="hidden" value="DELETE">
               		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
               		                            <a href="{{route('produit.edit', $produit->id)}}" class="btn btn-primary">Modifier </a>
               		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('are you sure ?');" value="Supprimer">
               		                        </form>

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
