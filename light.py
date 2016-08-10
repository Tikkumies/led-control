import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

RED = 11
GREEN = 12
YELLOW = 13

GPIO.setwarnings(False)

GPIO.setup(RED, GPIO.OUT)
GPIO.setup(GREEN, GPIO.OUT)
GPIO.setup(YELLOW, GPIO.OUT)

def led1 ():
    while True:
        f = open("lights.txt","r")
        help = f.read()
        input = help[0]
        f.close()
        if input == 'a':
            GPIO.output(RED, True)
            time.sleep(0.1)
            break
                        
        else:
            GPIO.output(RED, False)
            time.sleep(0.1)
            break
            
def led2 ():
    while True:
        f = open("lights.txt", "r")
        help = f.read()
        input = help[1]
        f.close()
        if input == 'a':
            GPIO.output(GREEN, True)
            time.sleep(0.1)
            break
                        
        else:
            GPIO.output(GREEN, False)
            time.sleep(0.1)
            break

def led3 ():
    while True:
        f = open("lights.txt","r")
        help = f.read()
        input = help[2]
        f.close()
        if input == 'a':
            GPIO.output(YELLOW, True)
            time.sleep(0.1)
            break 
                        
        else:
            GPIO.output(YELLOW, False)
            time.sleep(0.1)
            break
    
def main ():
    while True:
        led1()
        led2()
        led3()

main()
