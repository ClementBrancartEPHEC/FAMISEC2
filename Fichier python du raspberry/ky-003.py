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

print ("Sensor-Test:Ctrl + C pour terminer le script")

#connexion mysql
#conn = pymysql.connect(host='127.0.0.1',user='root',password='password',db='famisec')
<<<<<<< HEAD
conn = pymysql.connect(host='mysql-famisec.alwaysdata.net',user='famisec_btaclem',password='Brancart18',database='famisec_btaclem19')
=======
conn = pymysql.connect(host='xxxxxxxxxxxxxx',user='xxxxxxxxxxx',password='xxxxxxxxxxxx',database='xxxxxxxxxxx',unix_socket='TCP')
>>>>>>> 4f0109e206d1220e3bd0f72d83e15376f770eb6e
mycursor = conn.cursor()

# Cette fonction de sortie est exécutée par détection du signal
def fonctionDeSortie(self):
        if GPIO.input(24):
<<<<<<< HEAD
            print("porte ouverte")
=======
            print("Signal pas détecté")
>>>>>>> 4f0109e206d1220e3bd0f72d83e15376f770eb6e
            sql = "UPDATE etatmachine SET porte = 'ouverte' WHERE nom='machineUne'"
            mycursor.execute(sql)
            conn.commit()
        else:
<<<<<<< HEAD
            print("porte fermee")
=======
            print("Signal détecté")
>>>>>>> 4f0109e206d1220e3bd0f72d83e15376f770eb6e
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

<<<<<<< HEAD
=======

>>>>>>> 4f0109e206d1220e3bd0f72d83e15376f770eb6e
# réinitialisation de tous les GPIO en entrées
except KeyboardInterrupt:
        GPIO.cleanup()


