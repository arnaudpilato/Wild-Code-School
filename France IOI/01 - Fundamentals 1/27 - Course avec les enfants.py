from robot import *

direction = 1

for loop in range (10):
  for loop in range (direction + loop):
    droite()
  
  ramasser()
  
  for loop in range (direction + loop):
    gauche()
  
  deposer()
