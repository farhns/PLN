<!DOCTYPE html>
<html>
<head>
    <title>Employee List - PT Argo Industri</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>
    <a href="<?php echo site_url('employee/create'); ?>">Tambah Karyawan</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Gaji Akhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($employees as $employee): ?>
            <tr>
                <td><?php echo $employee['nip']; ?></td>
                <td><?php echo $employee['nama']; ?></td>
                <td><?php echo $employee['jabatan']; ?></td>
                <td>Rp. <?php echo number_format($employee['gaji_pokok']); ?></td>
                <td>Rp. <?php echo number_format($employee['gaji_akhir']); ?></td>
                <td>
                    <a href="<?php echo site_url('employee/print_slip/'.$employee['nip']); ?>">Cetak Slip</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>