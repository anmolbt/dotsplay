import pandas as pd
import json
import numpy as np

df=pd.read_csv("C:/Users/Anmol/Desktop/EY/I am Learning Python/all.csv")

# creating numpy.ndarray of the unique users
unique_users = df.user.unique()
print len(unique_users)

# creating numpy.ndarray of all the unique correspondents
unique_correspondent_ids = df.correspondent_id.unique()
print len(unique_correspondent_ids)

nodes=[]
n=1

for i in unique_correspondent_ids:
	size=df[df['correspondent_id']==i].shape[0]
	nodes.append({'id':str(i),'group':30,'size':int(size)})

for i in unique_users:
	size=df[df['user']==i].shape[0]
	nodes.append({'id':str(i),'group':n,'size':int(size)})
	n+=1
	



# print nodes
# with open('data_force_layout.json','w') as outf:
# 	json.dump(nodes,outf)
# print 'done'

links=[]

#Extract unique correxpondents of a particular user
for user in unique_users:
	df1= df[df['user']==user]
	unique_user_correspondents=df1.correspondent_id.unique()
	for unique_correspondent in unique_user_correspondents:
		df2=df1[df1['correspondent_id']==unique_correspondent]
		value=df2.shape[0]
		links.append({'source':str(user),'target':str(unique_correspondent),'value':int(value),})


# print links

graph={'nodes':nodes,'links':links}

with open('data_force_layout_full.json','w') as outf:
	json.dump(graph,outf)
print 'done'






