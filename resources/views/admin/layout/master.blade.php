<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Bootstrap
                </a>
            </li>
            <li>
                <a href="{{route('Categorie.index')}}">Dashboard</a>
            </li>
            <li>
                <a href="#">Gérer Profile</a>
            </li>
            <li>
                <a href="{{route('Categorie.create')}}">Gérer Catégorie</a>
            </li>
            <li>
                <a href="#">Gérer Sous Catégorie</a>
            </li>
            <li>
                <a href="{{route('User.index')}}">Gérer Client</a>
            </li>
            <li>
                <a href="{{route('Customer.index')}}">Gérer Commerçant</a>
            </li>

            <li>
                <a href="#">Contacter</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
