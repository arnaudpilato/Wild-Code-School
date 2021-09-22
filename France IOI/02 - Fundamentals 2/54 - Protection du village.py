maisons = int(input())
xMax = 0
xMin = 1000000
yMax = 0
yMin = 1000000
xResultat = 0
yResultat = 0
périmètre = 0

for loop in range (maisons):
  x = int(input())
  y = int(input())
  
  if x > xMax:
    xMax = x
  
  if x < xMin:
    xMin = x
  
  if y > yMax:
    yMax = y
  
  if y < yMin:
    yMin = y
  
  xResultat = xMax - xMin
  yResultat = yMax - yMin

périmètre = xResultat + yResultat

print (périmètre * 2)
