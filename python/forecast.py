

class forecast:
    import mysql.connector

    import matplotlib.pyplot as plt
    import matplotlib.dates as mdates
    import pandas as pd
    from datetime import datetime
    from sklearn.preprocessing import StandardScaler
    from sklearn.model_selection import GridSearchCV
    from sklearn.svm import SVR
    
    query = ''
    def __init__(self,query):
        self.query = query




    mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    database="hackathon"
    )

    mycursor = mydb.cursor()

    mycursor.execute(query)

    myresult = mycursor.fetchall()

    price = []
    date = []

    for x in myresult:
    price.append(x[0])
    date.append(x[1])

    year = []
    day = []
    month = []
    for d in date:
    year.append(d.strftime("%Y"))
    day.append(d.strftime("%d"))
    month.append(d.strftime("%m"))

    x = {
        "year" : year,
        "month" : month,
        "day" : day,
    }

    x_all = pd.DataFrame(x)
    y_all = pd.DataFrame(price)
    #Data Ready


    #Transformation X_All
    def tranformasi_data(x_all, x_tr):
        scaler = StandardScaler()
        scaler.fit(x_all)
        x_all_tr = scaler.transform(x_tr)
        return x_all_tr

    x_all_tr = tranformasi_data(x_all, x_all)

    #Transformation End

    #Generate Model
    def model(x_all_tr, y_all):
        gcs = GridSearchCV(SVR(kernel='rbf'),
                        param_grid={'gamma': [1,2,3,4,5, 6, 7, 8, 9, 10]},
                        cv=5,
                        scoring='neg_mean_squared_error')
        grid_result = gcs.fit(x_all_tr, y_all)
        best_params = grid_result.best_params_
        best_svr = SVR(kernel='rbf', C=1e3, gamma=best_params["gamma"])
        best_svr.fit(x_all_tr, y_all)
        y_pred = best_svr.predict(x_all_tr)
        return y_pred, best_svr
        
    y_pred, best_svr = model(x_all_tr, y_all)


    print(best_svr)
    date_start = date[-1].strftime("%Y-%m-%d")

    date_pred = pd.date_range(start=date_start,periods=5,freq = 'm')

    print(date_pred)
    price_pred = []

    for dp in date_pred:
    y = dp.strftime("%Y")
    m = dp.strftime("%m")
    d = dp.strftime("%d")

    c = [[y, m, d]]
    c_tr = tranformasi_data(x_all, c)
    best_svr.predict(c_tr)
    price_pred.append(best_svr.predict(c_tr)[0])


    print(price_pred)

    from sklearn.metrics import mean_absolute_error, mean_squared_error, r2_score
    MSE = mean_squared_error(y_all, y_pred)
    MAE = mean_absolute_error(y_all, y_pred)
    R2 = r2_score(y_all, y_pred)


    pred_raw = { 'date':date_pred, 'price':price_pred,'MSE':MSE,'MAE':MAE,'R2':R2}
    pred = pd.DataFrame(pred_raw)
    print(pred)
    json = pred.to_json()
    print(json)
    
    def get_json(self):
        return self.json