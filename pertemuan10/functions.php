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
    $gambar = htmlspecialchars( $data["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES
              (null,'$nim','$nama','$email','$jurusan','$gambar')
              ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// hapus data
function hapus($id){
    global $connect;
    mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($connect);
}
?>