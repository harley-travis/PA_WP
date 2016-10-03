$(document).ready(function() {
    $(".buried-1").waypoint(function() {
        $(".buried-1").addClass("visible animated bounceInLeft")
    }, {
        offset: "75%"
    });    
    $(".wp1").waypoint(function() {
        $(".wp1").addClass("visible animated fadeInLeft")
    }, {
        offset: "75%"
    });
    $(".wp2").waypoint(function() {
        $(".wp2").addClass("visible animated fadeInDown")
    }, {
        offset: "75%"
    });
    $(".wp3").waypoint(function() {
        $(".wp3").addClass("visible animated bounceInDown")
    }, {
        offset: "75%"
    });
    $(".buried-4").waypoint(function() {
        $(".buried-4").addClass("visible animated fadeInDown")
    }, {
        offset: "75%"
    });
     $(".buried-5").waypoint(function() {
        $(".buried-5").addClass("visible animated bounceInRight")
    }, {
        offset: "75%"
    });
});
