<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAUFIK</title>
    <style>
    body{
        background-image:  linear-gradient(to right,black,orange,black);;
    }
        
table{
  border: 2px solid black;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  border: none;
  outline:5px solid black;
  border-radius: 10px;
  background:  linear-gradient(to right,red,white);
  width: 150px;

}

td {
    width: 50px;
    padding: 10px;
}

tr {
    width: 50px;
    padding: 10px;
}

input[type="number"] {
width: 95%;
padding: 5px;
border: 2px solid black;
border-radius: 30px;
text-align: justify;
box-shadow: inset;
font-size: large;
}

input[type="submit"] {
width: 90%;
padding: 20px 40px;
background-color: black;
color: white;
border: none;
border-radius: 20px;
cursor: pointer;
margin-bottom: 10px;
font-size: large;
font-weight: bold;
}


input[type="reset"]{
width: 100%;
padding: 20px 30px;
background-color: black;
color: white;
border: none;
border-radius: 20px;
cursor: pointer;
margin-bottom: 10px;
font-size: large;
font-weight: bold;
}



.hasil {
    font-size: large;
    font-weight: bold;

}

</style>
</head>
<body>
    <br>
    <br>
    <br>
    <h1><center><font color="white">KALKULATOR SEDERHANA</font></center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
            @csrf
            <br>
            <table border="1" heigth="300">
                <tr>
                    <td colspan="2"><center>Input Angka Pertama</center><input type="number" name="a" id=""></td>
                    <td colspan="2" rowsspan="2"><input type="reset"></td>
                </tr>
                <tr>
                    <td colspan="2"><center>Input Angka Kedua</center><input type="number" name="b" id=""></td>
                </tr>
                <tr>
                    <td colspan="4" class="hasil"><center>HASIL : {{$hasil}}</center></td>
                </tr>
                <tr>
                    <td><input type="submit" value="+" name="op"></td>
                    <td><input type="submit" value="-" name="op"></td>
                    <td><input type="submit" value="x" name="op"></td>
                    <td><input type="submit" value="/" name="op"></td>
                </tr>
                <tr>
                    <td colspan="4"><center>
                        NAMA        : TAUFIK QURRAHMAN
                        <br> 
                        KELAS  : XII
                    </center></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>