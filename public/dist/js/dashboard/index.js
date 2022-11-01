document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts &&
        new ApexCharts(document.getElementById("chart-revenue-bg"), {
            chart: {
                type: "area",
                fontFamily: "inherit",
                height: 40.0,
                sparkline: {
                    enabled: true,
                },
                animations: {
                    enabled: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 0.16,
                type: "solid",
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [
                {
                    name: "Profits",
                    data: [
                        37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41,
                        35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35,
                        41, 67,
                    ],
                },
            ],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                axisBorder: {
                    show: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-20",
                "2020-06-21",
                "2020-06-22",
                "2020-06-23",
                "2020-06-24",
                "2020-06-25",
                "2020-06-26",
                "2020-06-27",
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
            ],
            colors: ["#206bc4"],
            legend: {
                show: false,
            },
        }).render();
});

document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts &&
        new ApexCharts(document.getElementById("chart-new-clients"), {
            chart: {
                type: "line",
                fontFamily: "inherit",
                height: 40.0,
                sparkline: {
                    enabled: true,
                },
                animations: {
                    enabled: false,
                },
            },
            fill: {
                opacity: 1,
            },
            stroke: {
                width: [2, 1],
                dashArray: [0, 3],
                lineCap: "round",
                curve: "smooth",
            },
            series: [
                {
                    name: "May",
                    data: [
                        37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41,
                        35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35,
                        41, 67,
                    ],
                },
                {
                    name: "April",
                    data: [
                        93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61,
                        27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65,
                        39, 37,
                    ],
                },
            ],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-20",
                "2020-06-21",
                "2020-06-22",
                "2020-06-23",
                "2020-06-24",
                "2020-06-25",
                "2020-06-26",
                "2020-06-27",
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
            ],
            colors: ["#206bc4", "#a8aeb7"],
            legend: {
                show: false,
            },
        }).render();
});

document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts &&
        new ApexCharts(document.getElementById("chart-active-users"), {
            chart: {
                type: "bar",
                fontFamily: "inherit",
                height: 40.0,
                sparkline: {
                    enabled: true,
                },
                animations: {
                    enabled: false,
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: "50%",
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [
                {
                    name: "Profits",
                    data: [
                        37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41,
                        35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35,
                        41, 67,
                    ],
                },
            ],
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                axisBorder: {
                    show: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-20",
                "2020-06-21",
                "2020-06-22",
                "2020-06-23",
                "2020-06-24",
                "2020-06-25",
                "2020-06-26",
                "2020-06-27",
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
            ],
            colors: ["#206bc4"],
            legend: {
                show: false,
            },
        }).render();
});
