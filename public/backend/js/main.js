$(function(){
    "use strict";

    $('.sparkbar').sparkline('html', { type: 'bar' });

    $('.sparkline-pie').sparkline('html', {
        type: 'pie',
        offset: 90,
        width: '100px',
        height: '100px',
        sliceColors: ['#29bd73', '#182973', '#ffcd55']
    })

    // // notification popup
    // toastr.options.closeButton = true;
    // toastr.options.positionClass = 'toast-bottom-right';
    // toastr.options.showDuration = 1000;
    // toastr['info']('Hello, welcome to Medicazone, a medical store.');


    $('.knob').knob({
		draw: function () {
		}
    });
    $(".rtl .knob").knob({
		draw: function () {
		   //style rtl
			this.i.css({
				'margin-right': '-' + ((this.w * 3 / 4 + 2) >> 0) + 'px',
				'margin-left': 'auto'
			});
		},
	});
});

$(function() {
	"use strict";
    initSparkline();

	var values2 = getRandomValues();
	var paramsBar = {
        type: 'bar',
        barWidth: 10,
        height: 80,
        barSpacing: 8,
        barColor: '#ffffff'
    };
    $('#minibar-chart1').sparkline(values2[0], paramsBar);
    $('#minibar-chart2').sparkline(values2[1], paramsBar);
    $('#minibar-chart3').sparkline(values2[2], paramsBar);
    $('#minibar-chart4').sparkline(values2[3], paramsBar);

	function getRandomValues() {
        // data setup
        var values = new Array(20);

        for (var i = 0; i < values.length; i++) {
            values[i] = [5 + randomVal(), 10 + randomVal(), 15 + randomVal(), 20 + randomVal(), 30 + randomVal(),
                35 + randomVal(), 40 + randomVal(), 45 + randomVal(), 50 + randomVal()
            ];
        }

        return values;
    }

    function randomVal() {
        return Math.floor(Math.random() * 80);
	}
});

// C3 Chart js
$(function(){
    "use strict";
    // Small chart widgets
    var chart = c3.generate({
        bindto: '#chart-bg-users-1',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        data: {
            names: {
                data1: 'Users online'
            },
            columns: [
                ['data1', 30, 40, 10, 40, 12, 22, 40]
            ],
            type: 'area'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function (x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#467fcf']
        }
    });
    var chart = c3.generate({
        bindto: '#chart-bg-users-2',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        data: {
            names: {
                data1: 'Users online'
            },
            columns: [
                ['data1', 30, 40, 10, 40, 12, 22, 40]
            ],
            type: 'area'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function (x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#e74c3c']
        }
    });
    var chart = c3.generate({
        bindto: '#chart-bg-users-3',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        data: {
            names: {
                data1: 'Users online'
            },
            columns: [
                ['data1', 30, 40, 10, 40, 12, 22, 40]
            ],
            type: 'area'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function (x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#5eba00']
        }
    });
    var chart = c3.generate({
        bindto: '#chart-bg-users-4',
        padding: {
            bottom: -10,
            left: -1,
            right: -1
        },
        data: {
            names: {
                data1: 'Users online'
            },
            columns: [
                ['data1', 30, 40, 10, 40, 12, 22, 40]
            ],
            type: 'area'
        },
        legend: {
            show: false
        },
        transition: {
            duration: 0
        },
        point: {
            show: false
        },
        tooltip: {
            format: {
                title: function (x) {
                    return '';
                }
            }
        },
        axis: {
            y: {
                padding: {
                    bottom: 0,
                },
                show: false,
                tick: {
                    outer: false
                }
            },
            x: {
                padding: {
                    left: 0,
                    right: 0
                },
                show: false
            }
        },
        color: {
            pattern: ['#f1c40f']
        }
    });

    // chart-employment
    var chart = c3.generate({
        bindto: '#chart-employment', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 1, 10, 10, 27, 8, 21, 25],
                ['data2', 0, 5, 15, 27, 15, 21, 25],
                ['data3', 2, 17, 18, 21, 8, 30, 29]
            ],
            type: 'line', // default type of chart
            colors: {
                'data1': '#b8428c',
                'data2': '#f19b9c',
                'data3': '#f9cdac',
            },
            names: {
                // name of each serie
                'data1': 'Development',
                'data2': 'Marketing',
                'data3': 'Sales'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: [ '11/2021', '12/2021', '1/2022', '2/2022', '3/2022', '4/2022', '5/2022', '6/2022','7/2021']
            },
        },
        legend: {
            show: true, //hide legend
        },
        padding: {
            bottom: 20,
            top: 0
        },
    });

    // Members
    var chart = c3.generate({
        bindto: '#chart-bar-stacked', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'bar', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#db5087',
                'data2': '#f9cdac',
            },
            names: {
                // name of each serie
                'data1': 'User',
                'data2': 'Merchant'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
            },
        },
        bar: {
            width: 10
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -6,
        },
    });
    // Marketing
    var chart = c3.generate({
        bindto: '#chart-area-Marketing', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'area-spline', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#e8608a',
                'data2': '#f3a8a1',
            },
            names: {
                // name of each serie
                'data1': 'Last Month',
                'data2': 'This Month'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
            },
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -7,
        },
    });

    c3.generate({
        bindto: '#chart-pie', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 12],
                ['data2', 44],
                ['data3', 63],
                ['data4', 14]
            ],
            type: 'pie', // default type of chart
            colors: {
                'data1': '#973490',
                'data2': '#db5087',
                'data3': '#ed8495',
                'data4': '#f9cdac',
            },
            names: {
                // name of each serie
                'data1': 'Brands',
                'data2': 'Categories',
                'data3': 'Products',
                'data4': 'Orders',
            }
        },
        axis: {
        },
        legend: {
            show: true, //hide legend
        },
        padding: {
            bottom: 20,
            top: 0
        },
    });
});

$(function(){
    "use strict";
    var dataStackedBar = {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
        series: [
            [8000, 12000, 3600, 1300, 12000, 12000],
            [2000, 4000, 5000, 3000, 7000, 4000],
            [1000, 2000, 4000, 6000, 3000, 2000]
        ]
    };
    new Chartist.Bar('#stackedbar-chart', dataStackedBar, {
        height: "228px",
        stackBars: true,
        axisX: {
            showGrid: false
        },
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k';
            }
        },
        plugins: [
            Chartist.plugins.tooltip({
                appendToBody: true
            }),
            Chartist.plugins.legend({
                legendNames: ['Income', 'Revenue', 'Expense']
            })
        ]
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 25px'
            });
        }
    });
});


$(function() {
    "use strict";


    // My Balance
    $('#linecustom').sparkline('html', {
        height: '60px',
        width: '100%',
        lineColor: '#373a40',
        fillColor: '#2d3035',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#60bafd',
        spotRadius: 0
    });


});
(function ($) {

    "use strict";

    $(window).on('load', function () {


        /*Page Loader active
        ========================================================*/
        $('#preloader').fadeOut();

        // Sticky Nav
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.scrolling-navbar').addClass('top-nav-collapse');
            } else {
                $('.scrolling-navbar').removeClass('top-nav-collapse');
            }
        });

        // one page navigation
        $('.navbar-nav').onePageNav({
            currentClass: 'active'
        });

        /* slicknav mobile menu active  */
        $('.mobile-menu').slicknav({
            prependTo: '.navbar-header',
            parentTag: 'liner',
            allowParentLinks: true,
            duplicate: true,
            label: '',
            closedSymbol: '<i class="lni-chevron-right"></i>',
            openedSymbol: '<i class="lni-chevron-down"></i>',
        });

        /* WOW Scroll Spy
      ========================================================*/
        var wow = new WOW({
            //disabled for mobile
            mobile: false
        });

        wow.init();

        /* Back Top Link active
        ========================================================*/
        var offset = 200;
        var duration = 500;
        $(window).scroll(function () {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(400);
            } else {
                $('.back-to-top').fadeOut(400);
            }
        });

        $('.back-to-top').on('click', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

}(jQuery));
