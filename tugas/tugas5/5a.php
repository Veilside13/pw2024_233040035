<?php 
$student = [
  
            ["nama" => "Bonting",
              "npm" => "233040001",
              "email" => "bonting@gmail.com ",
              "jurusan" => "Barista Kukirs",  
              "gambar" => "1"         
            ],
            ["nama" => "Bongpeng Baud",
              "npm" => "233040029",
              "email" => "bandoy@gmail.com ",
              "jurusan" => "Kedokteran",
              "gambar" => "2"
            ],
            ["nama" => "adzra gedutt",
              "npm" => "233040035",
              "email" => "salmagedut@gmail.com ",
              "jurusan" => "Tukang tidur",  
              "gambar" => "3"           
            ],
            ["nama" => "Anyun gaming",
              "npm" => "233040017",
              "email" => "bongeh123@gmail.com ",
              "jurusan" => "Arsitek",
              "gambar" => "4"
            ],
            ["nama" => "Westut otat",
              "npm" => "233040036",
              "email" => "tatokudidada@gmail.com ",
              "jurusan" => "Teknik Sipil",
              "gambar" => "5"
            ],
            ["nama" => "Jek Gendut",
              "npm" => "233040006",
              "email" => "jektompel@gmail.com ",
              "jurusan" => "Teknik Informatika",
              "gambar" => "6"
            ],
            ["nama" => "Dolskuy",
              "npm" => "233040009",
              "email" => "mekanikpesawat@gmail.com ",
              "jurusan" => "Teknik Mesin",
              "gambar" => "7"
            ],
            ["nama" => "danil nhi",
              "npm" => "233040105",
              "email" => "grandmercure123@gmail.com ",
              "jurusan" => "Perhotelan",
              "gambar" => "8"
            ],
             ["nama" => "awad lingkungan",
              "npm" => "233040125",
              "email" => "tlneverdie@gmail.com ",
              "jurusan" => "Teknik Lingkungan",
              "gambar" => "9"
            ],
            ["nama" => "Budi Unpar",
              "npm" => "233040002",
              "email" => "hukumsaya@gmail.com ",
              "jurusan" => "Hukum",
              "gambar" => "10"
            ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    @font-face {
        font-family: "Rubik";
    }
    
    .container {
        
        width: 500px;
        height: 2500px;
        background-color: Blue;
        padding: 5px;
        border: 2px solid black;
    }

    h1 {
        font-family: "Rubik";
    }
  </style>  
</head>
<body> 
    <div class="container"> 
        <h1>Daftar Mahasiswa</h1>
            <?php foreach ($student as $students) : ?>
                <ul>
                    <img src="https://randomuser.me/api/portraits/men/<?= $students['gambar'] ?>.jpg" width="150" height="150">
                    <li>Nama : <?= $students["nama"]; ?></li>
                    <li>NPM : <?= $students["npm"]; ?></li>
                    <li>Email : <?= $students["email"]; ?></li>
                    <li>Jurusan : <?= $students["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</body>
</html> 