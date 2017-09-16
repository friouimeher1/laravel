@extends('admin.layout.auth')


@section('content')



@include('admin.layout.master')

<div class="container">
    <div class="row">
      <div class="col-md-30 col-md-offset-2">
          <div class="col-md-18 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left"><b>Toutes Catégorie</b></div>

                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">

                        <table class="table table-bordered">
    				<thead>
    					<th>Id</th>
    					<th>Titre</th>
    					<th>action</th>
    				</thead>
    				<tbody>
    					@foreach($categorie as $cat)
    						<tr>
    							<td>{{$cat->id}}</td>
    							<td>{{$cat->nom_categorie}}</td>
    							<td>
    								<form method="POST" action="{{ route('Categorie.destroy', $cat->id) }}" accept-charset="UTF-8">
    		                            <input name="_method" type="hidden" value="DELETE">
    		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
    		                            <a href="{{route('Categorie.edit', $cat->id)}}" class="btn btn-primary">Edit</a>
    		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('are you sure ?');" value="Delete">
    		                        </form>
    							</td>
    						</tr>
    					@endforeach
    				</tbody>
    			</table>
    		</div>
    		<div class="row">
    			<a class="btn btn-success" href="{{ route('Categorie.create') }}">Ajouter</a>
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


@endsection
