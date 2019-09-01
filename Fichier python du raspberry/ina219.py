import pymysql
from ina219 import INA219, DeviceRangeError
from time import sleep

SHUNT_OHMS = 0.1
MAX_EXPECTED_AMPS = 2.0
ina = INA219(SHUNT_OHMS, MAX_EXPECTED_AMPS)
ina.configure(ina.RANGE_16V)

#connexion database
#conn = pymysql.connect(host='127.0.0.1',user='root',password='password',db='famisec')
conn = pymysql.connect(host='mysql-famisec.alwaysdata.net',user='famisec_btaclem',password='Brancart18',db='famisec_btaclem19')
mycursor = conn.cursor()

def read_ina219():
    try:
        print('Bus Current: {0:0.2f}mA'.format(ina.current()))
        if ina.current()>1.00:
                sql = "UPDATE etatmachine SET fonction  = 'enCours' WHERE nom='machineUne'"
                mycursor.execute(sql)
                conn.commit()
                print('enCours')
        else:

                sql = "UPDATE etatmachine SET fonction  = 'libre' WHERE nom='machineUne'"
                mycursor.execute(sql)
                conn.commit()
                print('libre')
    except DeviceRangeError as e:
        # Current out of device range with specified shunt resister
        print(e)

while 1:
    read_ina219()
    sleep(5)
