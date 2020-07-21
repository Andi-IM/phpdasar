<?php 
// koneksi ke database
$connect = mysqli_connect("localhost","root",null,"phpdasar");

// kueri mendapatkan data
function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data dari tiap elemen dalam form
function tambah($data){
    global $connect;
    
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars( $data["jurusan"]);
    
    // upload gambar
    $gambar = upload();
    if (!$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES
              (null,'$nim','$nama','$email','$jurusan','$gambar')
              ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// upload gambar func
function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar diupload
    if ( $error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>"; 
              return false;
    }

    // cek apakah diupload adalah gambar
    $ekstensiGambarValid=['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) 
    {
        echo "<script>
                alert('Anda tidak mengupload Gambar!');
              </script>"; 
              return false;
    }

    // cek jika ukuran terlalu besar
    if( $ukuranfile > 1000000) {
        echo "<script>
                alert('Ukuran Gambar lebih besar dari 1MiB !');
              </script>"; 
              return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru untuk mencegah duplikasi
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'img/' . $namaFileBaru);
    return $namaFileBaru;
}

// hapus data
function hapus($id){
    global $connect;
    mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($connect);
}

// mengubah data
function ubah($data){
    global $connect;
    
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambarLama = $data["gambarLama"];

    // cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    
    // query insert data
    $query = "UPDATE mahasiswa SET
              nim = '$nim',
              nama = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
              WHERE id = '$id'
              ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// fungsi mencari nilai
function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
              WHERE 
              nama LIKE '%$keyword%' OR
              nim LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'
             ";
    return query($query);         
}
?>