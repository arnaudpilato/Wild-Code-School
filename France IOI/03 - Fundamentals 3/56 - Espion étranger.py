dateDébut = int(input())
dateFin = int(input())
nbEntrées = int(input())
espions = 0

for loop in range (nbEntrées):
  dateEntrée = int(input())
  
  if (dateEntrée >= dateDébut) and (dateEntrée <= dateFin):
    espion = espion + 1

print (espions)
