def cal(num1,num2):
    summ = sumc(num1, num2)
    subb = subc(num1, num2)
    return subb, summ

def sumc(num1,num2):
	return num1+num2

def subc(num1, num2):
	return num1-num2

print("eieiza55+")

cal(int(input()), int(input()))