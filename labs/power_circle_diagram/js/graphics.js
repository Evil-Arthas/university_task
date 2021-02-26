document.addEventListener("DOMContentLoaded", function () {

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
            datasets: [{
                label: 'I1',
                backgroundColor: 'rgb(50, 99, 20)',
                borderColor: 'rgb(50, 50, 132)',
                data: [0.5215, 50]
            }]
        },

        // Configuration options go here
        options: {}
    });
});