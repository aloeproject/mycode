#coding:utf-8
for item in [1,2,3,4,'abc','e','f']:
    print(item);

for item in range(5):
    print(item);

#使用for嵌套的表达式 如下输出 0,1,4
for item in { x**2 for x in range(3)}:
    print(item);


#fc = open('./readme','r')
#for content in fc.readline():
#    print(content);

for i in (1,2):
    print(i)
