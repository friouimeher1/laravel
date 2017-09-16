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
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal" action="{{route('produit.store')}}" method="post" enctype="multipart/form-data">
                                          <!-- Title -->
                                          {{csrf_field()}}
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Nom</label>
                                            <div class="col-lg-6">
                                              <input type="text" name="nom"class="form-control" id="title">
                                            </div>
                                          </div>
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Description</label>
                                            <div class="col-lg-6">
                                              <textarea name="description" class="form-control" id="content"></textarea>
                                            </div>
                                          </div>
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Description</label>
                                            <div class="col-lg-6">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('categorie_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>
          </div>

                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Prix</label>
                                            <div class="col-lg-6">
                                              <input type="text" name="prix" class="form-control" id="tags">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Image</label>
                                            <div class="col-lg-6">
                                              <input type="file" name="image"class="form-control" id="title">
                                            </div>
                                          </div>
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Ajouter</button>
												<button type="reset" class="btn btn-default">Annuler</button>
											 </div>
                                          </div>
                                      </form>
                                    </div>


                  </div>
                  </div>
                  </div>
                  @endsection
