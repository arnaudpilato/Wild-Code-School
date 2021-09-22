dateDébut = int(input())
dateFin = int(input())
nbInvités = int(input())
présent = 0

for loop in range (nbInvités):
  dateArrivée = int(input())
  dateDépart = int(input())
  faux = ((dateDépart < dateDébut) or (dateArrivée > dateFin))
  
  if (not(faux)):
    présent = présent + 1

print (présent)
