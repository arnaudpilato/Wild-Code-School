paireDeZone = int(input())

for loop in range (paireDeZone):
  xMinA = int(input())
  xMaxA = int(input())
  yMinA = int(input())
  yMaxA = int(input())
  xMinB = int(input())
  xMaxB = int(input())
  yMinB = int(input())
  yMaxB = int(input())
  
  if ((xMaxA <= xMinB) or (xMaxB <= xMinA)) or ((yMaxB <= yMinA) or (yMaxA <= yMinB)):
    print ("NON")
  else:
    print ("OUI")
