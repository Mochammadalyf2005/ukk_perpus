<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan=$id");
?>
<script>
    alert('Hapus ulasan berhasil');
    location.href = "index.php?page=ulasan";
</script>