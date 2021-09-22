résultat = int(input())
proposition = int(input())
essai = 1

while proposition != résultat:
  essai = essai + 1
  
  if proposition > résultat:
    print ("c'est moins")
  elif proposition < résultat:
    print ("c'est plus")
  
  proposition = int(input())

print ("Nombre d'essais nécessaires :")
print (essai)
