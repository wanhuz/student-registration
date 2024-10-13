<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="dayChart"></canvas>

<script>
  // Get the canvas element
  const ctx = document.getElementById('dayChart').getContext('2d');

  let labels = "{{ $labels }}";
  labels = labels.replace('{', '');
  labels = labels.replace('}', '');

  const labelArray = labels
    .replace(/^\[|\]$/g, '') // Remove the square brackets
    .split(',') // Split by comma
    .map(item => item.replace(/'/g, '').trim()); // Remove single quotes and trim whitespace


  const dayChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labelArray, //['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [{
        label: 'Days',
        data: {{ $data }},
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
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
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
