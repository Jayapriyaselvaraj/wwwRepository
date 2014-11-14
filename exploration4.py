string = "The" + " customer"
print string

string = string + " bought a"
print string

tiger = " Tiger named Todd"
print string + tiger

string = string + tiger
string = string + ". That" + tiger + " cost him $" + str(999.99) + "."
print string

print "Sales tax was an additional 15% so it really cost him $" + str(999.99 + (999.99*.15))

print "I will now translate any word you wish to pig latin mwahaha"

pyg = 'ay'

original = raw_input('Enter a word:')

word = original.lower()

first = word[0]

new_word = word + first + pyg

new_word = new_word[1:]



if len(original) > 0 and original.isalpha():
    print new_word
else:
    print 'invalid input'
    
print "Now I will demonstrate a python function and also an if statement"

def this_function(num):
	return num + 3
	
def another_func(num):
	return this_function(num)*100

number = another_func(5)

if number>5:
	print number
else:
	print "number was not greater than 5"
	
number = another_func(-4)

if number>5:
	print number
else:
	print "number was not greater than 5"
	

