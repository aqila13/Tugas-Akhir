<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    echo "
    		<script>
                alert('Anda tidak terdeteksi terkena covid-19
                        tetap jaga kesehatan dan patuhi perintah dari pemerintah #dirumahaja');
    			document.location.href='Home.php';
    		</script>
    	";

}

?>
<?php
    include '../aset/header.php';
?>
<br>
<br>
<br>
<br>
<center>
<h3>Anda tidak terdeteksi terkena covid-19 tetap jaga kesehatan,
<br>perbanyak konsumsi vitamin dan patuhi perintah dari pemerintah #dirumahaja</h3>

<?php
    include '../aset/footer.php';
?>