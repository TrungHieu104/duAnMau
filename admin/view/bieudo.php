<div class="main" style="display: flex;">
  <h2>Biểu đồ</h2>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  <div id="myChart" style="width:100%; max-width:600px; height:500px;">
  </div>

  <script>
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng sản phẩm'],
        <?php
        $tongdm = count($listthongke);
        $i = 1;
        foreach ($listthongke as $tke) {
          if ($i == $tongdm) $dauphay = "";
          else $dauphay = ",";
          echo "['" . $tke['tendm'] . "'," . $tke['countsp'] . "]" . $dauphay;
          $i += 1;
        }
        ?>
      ]);

      var options = {
        title: 'Thống kê sản phẩm theo danh mục:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('myChart'));
      chart.draw(data, options);
    }
  </script>




  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <body>
    <div id="Chart" style="width:100%; max-width:600px; height:500px;"></div>

    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(draw);

      function draw() {
        var data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Giá trung bình'],
          <?php
          $tongdm = count($listthongke);
          $i = 1;
          foreach ($listthongke as $tke) {
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $tke['tendm'] . "'," . $tke['avgprice'] . "]" . $dauphay;
            $i += 1;
          }
          ?>
        ]);

        var options = {
          title: 'Thống kê giá trung bình theo danh mục'
        };

        var chart = new google.visualization.BarChart(document.getElementById('Chart'));
        chart.draw(data, options);
      }
    </script>
</div>