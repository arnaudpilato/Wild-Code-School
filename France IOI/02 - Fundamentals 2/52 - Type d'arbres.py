hauteur = int(input())
nombreFolioles = int(input())

if hauteur <= 8:
  if nombreFolioles >= 8:
    print ("Tinuviel")
  else:
    print ("Falarion")

if hauteur >= 10:
  if nombreFolioles >= 10:
    print ("Calaelen")
  else:
    print ("Dorthonion")
