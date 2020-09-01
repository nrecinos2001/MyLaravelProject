<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

@foreach ($scores as $score)
@for ($i = 0; $i < 10; $i++)

<div class="w-full mt-5">
    <canvas id="myChart_{{$i}}" class="mx-auto">    </canvas>
</div>
<script>
    var ctx{{$i}} = document.getElementById('myChart_{{$i}}').getContext('2d');
    var myChart{{$i}} = new Chart(ctx{{$i}}, {
    type: 'bar',
    data: {
        labels: ['{{$score->subject_id}}',],
        datasets: [{
            label: 'Ciclo {{$score->cicle}}',
            data: [{{$score->score}}],
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
@endforeach