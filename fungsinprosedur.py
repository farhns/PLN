# Mengembalikan hasil penjumlahan dua angka
def tambah(a, b):
    return a + b  # Mengembalikan nilai

#  Mencetak hasil penjumlahan tanpa mengembalikan nilai
def cetak_hasil(a, b):
    hasil = a + b
    print(f"Hasil penjumlahan {a} + {b} adalah {hasil}")


# Memanggil fungsi
hasil_tambah = tambah(4, 5)
print(f"Hasil dari fungsi: {hasil_tambah}")  # Output: Hasil dari fungsi: 9

# Memanggil prosedur
cetak_hasil(4, 5)  # Output: Hasil penjumlahan 4 + 5 adalah 9
