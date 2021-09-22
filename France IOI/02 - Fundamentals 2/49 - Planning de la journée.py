position = int(input())
nombreVillages = int(input())
possibilité = 0
soustraction = 0

for loop in range (nombreVillages):
  positionVillages = int(input())
  soustraction = positionVillages - position
  
  if soustraction < 0:
    soustracion = soustraction * -1
  
  if soustraction <= 50:
    possibilité = possibilité + 1

print (possibilité)
