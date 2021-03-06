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

// mengubah data
function ubah($data){
    global $connect;
    
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = htmlspecialchars( $data["gambar"]);

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