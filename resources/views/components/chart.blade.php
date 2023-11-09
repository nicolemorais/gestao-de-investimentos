
<canvas id="Grafico"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
const grafico = document.getElementById('Grafico');


new Chart(grafico, {
    type: 'doughnut',
    data: {
    datasets: [{
        label:[{!! $catLabel !!}],
        data: [{!! $catTotal !!}],
        backgroundColor: [
            'rgba(28, 99, 132)',
            'rgba(5, 162, 235)',                         
            'rgba(75, 149, 26)']}],
    },
    options: {
        hoverOffset: 4,
    },
});
</script>
  
