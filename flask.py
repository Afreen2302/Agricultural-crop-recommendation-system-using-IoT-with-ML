from flask import *
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn import metrics
from sklearn.metrics import r2_score
dataset=pd.read_csv("dataset.csv")
dataset.isnull().any()
dataset=dataset.fillna(method="ffill")
X=dataset.iloc[:,:-1].values
y=dataset.iloc[:,-1].values
X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.1,random_state=0)
from sklearn.tree import DecisionTreeRegressor
regressor=DecisionTreeRegressor(random_state=0)
regressor.fit(X_train,y_train)
y_pred=regressor.predict(X_test)
accu=r2_score(y_test,y_pred=)

app=flask(_name_,staticfolder='')
@app.route('/',methods=['GET','POST'])