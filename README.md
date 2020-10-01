#program 1 Variable
print("##Variable")
student="sam"
print(student)
student="piya"
print(student)

#program 2 Data type
print("##Data type")

a1=10
print(a1)
print(type(a1))
a1=10.5
print(a1)
print(type(a1))
a1=10<5
print(a1)
print(type(a1))
a1="Pari"
print(a1)
print(type(a1))
a1=3+4j
print(a1)
print(type(a1))

#Operator
#Arithmetic operators + - / *
print("##Arithmetic operators")

a=20
b=10
print(a,b)
print(a+b)
print(a-b)
print(a/b)
print(a*b)

#Relational operators < > == !=
print("##Relational operators")

a=50
b=100
print(a,b)
print(a<b)
print(a>b)
print(a==b)
print(a!=b)

#Logical operators & |
print("##Logical operators &")
a=True
b=False
print(a&a)
print(a&b)
print(b&a)
print(b&b)

print("##Logical operator |")
print(a|a)
print(a|b)
print(b|a)
print(b|b)

#String
print("##String")
str1='This is my first string'
print(str1)
str2="This is my first string"
print(str2)
str3='''This is
my first  
string'''
print(str3)

print("##Extracting Individual character")
my_string="This is sparta"
print(my_string)
print(my_string[0])
print(my_string[-1])
print(my_string[5:11])

print("##String Function")
print(my_string)
print(len(my_string))               #lenght 
print(my_string.lower())            #Lower Case
print(my_string.upper())            #Upper case
print(my_string.replace('is','are'))#Replace
new_str="sparta 300 300 300"
print(new_str)
print(new_str.count('300'))         #Count 
print(new_str.find('a'))            #find
print(new_str.split('a'))           #split

#Data Structures in python Tuple,List,Dictionary,Set
print("##Data Stuctures")
print("##Tuple")

tup1=(1,True,3.14,5-7j)
print(tup1)
print(type(tup1))
print(tup1[2])

print("##Tuple Basic operations")
print("##Finding length")
print(len(tup1))
print("##Concatenating")
tup1=(1,2,3)
tup2=(4,5,6)
print("tup1=",tup1)
print("tup2=",tup2)
print(tup1+tup2)
print("##Repeating Tuple")
print(tup1*3)
print("##Repeating and concatenating Tuple")
print(tup1*3+tup2)

tup1=(1,2,3,4,5,6,7,8,9)
print("##Maximum values")
print(max(tup1))

print("##Minimum values")
print(min(tup1))

print("##List")
lst=[1,"sparta",3.14,True]
print(lst)
print("##Extracting Individual Elements")
print(lst[2])
print(lst[-1])
print(lst[1:3])

print("##Modifying Elements")
print("##Change the element")
print(lst)
###print(lst[0]=100)
print("##Adding a new element")
print(lst.append("piya"))
print(lst)

print("##popping the last element")
print(lst.pop())
print(lst)

print("##Modifying a list")
print("##Reversing Elementsof a list")
print(lst)
print(lst.reverse())
print(lst)

print("##Insert elementat a specific position")
print(lst.insert(1,"kailas"))
print(lst)

print("##Sortig a list")
lst2=["k","s","g","a","s"]
print(lst2)
print(lst2.sort())
print(lst2)

print("##Concatrenate list")
lst1=["k","a","i","l","a","s"]
lst2=[1,2,3]
print(lst1+lst2)

print("##Repeating list")
lst=[1,2,3	]
print(lst*3)

print("##Dictionary")
d1={'Apple':50,'banana':100,'orange':200}
print(type(d1))

print("##Extracting key")
print(d1.keys())

print("##Extracting Values")
print(d1.values())

print("##Adding new Element")
d1={'Apple':50,'banana':100,'orange':200}
d1['mango']=150
print(d1)

print("##Changing existing element")
d2={'Anil':10,'kailas':30}
d2['Anil']=15
print(d2)

print("##Update one dictionary element with another")
fruit1={'apple':100,'banana':40}
fruit2={'orange':50,'mango':150}
fruit1.update(fruit2)
print(fruit1)

print("##Poping element")
fruit1={'apple':100,'banana':40,'orange':50,'mango':150}
fruit1.pop('mango')
print(fruit1)

print("##Update one dictionary's element with another")
dict1={1,'k','s',2,'false'}
dict1.add('true')
print(dict1)

print("##updating multiple elements")
dict1.update([10,20,30])
print(dict1)

print("##Removing an element")
print(dict1)
dict1.remove('false')
print(dict1)

print("##Union of two sets")
s1={1,2,3,4,5,6}
s2={5,6,7,8,9}
print(s1.union(s2))

print("##intersection of two sets")
print(s1.intersection(s2))

print("##if statement")
print("##two value using if statement")
a=10
b=20
print("a=",a,"b=",b)
if(a>b):
	print("a is greter than b")
else:
	print("b is greter than a")
print("##Three value using if statement")
a=10
b=20
c=30
print("a=",a,"b=",b,"c=",c)

