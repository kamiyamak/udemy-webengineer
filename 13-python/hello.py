#!/usr/bin/python

print 'Content-type: text/html'
print ''
# print 'Hello Python!!'

age = 35

print age

print ''

pi = 3.14

print pi

name = 'Rob'

print name 

print age/pi

number = "5"

print number * age

print '<br>'

print int(number) * 5

print int(number) * age

print int(number) * pi

str = "my name is rob"

print str[0]
print str[0:6]
print str[5]

myList = ["apple","banana","orange"]
print myList
print myList[1]
print myList[1:4]

myTuple = (1,2,3,4)
print myTuple
# myTuple[1] = 5
# print myTuple

dict = {}
dict["dad"] = "rob"
dict["mum"] = "kirstin"
dict[1] = "tom"
dict[2] = "ralph"

print dict
print dict["mum"]
print dict.keys()
print dict.values()