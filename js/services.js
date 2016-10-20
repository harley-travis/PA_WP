var Services = {
    Init: function() {
        Services.Widget.Banner.Init()
    },
    Widget: {
        Banner: {
            Init: function() {
                Services.Widget.Banner.Sections.BurglarAlarms()
            },
            Reset: function() {
                $(".serviceBannerSection").hide(), $(".servicesBannerActive").hide(), $(".servicesBannerArmed").show()
            },
            Switching: function(e) {
                switch (e) {
                    case "burglar-alarms":
                        Services.Widget.Banner.Sections.BurglarAlarms();
                        break;
                    case "fire-protection":
                        Services.Widget.Banner.Sections.FireProtection();
                        break;
                    case "surveillance":
                        Services.Widget.Banner.Sections.Surveillance();
                        break;
                    case "access-control":
                        Services.Widget.Banner.Sections.AccessControl();
                        break;
                    case "alarm-response":
                        Services.Widget.Banner.Sections.AlarmResponse();
                        break;
                    default:
                        Services.Widget.Banner.Sections.BurglarAlarms()
                }
            },
            Sections: {
                BurglarAlarms: function() {
                    Services.Widget.Banner.Reset(), $("#burglar-alarms").hide(), $("#burglar-alarms-active").show(), $("#burglar-alarms-content").show().css({
                        "background-image": "url('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/img/home/services/burglar-alarms.jpg')",
                        height: "60vh",
                        "background-size": "cover",
                        "background-position": "50% 50%",
                        "background-repeat": "no-repeat",
                        "background-attachment": "fixed"
                    })
                },
                FireProtection: function() {
                    Services.Widget.Banner.Reset(), $("#fire-protection").hide(), $("#fire-protection-active").show(), $("#fire-protection-content").show().css({
                        "background-image": "url('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/img/home/services/fire-protection.jpg')",
                        height: "60vh",
                        "background-size": "cover",
                        "background-position": "50% 50%",
                        "background-repeat": "no-repeat",
                        "background-attachment": "fixed"
                    })
                },
                Surveillance: function() {
                    Services.Widget.Banner.Reset(), $("#surveillance").hide(), $("#surveillance-active").show(), $("#surveillance-content").show().css({
                        "background-image": "url('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/img/home/services/under-surveillance.jpg')",
                        height: "60vh",
                        "background-size": "cover",
                        "background-position": "50% 50%",
                        "background-repeat": "no-repeat",
                        "background-attachment": "fixed"
                    })
                },
                AccessControl: function() {
                    Services.Widget.Banner.Reset(), $("#access-control").hide(), $("#access-control-active").show(), $("#access-control-content").show().css({
                        "background-image": "url('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/img/home/services/access-control.jpg')",
                        height: "60vh",
                        "background-size": "cover",
                        "background-position": "50% 50%",
                        "background-repeat": "no-repeat",
                        "background-attachment": "fixed"
                    })
                },
                AlarmResponse: function() {
                    Services.Widget.Banner.Reset(), $("#alarm-response").hide(), $("#alarm-response-active").show(), $("#alarm-response-content").show().css({
                        "background-image": "url('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/img/home/services/alarm-response.jpg')",
                        height: "60vh",
                        "background-size": "cover",
                        "background-position": "50% 50%",
                        "background-repeat": "no-repeat",
                        "background-attachment": "fixed"
                    })
                }
            }
        }
    }
};
$(document).ready(function() {
    Services.Init(), $(".servicesBannerBtn").click(function(e) {
        Services.Widget.Banner.Switching(e.currentTarget.id)
    })
});
