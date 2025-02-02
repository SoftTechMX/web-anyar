@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Dashboard" url="Profile / Dashboard" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Welcome to Our Dashboard') }}
				</h2>
				<p>
					{{ __('In this section you will be able to see real-time graphs and statistics of the website, based on this you will be able to determine crucial decisions to know the performance of your server and the traffic of the user network.') }}
				</p>
			</div>

            <div id="chart-web-requests"></div>

            <div class="row mt-5">
                <div class="col-12 col-lg-6">
                    <div id="chart-polygon"></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div id="chart"></div>
                </div>
            </div>

            <div id="chart2"></div>
		</div>
	</section>
@endsection

@push('JS')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options_requests = {
            series: [{
                name: "STOCK ABC",
                data: [1539, 1201, 305, 451, 5984, 646, 74, 8978, 916, 1016]
            }],
            chart: {
                type: 'area',
                height: 350,
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'WEB Requests Last Month',
                align: 'left'
            },
            subtitle: {
                text: 'Request Per Day',
                align: 'left'
            },
            labels: [
                '2023-01-01', '2023-01-02', '2023-01-03', '2023-01-04',
                '2023-01-05', '2023-01-06', '2023-01-07', '2023-01-08', 
                '2023-01-09', '2023-01-10'
            ],
            xaxis: {
                type: 'datetime', // Mantén 'datetime'
            },
            yaxis: {
                opposite: true
            },
            legend: {
                horizontalAlign: 'left'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-web-requests"), options_requests);
        chart.render();

        ////////////////////////////////////////////////////////////////////////////////////////////
        var options = {
          series: [{
          name: 'Series 1',
          data: [20, 100, 40, 30, 50, 80, 33],
        }],
          chart: {
          height: 350,
          type: 'radar',
        },
        dataLabels: {
          enabled: true
        },
        plotOptions: {
          radar: {
            size: 140,
            polygons: {
              strokeColors: '#e9e9e9',
              fill: {
                colors: ['#f8f8f8', '#fff']
              }
            }
          }
        },
        title: {
          text: 'Radar with Polygon Fill'
        },
        colors: ['#FF4560'],
        markers: {
          size: 4,
          colors: ['#fff'],
          strokeColor: '#FF4560',
          strokeWidth: 2,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val
            }
          }
        },
        xaxis: {
          categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
        },
        yaxis: {
          labels: {
            formatter: function(val, i) {
              if (i % 2 === 0) {
                return val
              } else {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-polygon"), options);
        chart.render();

        ////////////////////////////////////////////////////////////////////////////////////////////
        var options = {
          series: [14, 23, 21, 17, 15, 10, 12, 17, 21],
          chart: {
          type: 'polarArea',
        },
        stroke: {
          colors: ['#fff']
        },
        fill: {
          opacity: 0.8
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        ////////////////////////////////////////////////////////////////////////////////////////////
        var options = {
          series: [{
          data: [44, 55, 41, 64, 22, 43, 21]
        }, {
          data: [53, 32, 33, 52, 13, 44, 32]
        }],
          chart: {
          type: 'bar',
          height: 430
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        tooltip: {
          shared: true,
          intersect: false
        },
        xaxis: {
          categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
      
    });
</script>

@endpush
