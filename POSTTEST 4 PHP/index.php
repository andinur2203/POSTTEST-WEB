<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayaran Nasional Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div>
        <div class="header">
            <img src="https://www.pelni.co.id/cfind/source/images/website-setting/logo-new.png"/>
        </div>
        <!-- Navigation Bar -->
        <div class="nav">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="about_me.html">ABOUT ME</a></li>
                <li><a href='#reservasi_tiket'>RESERVASI TIKET</a></li>
                <button onclick="dark_mode()">DARK MODE</button>
                <script>
                const buttondark = document.getElementById("Dark/Light Mode Akan Diaktifkan");
                buttondark.addEventListener("click", function(){
                });
                function dark_mode(){
                    var element = document.body;
                    element.classList.toggle("dark-mode");
                    alert("Dark/Light Mode Akan Diaktifkan");                
                }
                </script>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main content">
            <h1><img src="https://www.pelni.co.id/cfind/source/thumb/images/ticket-reservation/cover_w1920_h380_tw1920_th380_x10_y10_web.jpg" width="100%"/></h1>
            <br><br>
            <form action="tampil.php" method="post">
            <table>
            <div class="kotak">
                <br>
                <p align="center" id="pemesan">Data Pemesan</p><br>
                <script>
                    const pemesan = document.getElementById('pemesan');
                    pemesan.style.color = 'blue';
                </script>
                <div id="reservasi_tiket" class="kotak_pemesan">
                    <label for=""></label>
                    Nama Lengkap : <br><input type="text" name="nama" placeholder="Nama lengkap..."><br><br>
                    Email        : <br><input type="email" name="email" placeholder="Email..." required> <br><br>
                    Password     : <br><input type="password" name="password" placeholder="Password..." required> <br><br>
                </div>
                <br><br>

                <p align="center" id="tujuan">Tujuan Perjalanan</p><br>
                <script>
                    const tujuan = document.getElementById('tujuan');
                    tujuan.style.color = 'blue';
                </script>
                <div class="kotak_dari">
                    <label for="">Dari</label>
                    <select name="dari" id="">
                        <option value="PARE-PARE">PARE-PARE, SULAWESI SELATAN | PARE-PARE</option>
                        <option value="SURABAYA">SURABAYA, JAWA TIMUR | TANJUNG PERAK</option>
                        <option value="TARAKAN" > KALIMANTAN TIMUR | NUNUKAN</option>
                        <option value="NUNUKAN" > KALIMANTAN TIMUR | TARAKAN</option>
                        <option value="BALIKPAPAN" > BALIKPAPAN, KALIMANTAN TIMUR | SEMAYANG</option>
                    </select>
                </div>
                <br><br>
                <div class="kotak_ke">
                    <label for="">Ke</label>
                    <select name="ke" id="">
                        <option value="PARE-PARE">PARE-PARE, SULAWESI SELATAN | PARE-PARE</option>
                        <option value="SURABAYA">SURABAYA, JAWA TIMUR | TANJUNG PERAK</option>
                        <option value="TARAKAN" > KALIMANTAN TIMUR | NUNUKAN</option>
                        <option value="NUNUKAN" > KALIMANTAN TIMUR | TARAKAN</option>
                        <option value="BALIKPAPAN" >BALIKPAPAN, KALIMANTAN TIMUR | SEMAYANG</option>
                    </select>
                </div><br>
                
                <p align="center" id="usia">Usia</p><br>
                <script>
                    const usia = document.getElementById('usia');
                    usia.style.color = 'blue';
                </script>
                <div class="kotak_usia">
                    <label for=""></label>
                    Dewasa : <br><input type="number" name="usia_dewasa" value="Dewasa" min="0"> <br><br>
                    Bayi   : <br><input type="number" name="usia_bayi" value="Bayi  " min="0"> <br><br>
                </div>
                <br>

                <p align="center" id="jadwal">Jadwal Pelayaran</p><br>
                <script>
                    const jadwal = document.getElementById('jadwal');
                    jadwal.style.color = 'blue';
                </script>
                <div class="kotak_keberangkatan">
                    <p>Keberangkatan</p>
                    <input type="date" name="waktu"><br><br>
                </div>
                <br>

                <p align="center" id="kelas">Kelas Kapal</p><br>
                <script>
                    const kelas = document.getElementById('kelas');
                    kelas.style.color = 'blue';
                </script>
                <div class="kotak_kelas">
                <p>Kelas Kapal</p>
                    <input type="text"><br><br>
                </div>

                <br><br>
                <div class="button">
                    <input type="submit" name="submit" class="submit" value="KIRIM" />
                </div>
            </div>
            <br><br>
            </table>
            </form>
            <!-- Footer -->
            <div class="footer">
                <p align="center" id="footer">Copyright ©2019 PT. Pelayaran Nasional Indonesia. All rights reserved.</p>
                <script>
                    const footer = document.getElementById('footer');
                    footer.style.color = 'yellow';
                </script>
            </div>
</body>
</html>