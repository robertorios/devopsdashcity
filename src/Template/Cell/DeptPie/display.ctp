<?php
/**
  * @var \App\View\AppView $this
  */

// return debug($result);
//       die;
?>


<div style="text-align:center; width: 100%; float: left; padding: 5px 40px 5px 40px;">
<canvas id="myPieChart"></canvas>
</div


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
<script>
var depts = <?php echo json_encode($result); ?>;
var ctx = document.getElementById("myPieChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Apps", "Network", "Systems"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6"
      ],
      data: [depts['apps'], depts['network'], depts['systems']]
    }]
  }
});
</script>

