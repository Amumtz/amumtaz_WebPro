<!DOCTYPE html>
<html>
    <head>
        <title>Hitung keranjang</title>
    </head>
    <body>
        <h1> Menu </h1>
        <table>
            <tr>
                <td>Pecel</td>
                <td>10000</td>
            </tr>
            <tr>
                <td>Nasi Kuning</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>Nasi Goreng</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>Spaghetti</td>
                <td>20000</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Air Mineral</td>
                <td>3000</td>
            </tr>
            <tr>
                <td>Cendol</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>Es Kopi</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>Es Teh</td>
                <td>2500</td>
            </tr>
        </table>
        <br>
        <h3>Masukkan menu :</h3>
        <form action="prosesassesment.php" method="post">
            Makanan
            <select name="Makanan">
                <option value=""></option>
                <option value="Pecel">Pecel</option>
                <option value="Nasi Kuning">Nasi Kuning</option>
                <option value="Nasi Goreng">Nasi Goreng</option>
                <option value="Spaghetti">Spaghetti</option>
            </select><br>
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" min=0 required><br>
            Minuman
            <select name="Minuman">
                <option value=""></option>
                <option value="Air Mineral">Air Mineral</option>
                <option value="Cendol">Cendol</option>
                <option value="Es Kopi">Es Kopi</option>
                <option value="Es Teh">Es teh</option>
            </select><br>
            <label for="jumlah1">Jumlah:</label>
            <input type="number" id="jumlah1" name="jumlah1" min=0 required><br>
            <input type="submit" value="kirim">
    </body>
</html>