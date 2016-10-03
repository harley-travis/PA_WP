function initialize() {

    //LOCATION ARRAY
    var Locations = new Array(
        {
            Name: 'Corporate Office',
            Address: '1534 S Gladiola',
            City: 'Salt Lake City',
            State: 'UT',
            Zip: '84104',
            Phone: '(801) 486-7231',
            Lat: 40.737927,
            Lng: -111.972612 
        },
        {
            Name: 'Boise Office',
            Address: '11770 W President',
            City: 'Boise',
            State: 'ID',
            Zip: '83713',
            Phone: '(208) 323-1199',
            Lat: 43.611759,
            Lng: -116.328983               
        },
        {
            Name: 'Idaho Falls Office',
            Address: '240 S Holmes Ave',
            City: 'Idaho Falls',
            State: 'ID',
            Zip: '83401',
            Phone: '(208) 524-4282',
            Lat: 43.495770,
            Lng: -112.024036               
        },
        {
            Name: 'St. George Office',
            Address: '122 N 200 W',
            City: 'St George',
            State: 'UT',
            Zip: '84770',
            Phone: '(435) 656-1888',
            Lat: 37.110459,
            Lng: -113.587170               
        }
    );

    var PList = Array();
    for(x=0;x<Locations.length;x++){
        var lat = Locations[x].Lat;              
        var lng = Locations[x].Lng;
        PList.push(new google.maps.LatLng(lat,lng));
    }

    var mapOptions = {
        zoom: 12,
        scrollwheel: false,
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var Bounds = new google.maps.LatLngBounds();
    for(var i=0, LtLgLen = PList.length; i<LtLgLen; i++){
        Bounds.extend(PList[i]);              
    }
    map.fitBounds(Bounds);

    for(z=0;z<Locations.length;z++){

        var item = Locations[z];

        var contentString = '<div id="content">'+
          '<h4>'+item.Name+'</h4>'+
          '<div id="bodyContent">'+
          '<p><b>Address:</b> '+item.Address+' '+item.City+', '+item.State+'. '+item.Zip+'<br> '+
          '<b>Phone</b>: '+item.Phone+' </p>'+
          '</div>'+
          '</div>';

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(item.Lat,item.Lng),
          map: map,
          animation: google.maps.Animation.DROP,
          title: item.Name
        });

        (function(map,marker,contentString){
            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });
            
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }(map,marker,contentString));
    }
}

google.maps.event.addDomListener(window, 'load', initialize);