
// $(function () {
  

//   /* Chart.js Charts */
//   // Sales chart
//   var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
//   // $('#revenue-chart').get(0).getContext('2d');

//   var salesChartData = {
//     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//     datasets: [
//       {
//         label: 'VALID RECEIPTS',
//         backgroundColor: "#008000",
//         borderColor: 'rgba(60,141,188,0.8)',
//         pointRadius: false,
//         pointColor: '#3b8bba',
//         pointStrokeColor: 'rgba(60,141,188,1)',
//         pointHighlightFill: '#fff',
//         pointHighlightStroke: 'rgba(60,141,188,1)',
//         data: [200, 250, 150, 650, 750, 700, 1000]
//       },
//       {
//         label: 'PENDING RECEIPTS',
//         backgroundColor:"#EC7100",
//         borderColor: 'rgba(210, 214, 222, 1)',
//         pointRadius: false,
//         pointColor: 'rgba(210, 214, 222, 1)',
//         pointStrokeColor: '#c1c7d1',
//         pointHighlightFill: '#fff',
//         pointHighlightStroke: 'rgba(220,220,220,1)',
//         data: [250, 150, 400, 300, 700, 500, 150]
//       } 
//       ,
//       {
//         label: 'REJECT RECEIPTS',
//         backgroundColor: "#FF0000",
//         borderColor: 'rgba(210, 214, 222, 1)',
//         pointRadius: false,
//         pointColor: 'rgba(210, 214, 222, 1)',
//         pointStrokeColor: '#c1c7d1',
//         pointHighlightFill: '#fff',
//         pointHighlightStroke: 'rgba(220,220,220,1)',
//         data: [65, 48, 67, 45, 49, 20, 100]
//       }
//     ]
//   };

//   var salesChartOptions = {
//     maintainAspectRatio: false,
//     responsive: true,
//     legend: {
//       display: false
//     },
//     scales: {
//       xAxes: [{
//         gridLines: {
//           display: false
//         }
//       }],
//       yAxes: [{
//         gridLines: {
//           display: false
//         }
//       }]
//     }
//   }

//   // This will get the first returned node in the jQuery collection.
//   // eslint-disable-next-line no-unused-vars
//   var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
//     type: 'bar',
//     data: salesChartData,
//     options: salesChartOptions
//   });


//   // all dapartment
//   const data = {
//     labels: ['Elementary', 'Junior High', 'Senior High', 'College'],
//     datasets: [{
//       label: 'ALL',
//       data: [12, 19, 3, 5],
//       backgroundColor: [
//         '#8B96B4',
//         '#1266B4',
//         '#B7E4FD',
//         '#879BAE'
       
//       ],
//       hoverOffset: 10
//     }]
//   }

//   const config = {
//     type: 'pie',
//     data: data,
//     options: {
//       plugins: {
//         legend: {
//           display: true,
//           position: 'bottom',
//           color: 'black',
//         },
//         tooltip: {
//           enabled: true
//         }
//       }
//     }
//   };

//   const myChart = new Chart(
//     document.getElementById('myChart'),
//     config
//   );


  
// })
