# Indexed array (array dasar)
angka = [10, 20, 30, 40, 50]

# Akses elemen berdasarkan indeks
print(angka[0])  
print(angka[2])  

# Multidimensional array (2D array)
matriks = [
    [1, 2, 3],  # Baris pertama
    [4, 5, 6],  # Baris kedua
    [7, 8, 9]   # Baris ketiga
]

# Akses elemen menggunakan baris dan kolom
print(matriks[0][1])  # Output: 2 (Baris 0, Kolom 1)
print(matriks[2][2])  # Output: 9 (Baris 2, Kolom 2)

# Associative array (dictionary)
data_pelanggan = {
    "nama": "John Doe",
    "umur": 30,
    "alamat": "Jalan Raya No. 123"
}

# Akses elemen berdasarkan key
print(data_pelanggan["nama"])   # Output: John Doe
print(data_pelanggan["umur"])   # Output: 30
