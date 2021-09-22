from robot import *

for loop in range (9):
  haut()

for loop in range (9):
  droite()

for loop in range (4):
  bas()
  
  for loop in range (8):
    gauche()
  
  bas()
  
  for loop in range (8):
    droite()

bas()

for loop in range (9):
  gauche()
