# Create a class and function, and list out the items in the list

class AI_Subfields:
    def AI(self):
        sub_ai= [
            "Machine Learning",
            "Neural Networks",
            "Vision",
            "Robotics",
            "Speech Processing",
            "Natural Language Processing"
        ]
        print("Sub-fields in AI are:")
        for subfield in sub_ai:
            print(" ", subfield)

asms = AI_Subfields()
asms.AI()

# Create a function that checks whether the given number is Odd or Even

class OddEven:
    def OddEven(self):
        num = int (input("Enter a Number :"))
        if (num % 2 == 0)  :
            print(num , "is Even Number")
        else:
            print(num , "is Odd Number")


check = OddEven()
check.OddEven()

# Create a function that tells elegibility of marriage for male and female according to their age limit like 21 for male and 18 for female

class ElegiblityForMarriage:
    def Elegible(self):
        gender = input("Enter Your Gender ( Male / Female ) :" ).capitalize()
        age = int(input("Enter Your Age :"))


        if ( gender == "Male" and age >= 21 ) :
            print ("ELIGIBLE")
        elif ( gender == "Female" and age >= 18 ):
            print ("ELIGIBLE")
        else:
            print ("NOT ELIGIBLE")



MarrCheck = ElegiblityForMarriage()
MarrCheck.Elegible()

# calculate the percentage of your 10th mark

class FindPercent:
    def percentage(self):
        Subject1 = 98
        Subject2 = 87
        Subject3 = 95
        Subject4 = 95
        Subject5 = 93


        TotalMarks = Subject1 + Subject2 + Subject3 + Subject4 + Subject5
        Percent = ( TotalMarks / 500 ) * 100



        print( "Subject1 =" , Subject1 )
        print( "Subject2 =" , Subject2 )
        print( "Subject3 =" , Subject3 )
        print( "Subject4 =" , Subject4 )
        print( "Subject5 =" , Subject5 )
        print ( "Total Marks =", TotalMarks )
        print ( "Percentage =",  Percent )


        


calculate = FindPercent()
calculate.percentage()


# print area and perimeter of triangle using class and functions

class triangle:
    def triangle(self):

        Height = 32
        Breadth = 34

        area = "( Height * Breadth ) / 2"
        Area = ( Height * Breadth ) / 2
        

        print ( "Height :" , Height )
        print ( "Breadth :" , Breadth )
        print ( "Area Formula  = " , area )
        print ( "Area of Triangle = " , Area )

        print ( "\n" )



        Height1 = 2
        Height2 = 4
        Breadth1 = 4

        perimeter = "Height1 + Height2 + Breadth"
        Perimeter = Height1 + Height2 + Breadth

        print ( "Height1 :" , Height1 )
        print ( "Height1 :" , Height2 )
        print ( "Breadth :" , Breadth1 )
        print ( "Perimeter Formula  = " , perimeter )
        print ( "Perimeter of Triangle =" , Perimeter )


Triangle = triangle()
Triangle.triangle()