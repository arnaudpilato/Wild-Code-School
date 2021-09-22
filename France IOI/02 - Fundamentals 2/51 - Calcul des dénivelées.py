altitude = int(input())
montée = 0
descente = 0

for loop in range (altitude):
  variation = int(input())
  
  if variation > 0:
    montée = montée + variation
  
  if variation < 0:
    descente = descente + variation * -1

print (montée)
print (descente)
