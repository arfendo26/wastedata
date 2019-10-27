
import matplotlib.pyplot as plt
import matplotlib.dates as mdates
import pandas as pd
import datetime as dt
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import GridSearchCV
from sklearn.svm import SVR


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="hackathon"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM garbage_price")

myresult = mycursor.fetchall()


#print(type(myresult[5][4]),myresult[5][4].day)
#for x in myresult:
#    print(x[4][1])

price = []
day = []
month = []
year = []
#get price and date
print('xxxxxxxxxxxxxxxxxxxxxxxxxxxx')
print(myresult[204][4].month())
print('xxxxxxxxxxxxxxxxxxxxxxxxxxxx')
for x in myresult: