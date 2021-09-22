mois = int(input())
jours = 0

if (mois <= 3) or ((mois >= 7) and (mois <= 9)):
  jours = 30
else:
  if ((mois >= 4) and (mois <= 6)) or (mois == 10):
    jours = 31
  else:
    jours = 29

print (jours)
