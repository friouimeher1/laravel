@extends('admin.layout.auth')


@section('content')

@include('admin.layout.master')
<div class="container">
    <div class="row">
      <div class="col-md-15 col-md-offset-2">
<div class="col-md-15 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left"><b>Ajouter Catégorie</b></div>

                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal" method="post" action="{{route('Categorie.store')}}">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <center><label class="control-label col-lg-2" for="title">Nom de Catégorie</label>
                                            <div class="col-lg-6">
                                              <input type="text" name="titre" class="form-control" id="title"></center>
                                            </div>
                                          </div>

                                          <!-- Buttons -->
                                          <div class="form-group">
                                            {{csrf_field()}}
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Ajouter Categorie</button>
											 </div>
                                          </div>
                                      </form>
                                    </div>


                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>

            </div>
</div>
</div>
          </div>

@stop
