age = int(input())
poids = int(input())
tarif = 0
supplément = 0

if age < 10:
  tarif = 5
else:
  if age == 60:
    tarif = 0
  else:
    tarif = 30
    
    if poids >= 20:
      supplément = 10

print (tarif + supplément)
