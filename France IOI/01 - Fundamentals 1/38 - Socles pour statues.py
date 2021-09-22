socleSuperieur = int(input())
socleInferieur = int(input())
surface = 0

for loop in range (socleInferieur , socleSuperieur + 1):
  surface = surface + loop * loop

print (surface)
