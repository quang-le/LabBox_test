import random

def rand5():
  number=random.randint(0,5)
  return number

def rand7():
  lucky7=rand5()+rand5()
  if lucky7<=7:
    return lucky7
  else:
    return rand7()
