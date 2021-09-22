nombreLieux = int(input())
ville = 0

for loop in range (nombreLieux):
  population = int(input())
  
  if population > 10000:
    ville = ville + 1

print (ville)
