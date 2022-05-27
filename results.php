<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Ballots</title>
    <link rel="stylesheet" href="results.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
  <div class="navcontainer">
    <div class="navrow align-items-center justify-content-between">
      <div class="navlogo">
        <a href="#">E-Ballots</a>
      </div>
      <input type="checkbox" id="nav-check">
      <label for="nav-check" class="nav-toggler">
        <span></span>
      </label>
      <nav class="nav">
        <ul>
          <li><a href="mainpage.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="https://timesofindia.indiatimes.com/elections" target=”_blank”>News</a></li>
          <li><a href="reachUs.php">Reach Us</a></li>
          <li><a href="agenda.php">Party Agenda</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
</header>
<main class="con7" style="width: 1200px;">
  <div class="con6" id="bar-chart"></div>
	</main>
  <div class="con1"><b style="color: whitesmoke;">The Bar Graph presents categorical data with rectangular bars with heights or lengths proportional to the values that they represent. The vertical axis displays the
    number of votes each party received and the horizontal axis plot contains information about the political parties involved. This Bar Graph conveys the number of votes the 
    each party got in the previous year and compared to it, it also displays the present count of the votes. Legend differentiates the votes casted in the present and previous 
    year accordingly.</b></div>
    <div class="obj">
      <ul style="color: whitesmoke;">
        <li><b>" AAM - Aam Aadmi Party</b></li>
        <li><b>&nbsp;&nbsp;INC - Indian National Congress</b></li>
        <li><b>&nbsp;&nbsp;SP  - Samajwadi Party</b></li>
        <li><b>&nbsp;&nbsp;BJP - Bhartiya Janata Dal<b></li>
        <li><b>&nbsp;&nbsp;JDU - Janta Dal United</b></li>
        <li><b>&nbsp;&nbsp;BSU - Bahujan Samaj Party "</b></li>
      </ul>
    </div>
  </div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="main.js"></script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {
  var barData = google.visualization.arrayToDataTable([
    ['Party', 'Present Year', 'Past Year'],
    ['AAM',  c1, 151],
    ['INC',  c2, 179],
    ['SP',   c3,  55],
    ['BJP',  c4,  163],
    ['JDU',  c5, 133],
    ['BSP',  c6, 110],
  ]);
  // set bar chart options
  var barOptions = {
    focusTarget: 'category',
    backgroundColor: 'transparent',
    colors: ['black', 'grey'],
    fontName: 'Open Sans',
    chartArea: {
      left:50,
      top: 50,
      width: '100%',
      height: '70%'
    },
    bar: {
      groupWidth: '50%'
    },
    hAxis: {
      textStyle: {
        fontSize: 16
      }
    },
    vAxis: {
      minValue: 0,
      maxValue: 250,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 10
      },
      textStyle: {
        fontSize: 14
      }
    },
    legend: {
      position: 'bottom',
      textStyle: {
        fontSize: 14
      }
    },
    animation: {
      duration: 3000,
      easing: 'out',
			startup: true
    }
  };
  // draw bar chart twice so it animates
  var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
  //barChart.draw(barZeroData, barOptions);
  barChart.draw(barData, barOptions);
  // BEGIN PIE CHART
  
  // pie chart data
  google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Party', 'Votes'],
          ['AAM',    c1],
          ['INC',    c2],
          ['SP',     c3],
          ['BJP',    c4],
          ['JDU',    c5],
          ['BSP',    c6]
        ]);

        var options = {
          focusTarget: 'category',
          fontName: 'Times New Roman',
          title: 'Polling Results',
          colors: ['black','grey','brown','#0099C6','#FF9900','#329262'],
          chartArea: {
            width: '100%',
            height: '70%',
            left: 200,
            top: 85
          },
          is3D: true,
          legend: {
            textStyle: {
              fontSize: 16
            }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  //BEGIN LINE GRAPH
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'AAM',   'INC',    'SP',   'BJP',    'JDU',    'BSP'],
      ['2012',  177,      245,     55,     156,      121,      97  ],
      ['2013',  112,      77 ,     59,     114,      125,      88  ],
      ['2014',  301,      213,     66,     143,      133,      103 ],
      ['2015',  121,      342,     51,     178,      101,      133 ],
      ['2016',  111,       89,     98,     199,      91,       117 ],
      ['2017',  103,      139,     87,     231,      97,       141 ],
      ['2018',  149,      148,     79,     111,      110,      127 ],
      ['2019',  187,      166,     71,     87,       152,      113 ],
      ['2020',  95,       173,     76,     91,       149,      155 ],
      ['2021',  256,       99,     58,     185,      135,      119 ],
      ['2022',  c1,        c2,     c3,     c4,       c5,       c6  ]
    ]);

    var options = {
      chartArea: {
        width: '80%'
      },
      colors: ['black','grey','brown','#0099C6','#FF9900','#329262'],
      fontName: 'Times New Roman',
      fontSize: '16',
      title: 'Polling Results',
      curveType: 'function',
      hAxis: {
        textStyle: {
          fontSize: 16
        }
      },
      vAxis: {
        textStyle: {
          fontSize: 16
        }
      },
      legend: { position: 'bottom',
       textStyle: {
         fontSize:16
       } },
       animation: {
      duration: 7000,
      easing: 'out',
			startup: true
    }
    };
    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
  }
</script>
<div class ="con4" id="curve_chart" style="width: 1200px;height:600px;"></div>
<div class="con2"><b style="color:whitesmoke;">The line graph, also known as a line plot or a line chart uses lines to connect individual data points and it displays quantitative values 
  over a specified time interval. The Vertical axis consists of the number of votes each political party received in the consecutive years till the present year and the 
horizontal axis plot consists of the count of years for 10 past years till the present year that is from 2012-2022. The Legend describes each of the unique line and line color
associated woth each specific political party.</b></div>
<div class="con5" id="piechart_3d" style="width: 900px; height: 500px;"></div>
<div class ="con3 div2"><b style="color:whitesmoke">The pie chart which is a circular statistical graphic,is divided into slices to illustrate numerical proportion. In the ie chart, the 
  arc length of each slice is proportional to the quantity it represents. Each slice represents the percentage of votes received by each party and is differentiated using 
the multiple colors. The Legend is important as it displays all the unique colors associated with the respective political parties.</b></div>
<div class="last">
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>E-Ballots</h4>
          <ul>
            <li><a href="#" style="width: 37%;">About Us</a></li>
            <li><a href="#" style="width: 50%;">Our Services</a></li>
            <li><a href="#" style="width: 30%;">Copyright</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#" style="width: 20%;">FAQ</a></li>
            <li><a href="#" style="width: 20%;">Rules</a></li>
            <li><a href="#" style="width: 30%;">Feedback</a></li>
            <li><a href="#" style="width: 54%;">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Facilities</h4>
          <ul>
            <li><a href="#" style="width: 55%;">Party Agenda</a></li>
            <li><a href="#" style="width: 20%;">Results</a></li>
            <li><a href="#" style="width: 20%;">News</a></li>
            <li><a href="#" style="width: 100%;">Create your own website</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#"><i class=" fab fa-facebook-f"></i></a>
            <a href="#"><i class=" fab fa-twitter"></i></a>
            <a href="#"><i class=" fab fa-instagram"></i></a>
            <a href="#"><i class=" fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<div class="secondlast">
  <p>Copyright &copy;2022 &nbsp;e_Ballots. Designed by Team Shinigami.&nbsp;&nbsp;&nbsp;<em>All Rights Reserved!!</em></p>
</div>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
ScrollReveal({ 
  reset: true,
  distance: '80px',
  duration: 2500,
  delay: 400
});

ScrollReveal().reveal('.con1', { delay: 100, origin: 'bottom' });
ScrollReveal().reveal('.con2', { delay: 120, origin: 'bottom' });
ScrollReveal().reveal('.con3', { delay: 120, origin: 'bottom' });
ScrollReveal().reveal('.obj', { delay: 120, origin: 'right' });
ScrollReveal().reveal('.con4', { delay: 150, origin: 'left' });
ScrollReveal().reveal('.con5', { delay: 100, origin: 'left' });
ScrollReveal().reveal('.con7', { delay: 80, origin: 'left' });
ScrollReveal().reveal('.header', { delay: 80, origin: 'top' });
</script>
</body>
</html>
