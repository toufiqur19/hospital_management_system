// pai Chart
const ctx = document.getElementById("pieChart");

new Chart(ctx, {
  type: 'pie',
  data: {
    
        legend: {
          position: 'right',
        },
        title: {
          display: true,
          text: 'Chart.js Pie Chart'
        },
    labels: ["Red", "Purple", "Orange"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
      },
    ],
  },
  
});

//bar Chart
const barChart = document.getElementById('barChart');

  new Chart(barChart, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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
