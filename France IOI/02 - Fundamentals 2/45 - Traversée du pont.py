lancé1 = int(input())
lancé2 = int(input())
tarif = 0

if lancé1 + lancé2 >= 10:
  print ("Taxe spéciale !")
  print ("36")
else:
  tarif = lancé1 + lancé2
  print ("Taxe régulière")
  print (tarif * 2)
