// document.addEventListener("DOMContentLoaded", function () {
//
//     var chartI1 = document.getElementById('chartI1').getContext('2d');
//     var chartI2 = document.getElementById('chartI2').getContext('2d');
//     var chartP1 = document.getElementById('chartP1').getContext('2d');
//     var chartP2 = document.getElementById('chartP2').getContext('2d');
//     var chartQ1 = document.getElementById('chartQ1').getContext('2d');
//     var chartQ2 = document.getElementById('chartQ2').getContext('2d');
//
//     var chart = new Chart(chartI1, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'I1',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             // maintainAspectRatio: false,
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//     });
//
//     var chart = new Chart(chartI2, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'I2',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//         // Configuration options go here
//     });
//
//
//     var chart = new Chart(chartP1, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'P1',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//         // Configuration options go here
//     });
//
//     var chart = new Chart(chartP2, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'P2',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//         // Configuration options go here
//     });
//
//     var chart = new Chart(chartQ1, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'Q1',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//         // Configuration options go here
//     });
//
//     var chart = new Chart(chartQ2, {
//         // The type of chart we want to create
//         type: 'line',
//
//         // The data for our dataset
//         data: {
//             labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
//             datasets: [{
//                 label: 'Q2',
//                 backgroundColor: 'rgb(50, 99, 20)',
//                 borderColor: 'rgb(50, 50, 132)',
//                 data: [null, 20, null]
//             }]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'X'
//                     }
//                 }],
//                 yAxes: [{
//                     display: true,
//                     scaleLabel: {
//                         display: true,
//                         labelString: 'Y',
//                         weight: 50
//                     }
//                 }]
//             }
//         }
//         // Configuration options go here
//     });
// });