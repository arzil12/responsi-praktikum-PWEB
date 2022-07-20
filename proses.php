<?php 

$tanggal= date("Y-m-d");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$status = $_POST['status'];
$kelamin = $_POST['kelamin'];


echo "<head><title>Daftar anggota komunitas</title>
</head>";
$fp = fopen("anggota.txt", "a+");
fputs($fp, "$tanggal| $nama|$alamat|$telp|$email|$status|$kelamin\n");
fclose($fp);

echo "<h2 align=center><b>PENGISIAN PENDAFTARAN BERHASIL</b></h2>";
 ?>
 <html>
    <head>
        <title>Daftar anggota komunitas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <style type="text/css">
            body {
    font: 100% lucida sans, Verdana;
    margin: 20px;
    line-height: 26px;
}

.container {
    xmin-width: 900px;
}

.wrapper {
    position: relative;
    overflow: auto;
}

#top, #sidebar, #bottom, .menuitem {
    border-radius: 4px;
    margin: 4px;
}

#top {
    background-color: #266cd4;
    color: #ffffff;
    padding: 15px;
}

#menubar {
    width: 200px;
    float: left
}

#main {
    padding: 10px;
    margin: 0 210px;
}

#sidebar {
    background-color: #ff8121;
    color: #ffffff;
    padding: 10px;
    width: 180px;
    bottom: 0;
    top: 0;
    right: 0;
    position: absolute;
}

#bottom {
    border: 1px solid #d4d4d4;
    background-color: #f1f1f1;
    text-align: center;
    padding: 10px;
    font-size: 70%;
    line-height: 14px;
}

#top h1, #top p, #menulist {
    margin: 0;
    padding: 0;
}

.menuitem {
    background-color: #04AA6D;
    border: 1px solid #d4d4d4;
    list-style-type: none;
    padding: 2px;
    cursor: pointer;
}

.menuitem:hover {
    background-color: #ffffff;
}

.menuitem:first-child {
   background-color:#04AA6D;
   color: white;
   font-weight:bold;
}

a {
    color: #000000;
    text-decoration: underline;
}

a:hover {
    text-decoration: none;
}


@media (max-width: 800px) {
    #sidebar {
        width: auto;
        position: relative;
    } 
    #main {
        margin-right: 0;
    }    
       
}

@media (max-width: 600px) {
    #menubar {
        width: auto;
        float: none;
    }
    #main {
        margin: 0;
    }    
}
        </style>
    </head>

    <body bgcolor="wheat">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php">Isi Form Pendaftaran</a></li>
            <li><a class="dropdown-item" href="lihat.php">Lihat Daftar Pendaftaran Anggota</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <h3 align="center">Komunitas Pecinta Ikan Louhan</h3>
        <p align="center"><img src="louhan.jpg"></p>
        <div class="container wrapper">
      <div id="top">
        <p align="left"></p>
      </div>
      <div class="wrapper">
       <div id="menubar">
         <ul id="menulist">
            <li class="menuitem" >Informasi Umum
         </ul>
        </div>
        <div id="main">
          <h1 align="center">Informasi Umum</h1><br>
          <p align="justify">Indonesia Louhan Lovers adalah sebuah komunitas pecinta louhan dimana disini merupakan tempat perkumpulan para pecinta ikan Louhan dimana disini menampung semua pecinta Louhan baik yang suka jenis kamfa f2 sampai ikan classic seperti kamfa classic.  </p><br>

          <p align="justify">Hal yang dibahas dalam komunitas ini, antara lain :<br><br>
            <ul>
            <li>Disini membahas cara merawat louhan dari burayak sampai ukuran dewasa baik dengan tips .</li><br>
            <li>Membahas jenis-jenis louhan agar para pemula bisa memilih jenis louhan apa yang cocok untuk dirawat mereka.</li><br>
            <li>Membahas cara merawat air yang benar.</li><br>
            <li>Memberi informasi harga louhan secara update.</li><br>
            <li>Membahas pakan-pakan yang baik untuk louhan dan efeknya masing-masing.</li><br></ul></p>
            
            <p align="justify">Itulah beberapa hal yang dibahas dalam komunitas ini.<br><br>
            
       </div>
        <div id="sidebar">
          <h3>Kontak</h3>
          <p>No.hp Admin:</p>
          <ol >
            <li>Imam Suryadi:
                <p>a.Telp: 0854-3945-2198</p>
                <p>b.Email: imam@gmail.com</p>
            </li>
            <li>Antoni Yoseph:
                <p>a.Telp: 0854-5645-2198</p>
                <p>b.Email: yspoh@gmail.com</p>
            </li>
            <li>Ahmad Ansori:
                <p>a.Telp: 0854-6512-7623</p>
                <p>b.Email: gerom@gmail.com</p>
            </li>
          </ol>
        </div>
      </div>  
      
      
      <div id="bottom" align="center">
        Komunitas Kite<br>

        (ILL- Indonesian Louhan Lovers)<br>

        Jl. Dr. Sutomo 6-8 Jakarta 10710 Indonesia, Telp (62-21) 3841195, 3842508, 3810291, Faks (62-21) 3857046, Mailbox : ill@gmail.com<br>

        Untuk tampilan terbaik Anda dapat gunakan berbagai jenis browser kecuali IE, Mozilla Firefox 3-, and Safari 3.2- dengan lebar minimum browser beresolusi 275 pixel.<br>

        Hak Cipta © 2022 Indonesia Louhan Lovers<br>

        Semua Hak Dilindungi<br>
      </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>