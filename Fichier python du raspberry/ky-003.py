#!/usr/bin/python
# coding=utf-8

# Les modules n�cessaires sont import�s et mis en place
import RPi.GPIO as GPIO
import time
import pymysql

GPIO.setmode(GPIO.BCM)

# La broche d'entr�e du capteur est d�clar�e. En outre la r�sistance de Pull-up est activ�e.
GPIO_PIN = 24
GPIO.setup(GPIO_PIN, GPIO.IN, pull_up_down = GPIO.PUD_UP)

print ("Sensor-Test:Ctrl + C pour terminer le test")

#connexion mysql
conn = pymysql.connect(host='127.0.0.1',user='root',password='password',db='famisec')
#conn = pymysql.connect(host='famisecbtaclem19.mysql.db',user='famisecbtaclem19',password='Brancart18',database='famisecbtaclem19',unix_socket='TCP')
mycursor = conn.cursor()

# Cette fonction de sortie est ex�cut�e par d�tection du signal
def fonctionDeSortie(self):

        if GPIO.input(24):
            print("Signal pas d�tect�")
            sql = "UPDATE etatmachine SET porte = 'ouverte' WHERE nom='machineUne'"
            mycursor.execute(sql)
            conn.commit()
        else:
            print("Signal d�tect�")
            sql = "UPDATE etatmachine SET porte = 'fermee' WHERE nom='machineUne'"
            mycursor.execute(sql)
            conn.commit()
        time.sleep(5)

# Lors de la d�tection d'un signal (front descendant du signal) de la fonction de sortie est d�clench�e
GPIO.add_event_detect(GPIO_PIN, GPIO.BOTH, callback=fonctionDeSortie)


# Boucle de programme principale
try:
    while True:
        fonctionDeSortie(0)


# r�initialisation de tous les GPIO en entr�es
except KeyboardInterrupt:
        GPIO.cleanup()


