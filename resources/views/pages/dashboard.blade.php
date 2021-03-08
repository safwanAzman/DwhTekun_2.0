@extends('default.default')
@section('content')
<livewire:page.dashboard />

{{-- Multiplier Rate chart --}}
<script>
    // JS 
    var chart = JSC.chart('chartDiv', {
        debug: true,
        type: 'gauge',
        animation_duration: 1000,
        legend_visible: false,
        xAxis: {
            spacingPercentage: 0.25
        },
        yAxis: {
            defaultTick: {
                padding: -5,
                label_style_fontSize: '14px'
            },
            line: {
                width: 9,
                color: 'smartPalette',
                breaks_gap: 0.06
            },
            scale_range: [0, 100]
        },
        palette: {
            pointValue: '{%value/100}',
            colors: ['green', 'yellow', 'red']
        },
        defaultAnnotation: {
            position: 'inside bottom'
        },
        annotations: [{
                id: 'anVal',
                label: {
                    text: '10%',
                    style: {
                        fontSize: 46,
                        color:'#00c0c7',
                    }
                }
            },
        ],
        defaultTooltip_enabled: false,
        defaultSeries: {
            angle: {
                sweep: 180
            },
            shape: {
                innerSize: '70%'
            }
        },
        series: [{
            type: 'column roundcaps',
            points: [{
                id: '1',
                x: 'speed',
                y: 10
            }]
        }],

    });

</script>
{{-- Multiplier Rate chart --}}

{{-- Collection Rate chart --}}
<script>
    // JS 
    var chart = JSC.chart('chartDiv2', {
        debug: true,
        type: 'gauge',
        animation_duration: 1000,
        legend_visible: false,
        xAxis: {
            spacingPercentage: 0.25
        },
        yAxis: {
            defaultTick: {
                padding: -5,
                label_style_fontSize: '14px'
            },
            line: {
                width: 9,
                color: 'smartPalette',
                breaks_gap: 0.06
            },
            scale_range: [0, 100]
        },
        palette: {
            pointValue: '{%value/100}',
            colors: ['green', 'yellow', 'red']
        },
        defaultAnnotation: {
            position: 'inside bottom'
        },
        annotations: [{
                id: 'anVal',
                label: {
                    text: '77%',
                    style: {
                        fontSize: 46,
                        color:'#00c0c7',
                    }
                }
            },
        ],
        defaultTooltip_enabled: false,
        defaultSeries: {
            angle: {
                sweep: 180
            },
            shape: {
                innerSize: '70%'
            }
        },
        series: [{
            type: 'column roundcaps',
            points: [{
                id: '1',
                x: 'speed',
                y: 77
            }]
        }],

    });

</script>
{{-- Collection Rate chart --}}

@endsection