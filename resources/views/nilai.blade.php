<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>nilai</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Halaman</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/nilai') }}">Nilai</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class = "container">
<h1>Daftar Nilai</h1>
<form action="nilai.blade.php" method="GET">
<table class="table">
    <thead class="black">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Basis data</th>
        <th scope="col">Jaringan komputer</th>
        <th scope="col">Praktikum Basis data</th>
        <th scope="col">hasil</th>
        <th scope="col">rata rata</th>
        <th scope="col">Aksi</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>doni</td>
      <td>
        <div class = "input1">
		<label ></label>  
		<input type="number" name="inp1">
		</div>
  </td>
      <td><div class = "input2">
		<label ></label>  
		<input type="number" name="inp2">
		</div>
  </td>
      <td><div class = "input3">
		<label ></label>  
		<input type="number" name="inp3">
		</div></td>
      <td></div>
		<div class ="submit">
		<input type="submit" name="hitung" >
		</div>
  </td>
      <td><a href="" class="badge-success"> </a>
      <td>
      <a href="" class="badge-success">Edit |</a>
      <a href="" class="badge-danger">Delete </a>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>dinda</td>
      <td>
        <div class = "input1">
		<label ></label>  
		<input type="number" name="inp1">
		</div>
  </td>
      <td><div class = "input2">
		<label ></label>  
		<input type="number" name="inp2">
		</div>
  </td>
      <td><div class = "input3">
		<label ></label>  
		<input type="number" name="inp3">
		</div></td>
      <td></div>
		<div class ="submit">
		<input type="submit" name="hitung" >
		</div>
  </td>
      <td><a href="" class="badge-success"> </a>
      <td>
      <a href="" class="badge-success">Edit |</a>
      <a href="" class="badge-danger">Delete </a>
      </td>
    </tr>
  </tbody>
</table>

<h2> Nilai Rata rata </h2>
<table class="table">
        <thead class="black">
            <tr>
                <th scope="col"> doni  </th>
                <th scope="col"> dinda  </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>

Basis data : <br>

<input type=”int” name=”inp1”><br>

 

jaringan komputer : <br>

<input type=”int” name=”inp2”><br>

 

praktikum basis data : <br>

<input type=”int” name=”inp3”><br>

 
<button>Submit</button>

</form>
<?php

 
if (isset($_GET['Hitung'])) {
    $$a = $_GET['inp1'];
    $b = $_GET['inp2'];
    $n = $_GET['inp3'];
    //Untuk Menghitung Rata-Rata
    $tot = $a+$b+$c;
    $rata = $tot / 3 ;

    //Untuk Menampilkan rata-rata
    echo " nilai rata rata id 1 adalah=$rata";
}
?>
        
                </td>
                <td>
 

Basis data  : <br>

<input type=”int” name=”inp1”><br>

 

jaringan komputer : <br>

<input type=”int” name=”inp2”><br>

 

praktikum basis data : <br>

<input type=”int” name=”inp3”><br>

 
<button>Submit</button>

</form>
<?php

 
if (isset($_GET['Hitung'])) {
    $$a = $_GET['inp1'];
    $b = $_GET['inp2'];
    $n = $_GET['inp3'];
    //Untuk Menghitung Rata-Rata
    $tot = $a+$b+$c;
    $rata = $tot / 3 ;

    //Untuk Menampilkan rata-rata
    echo " nilai rata rata id 1 adalah=$rata";
}
?>
                </td>
            </tr>
        </tbody>
</table>
<h3>Nilai Max dan Min</h3>
<table class="table">
        <thead class="black">
            <tr>
                <th scope="col">ID</th>
                <th scope="col"> max  </th>
                <th scope="col"> min  </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                    masukan id 1 : <br>

<input type=”int” name=”id1”><br>
<button>Submit</button>
                        <?php
                        /*echo "nilai max id 1="; echo  max(80,90,70);*/
                        ?>
                    </td>
                    <td>
                    masukan id 1 : <br>

<input type=”int” name=”id1”><br>
<button>Submit</button>
                        <?php
                        /*echo "   nilai min id 1=";echo min(80,90,70);*/
                        ?> 
                    </td>
                </tr>
        </tbody>
                    
        <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>
                    masukan id 2 : <br>

<input type=”int” name=”id2”><br>
<button>Submit</button>
                        <?php
                        /*echo "nilai max id 2="; echo  max(88,80,88);*/
                        ?> 
                    </td>
                    <td>
                    masukan id 2 : <br>

<input type=”int” name=”id2”><br>
<button>Submit</button>
                        <?php
                        /*echo "   nilai min id 2=";echo min(88,80,88);*/
                        ?>
                    </td>
                </tr>
        </tbody>
</table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    </form>
	</div>
	
  </body>
</html>