nbMesures = int(input())
tempMin = int(input())
tempMax = int(input())
stop = 0

while stop != nbMesures:
  stop = stop + 1
  mesure = int(input())
  
  if (mesure >= tempMin) and (mesure <= tempMax):
    print ("Rien à signaler")
  else:
    print ("Alerte !!")
    stop = nbMesures
