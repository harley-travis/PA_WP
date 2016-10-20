/**
    **
    ** NOTE:    the url in the main-nav.php and sidebar.php file need to have a backslash after the filepath. IE: /products/
    **          the url needs to be identical, to the character, in order for it to work. 
    **
    ** NOTE 2:  if you need to add another section that contains a dropdown menu. Follow these steps:
    **          1) add an else if statement under linke 16. Change the class of .currentServices to new link
    **          2) in includes/main-nav.php, give the dropdown menu a class of .currentNEWLINK
    **              
    ** NOTE 3:  when you publish this file, change the urls found on lines 17,18, 22
    **
**/

$(document).ready(function() {
    var a = "",
        b = location.origin + "/peakalarm/index.php/services/",
        d = (location.origin + "/peakalarm/index.php/products/", "/peakalarm/index.php/peak-link/"),
        e = "/peakalarm/index.php/peak-view/",
        f = "/peakalarm/index.php/peak-edge/";
    $(function() {
        (window.location.href == location.origin + d || window.location.href == location.origin + e || window.location.href == location.origin + f) && $(".currentProducts").addClass("current")
    }), $(".parent a").each(function() {
        -1 != window.location.href.indexOf($(this).prop("href")) && ($(this).addClass("current"), $(this).closest(".parent").find("ul.subnav").slideDown())
    }), $(".subnav-list a").each(function() {
        -1 != window.location.href.indexOf($(this).prop("href")) && ($(this).addClass("current"), $(this).closest(".parent").find(".parentInt").attr("href") == a ? $(".currentAbout").addClass("current") : $(this).closest(".parent").find(".parentInt").attr("href") != b && $(".currentServices").addClass("current"))
    }), $(function() {
        $("a").each(function() {
            $(this).prop("href") == window.location.href && $(this).addClass("current")
        })
    }), $("li.parent").click(function() {
        $(this).siblings().find(".subnav").slideUp(), $(this).children(".subnav").slideDown()
    })
});
