<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

@for ($i = 0; $i < 10; $i++)
<div class="w-full mt-5">
    <canvas id="myChart_{{$i}}" class="mx-auto">    </canvas>
</div>
<script>
    var ctx{{$i}} = document.getElementById('myChart_{{$i}}').getContext('2d');
    var myChart{{$i}} = new Chart(ctx{{$i}}, {
    type: 'bar',
    data: {
        labels: ['Precalculo', 'EECyT',
        'Matematica Discreta I', 'Fundamentos de Programaciòn'],
        datasets: [{
            label: 'Ciclo {{$i+1}}',
            data: [6.6, 8.4, 8.2, 9.5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.60)',
                'rgba(54, 162, 235, 0.60)',
                'rgba(255, 206, 86, 0.60)',
                'rgba(75, 192, 192, 0.60)',
                'rgba(153, 102, 255, 0.60)',
                'rgba(255, 159, 64, 0.60)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endfor
