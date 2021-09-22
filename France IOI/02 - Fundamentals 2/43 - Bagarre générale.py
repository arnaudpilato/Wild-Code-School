champsArignon = int(input())
champsEvaran = int(input())
limite = 10

if champsArignon - champsEvaran > limite:
  print ("La famille Arignon a un champ trop grand")

if champsEvaran - champsArignon > limite:
  print ("La famille Evaran a un champ trop grand")
