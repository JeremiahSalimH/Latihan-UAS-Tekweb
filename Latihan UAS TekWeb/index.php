<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require("include/head.php");
        require("include/connection.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">WELCOME!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-secondary" aria-current="page" href="admin/login.php">Login Admin</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-3">
        <div class="container-fluid border p-2">
            <h1 class="mb-5">Cek Pengiriman</h1>
            <div class="container-fluid d-flex flex-row gap-2 p-0">
                <input id="resi" type="text" class="ps-2" placeholder="Nomor Pengiriman">
                <button type="button" onclick="ajax()" class="btn btn-dark">Lihat</button>
            </div>
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function ajax(){
            const resi = document.getElementById("resi").value;
            $.ajax({
                url: 'function/view-resi-spesifik.php',
                type: 'GET',
                data: { resi: resi },
                dataType: 'json',
                success: function(data) {
                    // Handle the returned data
                    let resultHtml = '';
                    if (data.length > 0) {
                        data.forEach(function(row) {
                            resultHtml += `<tr>
                                                <td>${row.tanggal}</td>
                                                <td>${row.kota}</td>
                                                <td>${row.keterangan}</td>
                                            </tr>`;
                        });
                    } else {
                        resultHtml = '<p>No data found.</p>';
                    }
                    $('#table-body').html(resultHtml);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + ', ' + error);
                    $('#result').html('<p>Error loading data.</p>');
                }
            });
        }
    </script>
</body>
</html>