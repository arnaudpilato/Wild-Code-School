maxPierre = int(input())
hauteur = 0
pierre = 0

while pierre + (hauteur + 1) * (hauteur + 1) <= maxPierre:
  hauteur = hauteur + 1
  pierre = pierre + hauteur * hauteur

print (hauteur)
print (pierre)
