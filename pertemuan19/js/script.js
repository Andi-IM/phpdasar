// ambil elemen2 yang dibutuhkan
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');

// actions
// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
    // console.log(keyword.value);
    // alert('Halo sayang');

    // membuat object ajax
    let ajax = new XMLHttpRequest();

    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            container.innerHTML = ajax.responseText;
        }
    }

    // EXECUTION
    ajax.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    ajax.send(); 
});