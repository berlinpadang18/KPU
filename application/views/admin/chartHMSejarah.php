<?php
//BEMFST
$dataPoints15 = array();
$himpunann15 = $this->db->get_where('calon', ['prodiketua' => 'Sejarah', 'organisasi' => 'HM'])->result();

foreach ($himpunann15 as $row) {
    array_push($dataPoints15, array("label" => ($row->ketua . ' - ' . $row->wakil), "y" => $row->hasil));
}
?>

<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("Kahim", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Pemilihan Calon Ketua Himpunan Sastra Sejarah"
            },
            axisY:{
       interval: 50,
       includeZero: true
     },
            data: [{
                    type: "column", //change type to bar, line, area, pie, etc  
                    yValueFormatString: "#,###",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints15, JSON_NUMERIC_CHECK); ?>
                }]
        });
        chart.render();
    }
</script>


<!-- Begin Page Content -->




    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
    <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="content">
            <div id="Kahim"></div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->