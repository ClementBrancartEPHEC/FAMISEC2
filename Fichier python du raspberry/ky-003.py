#!/usr/bin/python
# coding=utf-8

# Les modules nécessaires sont importés et mis en place
import RPi.GPIO as GPIO
import time
import pymysql

GPIO.setmode(GPIO.BCM)

# La broche d'entrée du capteur est déclarée. En outre la résistance de Pull-up est activée.
GPIO_PIN = 24
GPIO.setup(GPIO_PIN, GPIO.IN, pull_up_down = GPIO.PUD_UP)

print ("Sensor-Test:Ctrl + C pour terminer le test")

#connexion mysql
#conn = pymysql.connect(host='127.0.0.1',user='root',password='password',db='famisec')
conn = pymysql.connect(host='xxxxxxxxxxxxxx',user='xxxxxxxxxxx',password='xxxxxxxxxxxx',database='xxxxxxxxxxx',unix_socket='TCP')
mycursor = conn.cursor()

# Cette fonction de sortie est exécutée par détection du signal
def fonctionDeSortie(self):

        if GPIO.input(24):
            print("Signal pas détecté")
            sql = "UPDATE etatmachine SET porte = 'ouverte' WHERE nom='machineUne'"
            mycursor.execute(sql)
            conn.commit()
        else:
            print("Signal détecté")
            sql = "UPDATE etatmachine SET porte = 'fermee' WHERE nom='machineUne'"
            mycursor.execute(sql)
            conn.commit()
        time.sleep(5)

# Lors de la détection d'un signal (front descendant du signal) de la fonction de sortie est déclenchée
GPIO.add_event_detect(GPIO_PIN, GPIO.BOTH, callback=fonctionDeSortie)


# Boucle de programme principale
try:
    while True:
        fonctionDeSortie(0)


# réinitialisation de tous les GPIO en entrées
except KeyboardInterrupt:
        GPIO.cleanup()


