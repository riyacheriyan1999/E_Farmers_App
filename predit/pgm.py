import os
import pickle
import pandas as pd
from sklearn.ensemble import IsolationForest
from sklearn.preprocessing import StandardScaler

path='dataset'

scalar = StandardScaler()
clf = IsolationForest(n_estimators=100, contamination=0.01)

for i in os.listdir(path):
	data=pd.read_csv(path+'/'+i)
	#print(data.head(5))
	data.dropna(inplace=True)
	X=data[['season','pH','soil_type','elevation','temperature']]
	#print(X.head(5))
	X=scalar.fit_transform(X)
	clf.fit(X)
	name=i.split('.')
	pickle.dump(clf, open('models/model_'+name[0]+'.sav', 'wb'))
	pickle.dump(scalar, open('scalar/scalar_'+name[0]+'.sav', 'wb'))

