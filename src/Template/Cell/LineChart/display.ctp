<?php
/**
  * @var \App\View\AppView $this
  */

// return debug($result);
//       die;
?>

<body onload="hideshow()">
<select id="ChartType" onChange="hideshow()">
 <option value="lsixmonths">Last Three Months</option>
 <option value="lthirtydays">Last Thirty Days</option>
 <option value="lfivedays">Last Ten days</option>
 <option value="datatable">Data Table</option>
</select>
<canvas id="myChart"></canvas>
<!-- <canvas id="myChart" width="20px" height="20px"></canvas> -->
<div id="showMe"  style="display: none;">
<table>
  <tr>
    <th></th>
    <th>90 Days</th>
    <th>30 Days</th>
    <th>10 Days</th>
  </tr>
  <tr>
    <td>All</td>
    <td><?= h(array_sum(array_values($result[0][0]))) ?></td>
    <td><?= h(array_sum(array_values($result[1][0]))) ?></td>
    <td></td>
  </tr>
  <tr>
    <td>Resolved</td>
    <td><?= h(array_sum(array_values($result[0][1]))) ?></td>
    <td><?= h(array_sum(array_values($result[1][1]))) ?></td>
    <td></td>
  </tr>
  <tr>
    <td>Open</td>
    <td><?= h($result[0][2]) ?></td>
    <td><?= h($result[1][2]) ?></td>
    <td></td>
  </tr>
</table>



</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
<script>
function hideshow()
{
    var keys90_all = <?php echo json_encode(array_keys($result[0][0])); ?>;
    var values90_all = <?php echo json_encode(array_values($result[0][0])); ?>;
    var values90_resolved = <?php echo json_encode(array_values($result[0][1])); ?>;

    var keys30_all = <?php echo json_encode(array_keys($result[1][0])); ?>;
    var values30_all = <?php echo json_encode(array_values($result[1][0])); ?>;
    var values30_resolved = <?php echo json_encode(array_values($result[1][1])); ?>;
    // alert(JSON.stringify(keys30_all));

    var ctx = document.getElementById("myChart");
    var dropdown= document.getElementById('ChartType');
    var hiddenDiv = document.getElementById("showMe");

    if( dropdown.options[dropdown.selectedIndex].text=="Last Three Months")
    {
        ctx.style.display = (this.value == "") ? "none":"block";
        hiddenDiv.style.display = "none";
        var myLineChart = Chart.Line(ctx, {
            data: {
            	labels : [keys90_all[0], keys90_all[1], keys90_all[2], keys90_all[3]],
                // labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "All Tickets",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [values90_all[0], values90_all[1], values90_all[2], values90_all[3]],
                        spanGaps: false,
                    },
                    {
                    	label: "Resolved Tickets",
                    	fill: false,
                    	borderColor: "rgba(805,192,122,1)",
                    	data: [values90_resolved[0], values90_resolved[1], values90_resolved[2], values90_resolved[3]],
                    },
                    {
                        label: "Open Tickets",
                        fill: false,
                        borderColor: "rgba(935,100,100,1)",
                        data: [values90_all[0]-values90_resolved[0], values90_all[1]-values90_resolved[1], values90_all[2]-values90_resolved[2], values90_all[3]-values90_resolved[3]],
                    }
                ]
            }

        });
    };
    if( dropdown.options[dropdown.selectedIndex].text=="Last Thirty Days")
    {
        ctx.style.display = (this.value == "") ? "none":"block";
        hiddenDiv.style.display = "none";
        var myLineChart = Chart.Line(ctx, {
            data: {
                labels : [keys30_all[0], keys30_all[1]],
                // labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "All Tickets",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [values30_all[0], values30_all[1]],
                        spanGaps: false,
                    },
                    {
                        label: "Resolved Tickets",
                        fill: false,
                        borderColor: "rgba(805,192,122,1)",
                        data: [values30_resolved[0], values30_resolved[1]],
                    },
                    {
                        label: "Resolved Tickets",
                        fill: false,
                        borderColor: "rgba(805,192,122,1)",
                        data: [values30_all[0]-values30_resolved[0], values30_all[1]-values30_resolved[1]],
                    }
                ]
            }

        });
    };
    // if( dropdown.options[dropdown.selectedIndex].text=="Last Ten Days")
    // {
    //     ctx.style.display = (this.value == "") ? "none":"block";
    //     var myLineChart = Chart.Line(ctx, {
    //         data: {
    //             labels : [keys10_all[0], keys10_all[1], keys10_all[2], keys10_all[3], keys10_all[4], keys10_all[5], keys10_all[6], keys10_all[7], keys10_all[8], keys10_all[9]],
    //             // labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [
    //                 {
    //                     label: "All Tickets",
    //                     fill: false,
    //                     lineTension: 0.1,
    //                     backgroundColor: "rgba(75,192,192,0.4)",
    //                     borderColor: "rgba(75,192,192,1)",
    //                     borderCapStyle: 'butt',
    //                     borderDash: [],
    //                     borderDashOffset: 0.0,
    //                     borderJoinStyle: 'miter',
    //                     pointBorderColor: "rgba(75,192,192,1)",
    //                     pointBackgroundColor: "#fff",
    //                     pointBorderWidth: 1,
    //                     pointHoverRadius: 5,
    //                     pointHoverBackgroundColor: "rgba(75,192,192,1)",
    //                     pointHoverBorderColor: "rgba(220,220,220,1)",
    //                     pointHoverBorderWidth: 2,
    //                     pointRadius: 1,
    //                     pointHitRadius: 10,
    //                     data: [values10_all[0], values10_all[1], values10_all[2], values10_all[3], values10_all[4], values10_all[5], values10_all[6], values10_all[7], values10_all[8], values10_all[9], ],
    //                     spanGaps: false,
    //                 },
    //                 {
    //                     label: "Resolved Tickets",
    //                     fill: false,
    //                     borderColor: "rgba(805,192,122,1)",
    //                     data: [values30_resolved[0], values30_resolved[1]],
    //                 }
    //             ]
    //         }

    //     });
    // };
    if( dropdown.options[dropdown.selectedIndex].text=="Data Table")
    {
        
        hiddenDiv.style.display = (this.value == "") ? "none":"block";
        ctx.style.display = "none";
    };
}
</script>
