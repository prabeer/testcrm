$(document).ready(function() {
    "use strict";

    function o(o, t, e) {
        return new Date(o, t - 1, e).getTime()
    }

    function o(o, t, e) {
        return new Date(o, t - 1, e).getTime()
    }
    var t = [
            [o(2015, 6, 1), 353],
            [o(2015, 6, 2), 457],
            [o(2015, 6, 3), 412],
            [o(2015, 6, 4), 397],
            [o(2015, 6, 5), 388],
            [o(2015, 6, 6), 420],
            [o(2015, 6, 7), 452],
            [o(2015, 6, 8), 364],
            [o(2015, 6, 9), 411],
            [o(2015, 6, 10), 213],
            [o(2015, 6, 11), 153],
            [o(2015, 6, 12), 378],
            [o(2015, 6, 13), 213],
            [o(2015, 6, 14), 419]
        ],
        e = [{
            label: "Hours",
            data: t
        }],
        a = {
            series: {
                bars: {
                    show: !0,
                    barWidth: 864e5 * .7,
                    lineWidth: 0,
                    fill: !0,
                    fillColor: {
                        colors: [{
                            opacity: .8
                        }, {
                            opacity: .8
                        }]
                    }
                }
            },
            shadowSize: 0,
            xaxis: {
                color: "#f3f3f3",
                mode: "time",
                tickSize: [2, "day"]
            },
            yaxis: {
                color: "#f3f3f3",
                tickFormatter: function(o, t) {
                    return numeral(o).format("0,0")
                }
            },
            colors: ["#40babd"],
            grid: {
                borderWidth: 0,
                hoverable: !0,
                clickable: !0
            },
            legend: {
                show: !1
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%x - %y bugs"
            }
        };
    $.plot($("#time-chart"), e, a);
    var l = [{
            label: "Project 1",
            data: 5,
            color: "#4796BF"
        }, {
            label: "Project 2",
            data: 10,
            color: "#2F647F"
        }, {
            label: "Project 3",
            data: 25,
            color: "#5EC8FF"
        }, {
            label: "Project 4",
            data: 60,
            color: "#55B4E5"
        }],
        i = {
            series: {
                pie: {
                    show: !0,
                    innerRadius: .5,
                    highlight: {
                        opacity: .2
                    }
                }
            },
            grid: {
                hoverable: !0
            },
            legend: {
                show: !0
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%s: %p.0%",
                shifts: {
                    x: 20,
                    y: 0
                }
            }
        };
    $.plot($("#type-chart"), l, i);
    var r = [
            [o(2015, 5, 27), 3503],
            [o(2015, 5, 28), 4114],
            [o(2015, 5, 29), 3876],
            [o(2015, 5, 30), 4322],
            [o(2015, 5, 31), 3750],
            [o(2015, 6, 1), 4118],
            [o(2015, 6, 2), 4318],
            [o(2015, 6, 3), 3821],
            [o(2015, 6, 4), 4821],
            [o(2015, 6, 5), 4618],
            [o(2015, 6, 6), 4521],
            [o(2015, 6, 7), 4123],
            [o(2015, 6, 8), 4944],
            [o(2015, 6, 9), 4803],
            [o(2015, 6, 10), 4700],
            [o(2015, 6, 11), 4333],
            [o(2015, 6, 12), 4567],
            [o(2015, 6, 13), 4760]
        ],
        n = [{
            label: "Sales",
            data: r,
            points: {
                symbol: "circle"
            }
        }],
        c = {
            series: {
                lines: {
                    show: !0,
                    lineWidth: 1.5,
                    fill: !0,
                    fillColor: {
                        colors: [{
                            opacity: .1
                        }, {
                            opacity: .4
                        }]
                    }
                },
                points: {
                    radius: 2,
                    fill: !0,
                    show: !0
                }
            },
            shadowSize: 0,
            xaxis: {
                color: "#f3f3f3",
                font: {
                    color: "grey"
                },
                mode: "time",
                tickSize: [3, "day"],
                tickLength: 10
            },
            yaxis: {
                color: "#f3f3f3",
                font: {
                    color: "grey"
                },
                tickFormatter: function(o, t) {
                    return numeral(o).format("0,0.00")
                }
            },
            colors: ["#75c181"],
            grid: {
                borderWidth: 0,
                hoverable: !0,
                clickable: !0,
                backgroundColor: {
                    colors: ["#EDF5FF", "#ffffff"]
                }
            },
            legend: {
                show: !1
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%x - $%y"
            }
        };
    $.plot($("#sales-chart"), n, c), $("#world-map").vectorMap({
        map: "world_mill_en",
        backgroundColor: "none",
        regionStyle: {
            initial: {
                fill: "#B8E9EE",
                "fill-opacity": 1,
                stroke: "none",
                "stroke-width": 0,
                "stroke-opacity": 1
            },
            hover: {
                "fill-opacity": .9,
                cursor: "pointer"
            }
        },
        markerStyle: {
            initial: {
                fill: "#FB866A",
                "fill-opacity": .9,
                "stroke-width": 2,
                "stroke-opacity": .3,
                stroke: "#FB866A",
                r: 5
            },
            hover: {
                fill: "#EC573A",
                "fill-opacity": 1,
                stroke: "#FB866A",
                "stroke-width": 4,
                "stroke-opacity": .4,
                cursor: "pointer"
            },
            selected: {
                fill: "#FB866A"
            }
        },
        markers: [{
            latLng: [51.4637, -2.588313],
            name: "Bristol"
        }, {
            latLng: [40.717801, -74.00372],
            name: "New York"
        }, {
            latLng: [37.770044, -122.46644],
            name: "San Francisco"
        }, {
            latLng: [51.518304, -.126323],
            name: "London"
        }, {
            latLng: [39.914323, 116.391941],
            name: "Beijing"
        }, {
            latLng: [22.287112, 114.172508],
            name: "Hongkong"
        }, {
            latLng: [1.3, 103.8],
            name: "Singapore"
        }, {
            latLng: [48.856579, 2.350302],
            name: "Paris"
        }, {
            latLng: [40.425389, -3.703571],
            name: "Madrid"
        }, {
            latLng: [43.652612, -79.381497],
            name: "Toronto"
        }, {
            latLng: [52.519995, 13.412085],
            name: "Berlin"
        }, {
            latLng: [45.507482, 12.282149],
            name: "Venice"
        }, {
            latLng: [35.675493, 139.820245],
            name: "Toyko"
        }, {
            latLng: [41.009382, 28.979214],
            name: "Istanbul"
        }, {
            latLng: [-33.861823, 151.179091],
            name: "Sydney"
        }, {
            latLng: [630.048637, 31.236491],
            name: "Cairo"
        }]
    })
});
