function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

document.addEventListener("DOMContentLoaded", () => {
    var submitBattonLib1 = document.querySelector('[submit-batton-lib-1]');
    if (submitBattonLib1) {
        submitBattonLib1.onclick = function () {
            var errorsDiv = document.querySelector('.errors');
            errorsDiv.innerHTML = '';
            errorsDiv.style.opacity = 0;
            var emptyFields = [];
            var Arr = document.querySelectorAll('[form-input-values]')[0];
            var inputArr = Arr.getElementsByTagName('input')
            for (i = 0; i < inputArr.length; i++) {
                if (inputArr[i].value.length <= 0) {
                    emptyFields.push(inputArr[i].name);
                    inputArr[i].style.cssText = 'border: 1px solid red';
                } else {
                    inputArr[i].style.cssText = 'border: 1px solid #2877bb';
                }
            }
            if (emptyFields.length > 0) {
                var language = getCookie('language');
                emptyFieldsMessage = '';
                if (language == 'ua') {
                    emptyFieldsMessage = 'Заповніть поля, виділені червоним';
                } else if (language == 'ru') {
                    emptyFieldsMessage = 'Заполните поля, выделенные красным';
                } else {
                    emptyFieldsMessage = 'Fill in the fields highlighted in red';
                }
                var emptyFieldsP = document.createElement("p");
                var emptyFieldsText = document.createTextNode(emptyFieldsMessage);
                emptyFieldsP.appendChild(emptyFieldsText);
                errorsDiv.appendChild(emptyFieldsP);
                errorsDiv.style.marginBottom = "10px";
                errorsDiv.style.border = '1px solid red';
                errorsDiv.style.opacity = 1;
                return false;
            } else {
                const request = new XMLHttpRequest();
                const url = "action.php";
                let params = '';
                for (i = 0; i < inputArr.length; i++) {
                    params += inputArr[i].name + '=' + inputArr[i].value + '&';
                }
                request.open("POST", url, false);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(params);
                if(request.readyState === 4 && request.status === 200) {
                    var chartI1 = document.getElementById('chartI1').getContext('2d');
                    var chartI2 = document.getElementById('chartI2').getContext('2d');
                    var chartP1 = document.getElementById('chartP1').getContext('2d');
                    var chartP2 = document.getElementById('chartP2').getContext('2d');
                    var chartQ1 = document.getElementById('chartQ1').getContext('2d');
                    var chartQ2 = document.getElementById('chartQ2').getContext('2d');
                    var chart = new Chart(chartI1, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'I1',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            // maintainAspectRatio: false,
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                    });

                    var chart = new Chart(chartI2, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'I2',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                        // Configuration options go here
                    });


                    var chart = new Chart(chartP1, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'P1',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                        // Configuration options go here
                    });

                    var chart = new Chart(chartP2, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'P2',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                        // Configuration options go here
                    });

                    var chart = new Chart(chartQ1, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'Q1',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                        // Configuration options go here
                    });

                    var chart = new Chart(chartQ2, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['0.5205', '0.521', '0.5215', '0.522', '0.5225'],
                            datasets: [{
                                label: 'Q2',
                                backgroundColor: 'rgb(50, 99, 20)',
                                borderColor: 'rgb(50, 50, 132)',
                                data: [null, 20, null]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'X'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Y',
                                        weight: 50
                                    }
                                }]
                            }
                        }
                        // Configuration options go here
                    });
                    var resultDiv = document.querySelector('[result]');
                    if(resultDiv)
                    {
                        resultDiv.style.display = 'block';
                        // resultDiv.scrollIntoView({behavior: "smooth"});
                        smoothScrollTo(resultDiv.offsetTop)
                    }
                }
            }
            return false;
        };
    }
    window.smoothScrollTo = (function () {
        var timer, start, factor;

        return function (target, duration) {
            var offset = window.pageYOffset,
                delta  = target - window.pageYOffset; // Y-offset difference
            duration = duration || 1000;              // default 1 sec animation
            start = Date.now();                       // get start time
            factor = 0;

            if( timer ) {
                clearInterval(timer); // stop any running animations
            }

            function step() {
                var y;
                factor = (Date.now() - start) / duration; // get interpolation factor
                if( factor >= 1 ) {
                    clearInterval(timer); // stop animation
                    factor = 1;           // clip to max 1.0
                }
                y = factor * delta + offset;
                window.scrollBy(0, y - window.pageYOffset);
            }

            timer = setInterval(step, 10);
            return timer;
        };
    }());

});