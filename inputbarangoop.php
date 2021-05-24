<!Doctype html>
<html>
 <head>
  <title>Form Tabel Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 <h2>Form Tabel Barang</h2>
  <form method="post">
   <label>Kode Barang</label>
   <input type="text" name="kodebarang"><br>
   <label>Nama Barang</label>
   <input type="text" name="namabarang"><br>
   <label>Jumlah Stok</label>
   <input type="number" name="jumlah"><br>
   <label>Satuan</label>
   <input type="text" name="satuan"></br>
   <label>Harga Satuan</label>
   <input type="number" name="hargasatuan"></br>
   <label>Tanggal Beli</label>
   <input type="date" name="tanggalbeli" value="<?php echo date('Y-m-d');?>"><br>
   <label>Pilih jenis pembelian</label>
   <select name="jenispembelian">
    <option value="tunai">Tunai</option>
	<option value="kredit">Kredit</option>
   </select><br>
   <label>Keterangan</label>
   <textarea name="keterangan"></textarea><br>
   <input type="submit" name="bSimpan" value="Simpan Rekord Barang Baru">
  </form>
 </body>
</html>
<?php 
 if (isset($_POST['bSimpan'])) {
	 $kodebarang=$_POST['kodebarang'];
	 $namabarang=$_POST['namabarang'];
	 $jumlah=$_POST['jumlah'];
	 $satuan=$_POST['satuan'];
	 $hargasatuan=$_POST['hargasatuan'];
	 $tanggalbeli=$_POST['tanggalbeli'];
	 $jenispembelian=$_POST['jenispembelian'];
	 $keterangan=$_POST['keterangan'];
	 $konek=new mysqli("localhost","root","","tokoemakambo");
	 $sql="INSERT INTO `barang` (`kodebarang`, `namabarang`, `jumlahstok`, `satuan`, `hargasatuan`, `tanggalbeli`, `jenispembelian`, `keterangan`) VALUES ('".$kodebarang."', '".$namabarang."', '".$jumlah."', '".$satuan."', '".$hargasatuan."', '".$tanggalbeli."', '".$jenispembelian."', '".$keterangan."');";
	 $q=$konek->query($sql);
	 if ($q) {
		 echo "Rekord sudah tersimpan !";
	 } else {
		 echo "Rekord gagal tersimpan !";
	 }
 }
?>