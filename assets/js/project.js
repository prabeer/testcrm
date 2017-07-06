$(document).ready(function() {
    "use strict";
    $("#pie-1").easyPieChart( {
        barColor:"#75c181", trackColor:"#f5f5f5", scaleColor:!1, lineWidth:10, animate:800, onStep:function(e, t, o) {
            $(this.el).find("span").text(Math.round(o))
        }
    }
    ), $("#pie-2").easyPieChart( {
        barColor:"#f77b6b", trackColor:"#f5f5f5", scaleColor:!1, lineWidth:10, animate:800, onStep:function(e, t, o) {
            $(this.el).find("span").text(Math.round(o))
        }
    }
    ), Morris.Area( {
        element:"commits-chart", data:[ {
            x: "2016-05-01", y: 123
        }
        , {
            x: "2016-05-02", y: 160
        }
        , {
            x: "2016-05-03", y: 233
        }
        , {
            x: "2016-05-04", y: 118
        }
        , {
            x: "2016-05-05", y: 120
        }
        , {
            x: "2016-05-06", y: 234
        }
        , {
            x: "2016-05-07", y: 198
        }
        , {
            x: "2016-05-08", y: 123
        }
        , {
            x: "2016-05-09", y: 239
        }
        , {
            x: "2016-05-10", y: 235
        }
        , {
            x: "2016-05-11", y: 234
        }
        , {
            x: "2016-05-12", y: 156
        }
        , {
            x: "2016-05-13", y: 114
        }
        , {
            x: "2016-05-14", y: 89
        }
        , {
            x: "2016-05-15", y: 139
        }
        , {
            x: "2016-05-16", y: 128
        }
        , {
            x: "2016-05-17", y: 117
        }
        , {
            x: "2016-05-18", y: 152
        }
        , {
            x: "2016-05-19", y: 131
        }
        , {
            x: "2016-05-20", y: 123
        }
        , {
            x: "2016-05-21", y: 173
        }
        , {
            x: "2016-05-22", y: 206
        }
        , {
            x: "2016-05-23", y: 217
        }
        , {
            x: "2016-05-24", y: 324
        }
        , {
            x: "2016-05-25", y: 268
        }
        , {
            x: "2016-05-26", y: 184
        }
        , {
            x: "2016-05-27", y: 213
        }
        , {
            x: "2016-05-28", y: 124
        }
        ], xkey:"x", ykeys:["y"], labels:["Bug Count"], lineColors:["#12A698"], lineWidth:0, fillOpacity:.7, resize:!0, pointSize:0, xLabels:"week", hideHover:"auto", dateFormat:function(e) {
            return moment(e).format("DD MMM YYYY")
        }
    }
    ).on("click", function(e, t) {
        console.log(e, t)
    }
    )
}

);