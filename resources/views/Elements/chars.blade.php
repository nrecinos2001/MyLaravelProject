<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<canvas id="myChar">    </canvas>
<script>
    let myGraphic = document.getElementById("myChar").getContext("2d");
    var myChar = new Chart(myGraphic, {
        type: "doughnut",
        data: {
            labels: ['Completado', 'Restante'],
            datasets:[{
                label: 'Progreso de la carrera',
                data: [ {{$pro['done']}}, {{$pro['missing']}}],
                backgroundColor: [
                    '#48bb78', '#9f7aea'
                ]
            }] 
        },
    });
</script>