# print ‘CORRECT’ if i == 10

i = 10
if (i==10):
    print("CORRECT")

# Check the password, using if and else

password = input("Enter The Password :")
if (password == "marstech@123"):
    print("Your Password is Correct")
else:
    print("Your Password is Wrong")


# Catagory the people by their age like children, adult, citizen, senior citizen...

age = int(input("Enter Your Age :"))
if (0 < age < 18):
    print("Children")
elif(18 <= age <= 30):
    print("Adult")
elif(30 < age <= 50):
    print("Citizen")
elif(age > 50):
    print("Senior Citizen")
else:
    print("Incorrect Input")


# Find whether given number is positive or negative

num = int(input("Enter a Number :"))
if(num > 0):
    print("Number is Positive")
elif(num < 0):
    print("Number is Negative")
else:
    print("Incorrect Input")


# Check whether the given number is divisible by 5

num = int(input("Enter a Number :"))

if(num % 5 == 0):
    print("Number is Divisible by 5")
else:
    print("Number is  Not Divisible by 5")

    