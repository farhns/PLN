import os

# Fungsi untuk menampilkan menu utama
def menu():
    while True:
        print("\nMENU PILIHAN")
        print("1. Input angka")
        print("2. Tampil hasil pengurutan")
        print("3. Selesai")
        pilihan = input("Masukkan pilihan [1/2/3]: ")
        
        if pilihan == "1":
            input_angka()
        elif pilihan == "2":
            tampil_hasil_pengurutan()
        elif pilihan == "3":
            print("Program selesai. Terima kasih!")
            break
        else:
            print("Pilihan tidak valid. Silakan coba lagi.")

# Fungsi untuk input angka dan menyimpan hasil pengurutan ke file
def input_angka():
    try:
        print("\nINPUT ANGKA")
        jumlah = int(input("Masukkan jumlah angka yang akan diinput: "))
        
        if jumlah <= 0:
            print("Jumlah angka harus lebih dari 0.")
            return
        
        angka = []
        print("Input Angka Secara Acak")
        print("-" * 50)
        for i in range(1, jumlah + 1):
            nilai = int(input(f"Angka {i}: "))
            angka.append(nilai)
        
        # Mengurutkan angka
        angka_sorted = bubble_sort(angka)
        
        # Menyimpan hasil ke file
        simpan_ke_file(angka_sorted)
        print("Hasil pengurutan telah disimpan ke file.")
    except ValueError:
        print("Masukkan angka yang valid.")

# Prosedur pengurutan menggunakan metode Bubble Sort
def bubble_sort(data):
    n = len(data)
    for i in range(n - 1):
        for j in range(n - i - 1):
            if data[j] > data[j + 1]:
                # Fungsi tukar data
                data[j], data[j + 1] = data[j + 1], data[j]
    return data

# Fungsi untuk menyimpan data ke file
def simpan_ke_file(data):
    with open("hasil_pengurutan.txt", "w") as file:
        file.write(", ".join(map(str, data)))

# Fungsi untuk menampilkan hasil pengurutan dari file
def tampil_hasil_pengurutan():
    if not os.path.exists("hasil_pengurutan.txt"):
        print("Hasil pengurutan belum tersedia. Silakan input angka terlebih dahulu.")
        return
    
    print("\nTAMPIL HASIL PENGURUTAN")
    with open("hasil_pengurutan.txt", "r") as file:
        data = file.read()
        print(f"Nilai tugas: {data}")

# Menjalankan program utama
if __name__ == "__main__":
    menu()
