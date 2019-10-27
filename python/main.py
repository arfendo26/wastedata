import forecast

j = forecast("SELECT Harga,Tanggal FROM garbage_price WHERE Bank =1 and Jenis = 2")
a = j.get_json()
print(a)