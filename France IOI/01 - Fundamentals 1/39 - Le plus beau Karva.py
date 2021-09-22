nbKanvas = int(input())
note = 0

for loop in range (nbKanvas):
  poids = int(input())
  age = int(input())
  longueurCornes = int(input())
  hauteurGarrot = int(input())
  note = longueurCornes * hauteurGarrot + poids
  
  print (note)
