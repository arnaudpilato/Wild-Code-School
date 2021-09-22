heureDepart = int(input())
tarif = 0

for loop in range (heureDepart + 1):
  tarif = loop * 5 + 10
  
  if tarif > 53:
    tarif = 53

print (tarif)
