nip = input( "NIP      : ")
nama = input("Nama     : ")
tahun_masuk = input("Tahun Masuk: ")

# Menampilkan pilihan golongan jabatan
print("Pilih Golongan Jabatan:")
print("1. Satpam")
print("2. Sales")
print("3. Administrasi")
print("4. Manajer")

gol_jabatan = input("Masukkan angka golongan jabatan (1/2/3/4): ")

if gol_jabatan == "1":
    gol_jabatan = "Satpam"
    gaji_pokok = 4500000
    jam_lembur = int(input("Jam Lembur: "))
    honor_lembur = jam_lembur * 20000
    gaji_akhir = gaji_pokok + honor_lembur

elif gol_jabatan == "2":
    gol_jabatan = "Sales"
    gaji_pokok = 5500000
    jumlah_pelanggan = int(input("Jumlah Pelanggan: "))
    komisi = jumlah_pelanggan * 50000
    gaji_akhir = gaji_pokok + komisi

elif gol_jabatan == "3":
    gol_jabatan = "Administrasi"
    gaji_pokok = 6000000
    lama_kerja = int(input("Lama Kerja: "))
    if lama_kerja >= 5:
        tunjangan = gaji_pokok * (3 / 100)
    elif lama_kerja >= 3:
        tunjangan = gaji_pokok * (1 / 100)
    else:
        tunjangan = 0
    gaji_akhir = gaji_pokok + tunjangan

elif gol_jabatan == "4":
    gol_jabatan = "Manajer"
    gaji_pokok = 8000000
    presentase = int(input("Presentase Peningkatan Penjualan: "))
    if presentase > 10:
        bonus = gaji_pokok * (10 / 100)
    elif presentase >= 6:
        bonus = gaji_pokok * (5 / 100)
    elif presentase >= 1:
        bonus = gaji_pokok * (2 / 100)
    else:
        bonus = 0
    gaji_akhir = gaji_pokok + bonus

else:
    print("Golongan Jabatan Tidak Terdaftar")
    exit()  # Jika ingin tetap melanjutkan, hapus exit() ini.

# Menampilkan hasil penggajian
print("-------------------------------------")
print("-----Penggajian PT Argo Industri-----")
print(f"NIP: {nip}")
print(f"Nama Pekerja: {nama}")
print(f"Golongan Jabatan: {gol_jabatan}")
print(f"Tahun Masuk: {tahun_masuk}")
print(f"Gaji Pokok: {gaji_pokok}")
print(f"Total Gaji: {gaji_akhir}")
