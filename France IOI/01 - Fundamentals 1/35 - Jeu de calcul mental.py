nombreInit = 66
nombreQté = int(input())
multiplication = 0

for loop in range (nombreQté):
  multiplication = multiplication + 1
  
  print (nombreInit * multiplication)
  
  nombreInit = nombreInit * multiplication
