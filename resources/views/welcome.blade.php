<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Display All Customer</title>
  <script src="http://maps.google.com/maps/api/js?sensor=false"
          type="text/javascript"></script>
</head>
<body>
  <div id="map" style="width: 1300px; height: 650px;"></div>

  <script type="text/javascript">
    var locations = [
      @foreach($c as $l)
      ['{{$l->adresse}}',{{$l->lat}} , {{$l->lng}}, {{$l->id}}],
    @endforeach
    ];


  //   @foreach($c as $l)
  // alert('{{$l->adresse}}');
  // @endforeach

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,

      center: new google.maps.LatLng(35.853775, 10.6059157),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          var url = '{{ route("welcome.show", ":id") }}';//welcome.show
          url = url.replace(':id', locations[i][3]);
          infowindow.setContent('<a  href="'+url+'">' +locations[i][0]+'</a>');
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
