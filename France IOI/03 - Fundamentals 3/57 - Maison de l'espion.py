xMin = int(input())
xMax = int(input())
yMin = int(input())
yMax = int(input())
totalMaisons = int(input())
zone = 0

for loop in range (totalMaisons):
  xMaison = int(input())
  yMaison = int(input())
  
  if (xMaison >= xMin) and (xMaison <= yMax):
    if (yMaison >= yMin) and (yMaison <= yMax):
      zone = zone + 1

print (zone)
