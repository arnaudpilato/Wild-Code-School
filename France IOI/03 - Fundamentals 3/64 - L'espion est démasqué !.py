suspect = int(input())

for loop in range (suspect):
  taille = int(input())
  age = int(input())
  poids = int(input())
  cheval = int(input())
  cheveux = int(input())
  probabilité = 0
  
  if (taille >= 178) and (taille <= 182):
    probabilité += 1
  
  if age >= 34:
    probabilité += 1
  
  if poids < 70:
    probabilité += 1
  
  if cheval < 1:
    probabilité += 1
  
  if cheveux > 0:
    probabilité += 1
  
  if probabilité == 5:
    print ("Très probable")
  elif (probabilité >= 3) and (probabilité <= 4):
    print ("Probable")
  elif probabilité == 0:
    print ("Impossible")
  else:
    print ("Peu probable")
