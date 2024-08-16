
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Rumah Sakit', 'Puskesmas', 'Klinik', 'Labkes', 'PM Dokter Umum', 'PM Dokter Spesialis', 'Unit Transfusi Darah'],
        datasets: [{
            label: 'Jumlah Faskes',
            data: [
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit " );
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarmasin'");
                }
                $resF = $qry->num_rows;
                echo $resF;
                ?>,
                
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarmasin'");
                }
                $resF = $qry->num_rows;
                echo $resF;
                
                ?>,
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarmasin'");
                }
                $resF = $qry->num_rows;
                echo $resF;
                
                ?>,
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_labkes WHERE kabkota = 'Kota Banjarmasin'");
                }
                
                $resF = $qry->num_rows;
                echo $resF;
                ?>,
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrumum WHERE kabkota = 'Kota Banjarmasin'");
                }
                
                $resF = $qry->num_rows;
                echo $resF;
                ?>,
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarmasin'");
                }
                
                $resF = $qry->num_rows;
                echo $resF;
                ?>,
                <?php
                if ($id_role == 2) {
                    $qry = $koneksi->query("SELECT * FROM data_utd");
                }
                elseif ($id_role == 3) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Balangan'");
                }
                elseif ($id_role == 4) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Banjar'");
                }
                elseif ($id_role == 5) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Barito Kuala'");
                }
                elseif ($id_role == 6) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                }
                elseif ($id_role == 7) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                }
                elseif ($id_role == 8) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                }
                elseif ($id_role == 9) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Kotabaru'");
                }
                elseif ($id_role == 10) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tabalong'");
                }
                elseif ($id_role == 11) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                }
                elseif ($id_role == 12) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tanah Laut'");
                }
                elseif ($id_role == 13) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tapin'");
                }
                elseif ($id_role == 14) {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kota Banjarbaru'");
                }
                else {
                    $qry = $koneksi->query("SELECT * FROM data_utd WHERE kabkota = 'Kota Banjarmasin'");
                }
                
                $resF = $qry->num_rows;
                echo $resF;
                ?>
            ],
            backgroundColor: [
                'rgba(255, 0, 0, 0.2)',
                'rgba(0, 0, 255, 0.2)',
                'rgba(255, 255, 0, 0.2)',
                'rgba(0, 255, 0, 0.2)',
                'rgba(255, 165, 0, 0.2)',
                'rgba(128, 0, 128, 0.2)',
                'rgba(139, 69, 19, 0.2)'
            ],
            borderColor: [
                'rgba(255, 0, 0, 1)',
                'rgba(0, 0, 255, 1)',
                'rgba(255, 255, 0, 1)',
                'rgba(0, 255, 0, 1)',
                'rgba(255, 165, 0, 1)',
                'rgba(128, 0, 128, 1)',
                'rgba(139, 69, 19, 1)'
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