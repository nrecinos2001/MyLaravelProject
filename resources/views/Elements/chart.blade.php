<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<canvas id="Progress" class="w-1/2">    </canvas>
<canvas id="CUM" class="w-1/2">    </canvas>
<script>
    let proGraphic = document.getElementById("Progress").getContext("2d");
    var progressChar = new Chart(proGraphic, {
        type: "doughnut",
        data: {
            labels: ['Materias Pasadas', 'Materias Restantes'],
            datasets:[{
                label: 'Progreso de la carrera',
                data: [{{$user->subjectsDone}}, {{$sbc->nofSubjects - $user->subjectsDone}}],
                backgroundColor: [
                    '#48bb78', '#9f7aea'
                ]
            }]
        },
    });
</script>
<script>
    let cumGraphic = document.getElementById("CUM").getContext("2d");
    var cumChar = new Chart(cumGraphic, {
        type: "doughnut",
        data: {
            labels: ['CUM Alcanzado', 'Distancia al 10'],
            datasets:[{
                label: 'CUM',
                data: [ "{{$user->userCUM}}", "{{10 - $user->userCUM}}"],
                backgroundColor: [
                    '#48bb78', '#9f7aea'
                ]
            }] 
        },
    });
</script>