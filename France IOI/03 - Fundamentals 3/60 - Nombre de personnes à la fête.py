nbPersonnes = int(input())
présent = 0
nbMax = 0

for loop in range (nbPersonnes * 2):
  flux = int(input())
  
  if flux > 0:
    présent = présent + 1
    
    if présent > nbMax:
      nbMax = présent
  
  else:
    if flux < 0:
      présent = présent -1

print (nbMax)
