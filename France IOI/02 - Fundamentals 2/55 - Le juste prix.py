nbMarchands = int(input())
position = 0
prix = 0
meilleurPrix = 1000000
positionExacte = 0

for loop in range (nbMarchands):
  prix = int(input())
  position = position + 1
  
  if prix <= meilleurPrix:
    meilleurPrix = prix
    positionExacte = position

print (positionExacte)
