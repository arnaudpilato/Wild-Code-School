nbMembres = int(input())
poidsEquipe1 = 0
poidsEquipe2 = 0

for loop in range (nbMembres):
  poids1 = int(input())
  poids2 = int(input())
  poidsEquipe1 = poidsEquipe1 + poids1
  poidsEquipe2 = poidsEquipe2 + poids2

if poidsEquipe1 > poidsEquipe2:
  print ("L'équipe 1 a un avantage")
else:
  print ("L'équipe 2 a un avantage")

print ("Poids total pour l'équipe 1 :" , poidsEquipe1)
print ("Poids total pour l'équipe 2 :" , poidsEquipe2)
