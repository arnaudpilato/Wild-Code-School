JoursDeMarche = int(input())
distanceMax = 0

for loop in range (JoursDeMarche):
  distance = int(input())
  
  if distance > distanceMax:
    distanceMax = distance

print (distanceMax)
