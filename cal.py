def cal(num1,num2):
    summ = sumc(num1, num2)
    subb = subc(num1, num2)
    return subb, summ

def sumc(num1,num2):
	return num1+num2

def subc(num1, num2):
	return num1-num2

def test():
	print('Gun')
	print('is')
	print('so cute')

cal(int(input()), int(input()))