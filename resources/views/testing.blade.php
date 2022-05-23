<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        use App\Models\Faskes;

        echo '<h1>' . "Bukti Bisa Jalan: " . Faskes::count() . ' Query ' . '</h1>';

        foreach (Faskes::all() as $faskes) {
            // echo '<p>' . $faskes->pesanMasuk->where('id_faskes_pengirim', 1) . '</p>';
        }
    ?>

</body>
</html>
