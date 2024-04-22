<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator java</title>
    <style>
      body {
  background: linear-gradient( #E2BFB3, #F7DED0, #FEECE2, #FFBE98);}
  /* Ganti warna sesuai keinginan Anda dan sesuaikan arah gradasi */
        .calculator {
    padding: 10px;
    border-radius: 1em;
    height: 380px;
    width: 400px;
    margin: auto;
    background-color: #FFBE98;
    box-shadow: rgba(0, 0, 0, 0.19) 10px 10px 20px, rgba(0, 0, 0, 0.30) 10px 10px 10px;
}

.txt1 {
    font-family: 'Orbitron', sans-serif;
    background-color: #dcdbe1;
    border: solid black 0.5px;
    color: black;
    border-radius: 5px;
    width: 100%;
    height: 65%;
}

#btn {
    background-color: #fb0066;
}

input[type=button] {
    font-family: 'Orbitron', sans-serif;
    background-color: #64278f;
    color: white;
    border: solid black 0.5px;
    width: 100%;
    border-radius: 5px;
    height: 70%;
    outline: none;
}

input:active[type=button] {
    background: #e5e5e5;
    -webkit-box-shadow: inset 0px 0px 5px #c1c1c1;
    -moz-box-shadow: inset 0px 0px 5px #c1c1c1;
    box-shadow: inset 0px 0px 5px #c1c1c1;
}
table {
  width: 40%;
  hight: 40%;
  border-collapse: collapse;
  margin-bottom: 20px;
  font-size: 16px; /* Ubah ukuran font sesuai kebutuhan */
  background-color: #FFBE98;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}
    </style>
</head>
<body>
    <center>
    <h1>kalkulator W</h1>
    
    
<table class="calculator">
    <form name="form1" action="" method="post">
        <tr>
            <td colspan="6"><input type="text" class="txt1"name="txt1" id=""></td>
             <td> <input type="button" value="c" id="btn" onClick="form1.txt1.value=''"></td>
        </tr>
        <br>
    <tr>
        <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
        <td> <input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
        <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td> <td><input type="button" value="/" onClick="form1.txt1.value+='/'"></td>
    </tr>
    <tr>
        <td> <input type="button" value="4" onClick="form1.txt1.value+='4'"></td>
        <td><input type="button" value="5" onClick="form1.txt1.value+='5'"></td>
        <td><input type="button" value="6" onClick="form1.txt1.value+='6'"></td>
        <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
    </tr>
    <tr>
        <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
        <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
        <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
        <td><input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
    </tr>
    <tr>
        <td> <input type="button" value="." onClick="form1.txt1.value+='.'"></td>
        <td> <input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
        <td> <input type="button" value="000" onClick="form1.txt1.value+='000'"></td>
        <td><input type="button" value="=" id="btn" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
         <td> <input type="button" value="*" onClick="form1.txt1.value+='*'"></td>
    </tr>
   
</table>

    </form>
</center>
</body>
</html>