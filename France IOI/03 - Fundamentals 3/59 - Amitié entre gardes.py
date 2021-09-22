débutSoldatA = int(input())
finSoldatA = int(input())
débutSoldatB = int(input())
finSoldatB = int(input())

if ((débutSoldatA >= débutSoldatB) and (débutSoldatA <= finSoldatB)) or ((débutSoldatB >= débutSoldatA) and (débutSoldatB <= finSoldatA)):
  print ("Amis")
else:
  print ("Pas amis")
