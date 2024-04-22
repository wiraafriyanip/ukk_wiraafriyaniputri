<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK WIRA AFRIYANI PUTRI</title>
     <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}

.ukk {
    background-color: #fff;
    width: 50%;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    text-align: center;
}

h3 {
    color: #555;
    text-align: center;
}

form {
    margin-to: 30px;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
    font-size: 18px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:last-child {
    background-color: #f44336;
    margin-left: 10px;
}

input[type="submit"]:last-child:hover {
    background-color: #d32f2f;
}
input[type="number"] {
    text-align: center;
}

    </style>
</head>
<body>
    <div class="ukk">
        <center>
        <h1>UKK 2024</h1>
        <h3>Wira Afriyani Putri</h3>

        <form action="{{ route('ukk.store') }}" method="post">
            @csrf
            <label for="bil1">Masukan Angka Pertama</label>
            <input type="number" name="bil1" id="bil1">
            <label for="bil2">Masukan Angka Kedua</label>
            <input type="number" name="bil2" id="bil2">
            <input type="submit" value="Tambahkan" name="op">
            <input type="submit" value="Kurangkan" name="op">
            <input type="submit" value="Kalikan" name="op">
            <input type="submit" value="Bagikan" name="op">
            <input type="submit" value="Reset" name="op">
            
        </form>
    </div></center>
</body>
</html>