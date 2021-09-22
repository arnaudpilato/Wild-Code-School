suspect = int(input())
tailleListe = int(input())
réponse = False

for loop in range (tailleListe):
  numéro = int(input())
  
  if numéro == suspect:
    réponse = True

if réponse == True:
  print ("Sorti de la ville")
else:
  print ("Encore dans la ville")
