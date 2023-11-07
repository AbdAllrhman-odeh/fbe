/*
1
Write a function named tellFortune that:
takes 4 arguments: number of children,
partner's name, geographic location, job title.
outputs your fortune to the screen like so:
"You will be a X in Y, and married to Z with N kids."

Ex: tellFortune('software engineer', 'Jordan', 'Alice', 3);
=> "You will be a software engineer in Jordan, and married to Alice with 3 kids."
*/
        function tellFortune(x,y,z,n)
        {
            document.write(`You will be a ${x} in ${y}, and married to ${z} with ${n} kids<br>`);
        } 

        const tellFortune=(x,y,z,n)=>{
            document.write(`You will be a ${x} in ${y}, and married to ${z} with ${n} kids<br>`);
        }

/*
2
Write a function named calculateDogAge that:
takes 1 argument: your puppy's age.
calculates your dog's age based on the conversion
rate of 1 human year to 7 dog years.
outputs the result to the screen like so:
"Your doggie is NN years old in dog years!"

Ex: calculateDogAge(1);
=> "Your doggie is 7 years old in dog years!"
*/

        function calculateDogAge (age){
            var num=parseInt(age)*7;
            document.write(`Your doggie is ${num} years old in dog years!`);
        }

        const calculateDogAge=(age)=>{
            var num=parseInt(age)*7;
            document.write(`Your doggie is ${num} years old in dog years!`);
        }
/*
3
Write a function named calculateSupply that:
takes 2 arguments: age, amount per day.
calculates the amount consumed for rest of the life (based on a constant max age 100).
outputs the result to the screen like so:
"You will need NN to last you until the ripe old age of X"

Ex: calculateSupply(30, 3);
=> 'You will need 76650 cups of tea to last you until the ripe old age of 100;
*/

        function calculateSupply (age,per)
        {
            if(age>100) age=100;
            let rest=100-age;
            rest=rest*365;
            document.write(`You will need ${rest*per} cups of tea to last you until the ripe old age of 100`);

        } 
        const calculateSupply=(age,per)=>{
            if(age>100) age=100;
            let rest=100-age;
            rest=rest*365;
            document.write(`You will need ${rest*per} cups of tea to last you until the ripe old age of 100`);
        }
/*
4
Write a function called greet that:
takes 1 argument: name.
and it will return hello + name

Ex: greet("Adam")
=> "Hello Adam"
*/

function hello(str){
let s='hello '+str;
document.write(`${s}`);
}
    const hello=(str)=>{
        let s='hello '+str;
        document.write(`${s}`);
    }
/* in here i did not do anything with the arrow function
5
what is the error:
function double(cat) {
  return 2 * x;//x is undifind we may use cat
}

function double(7) {//7 must be var name not value
  return 2 * 7;
}

function double('7') {
  return 2 * 'x';  //x is undefind //7 must be var name not an value//return x*2;
}


6

fix these functions:
func double1(x {
  return 2 * x ;
}

//function double1(x){return 2*x;}  const double=(x)=>{return x*2;}
functiondouble2 x)
return 2 * x;
}

//function double2(x){return 2*x;} const double2=(x)=>{return x*2;}

function (x) double3 {
  return 2 * x;

*/
//function double3(x){return 2*x;}  const double3=(x)=>{return x*2;}

/*
7
Write a function called cube that:
accept 1 parameter and calculate the cube of this number

Ex: cube(4)
=> 64
*/
function cube(x){
  return x*x*x;
}
    const cube=(x)=>{
        return x*x*x;
    }

/*
8
Write a function called multiply that:
accept 2 parameters and calculate the multiply of these 2 numbers

Ex: multiply(3,4)
=> 12
Ex: multiply(5,4)
=> 20
*/
function multiply(x,y){
  return x*y;
}
    const multiply=(x,y)=>{
        return x*y;
    }

/*
9
Write a function called canIGetADrivingLicense that:
accept 1 parameter represent the age
and if the age greater than or equal to 20 return "yes you can"
otherwise return "please come back after X years to get one"

Ex: canIGetADrivingLicense(21)
=> "yes you can"

Ex: canIGetADrivingLicense(17)
=> "please come back after 3 years to get one"

Ex: canIGetADrivingLicense(20)
=> "yes you can"

*/
function canIGetADrivingLicense(age){
  if(age>=20) return "yes you can";
  else {
    let rest=age-20;
    return(`please come back after ${rest} years to get one`);
  }
}
    const canIGetADrivingLicense=(age)=>{
        if(age>=20) return "yes you can";
        else {
          let rest=age-20;
          return(`please come back after ${rest} years to get one`);
        }
    }

/*
10
Write a function called sameLength
that accepts two strings as arguments,
and returns true if those strings have the same length, and false otherwise.

**hint: how we can know string length   Ex: : "tree".length   => 4

Ex: sameLength("tree","clue")
=> true

Ex: sameLength("tree","car")
=> false
*/
function sameLength(str1,str2){
  if(str1.length==str2.length) return true;
  return false;
}
    const sameLength=(str1,str2)=>{
        if(str1.length==str2.length) return true;
        return false;
    }
/*
11
Write a function called largerNubmer
that accept two numbers as arguments,
and return the first larger numbers

Ex: largerNubmer(5,6)
=> 6

Ex: largerNubmer(5,3)
=> 5
*/
function largerNubmer(x,y){
  if(x>y) return x;
  return y;
}

const largerNubmer=(x,y)=>{
    if(x>y) return x;
    return y;
}

/*
12
Write a function called smallerNubmer
that accept three numbers as arguments,
and return the first smaller number

Ex: smallerNubmer(8,6,7)
=> 6

Ex: smallerNubmer(5,99,34)
=> 5

Ex: smallerNubmer(5,99,3)
=> 3

Ex: smallerNubmer(5,3,3)
=> 3

*/
function smallerNubmer(x,y,z){
  if(x<y && x<z) return x;
  else if(y<x && y<z) return y;
  return z;
}
    const smallerNubmer=(x,y,z)=>{
        if(x<y && x<z) return x;
        else if(y<x && y<z) return y;
        return z;
    }



/*
13
Write a function called shorterString
that accept five string as an arguments,
and return the first shorter string

Ex: shorterString("air","school","car","by","github")
=> by

Ex: shorterString("air","tr","car","by","github")
=> tr

Ex: shorterString("by","tr","car","air","github")
=> by

Ex: shorterString("air","by","car","school","github")
=> by

Ex: shorterString("air","tr","by","car","github")
=> by

Ex: shorterString("air","tr","car","github","by")
=> by

*/
function shorterString(str1,str2,str3,str4,str5){
  lstr1=str1.length;
  lstr2=str2.length;
  lstr3=str3.length;
  lstr4=str4.length;
  lstr5=str5.length;
  if(lstr1<=lstr2 && lstr1<=lstr3 && lstr1<=lstr4 && lstr1<=lstr5)
  return str1;
else if(lstr2<=lstr1 && lstr2<=lstr3 && lstr2<=lstr4 && lstr2<=lstr5)
return str2;
else if(lstr3<=lstr1 && lstr3<=lstr2 && lstr3<=lstr4 && lstr3<=lstr5)
return lstr3;
else if(lstr4<=lstr1 && lstr4<=lstr3 && lstr4<=lstr2 && lstr4<=lstr5)
return str4;
return str5;
}
    const shorterString=(str1,str2,str3,str4,str5)=>{
        lstr1=str1.length;
        lstr2=str2.length;
        lstr3=str3.length;
        lstr4=str4.length;
        lstr5=str5.length;
        if(lstr1<=lstr2 && lstr1<=lstr3 && lstr1<=lstr4 && lstr1<=lstr5)
        return str1;
        else if(lstr2<=lstr1 && lstr2<=lstr3 && lstr2<=lstr4 && lstr2<=lstr5)
        return str2;
        else if(lstr3<=lstr1 && lstr3<=lstr2 && lstr3<=lstr4 && lstr3<=lstr5)
        return lstr3;
        else if(lstr4<=lstr1 && lstr4<=lstr3 && lstr4<=lstr2 && lstr4<=lstr5)
        return str4;
        return str5;
    }
/*
14
Write a function called longerString
that accept four string as an arguments,
and return the first longer string

Ex: longerString("air","school","car","github")
=> school

Ex: longerString("air","schoo","car","github")
=> github

try all the cases (change the order of the longestString)
*/
function longerString(str1,str2,str3,str4){
  lstr1=str1.length;
  lstr2=str2.length;
  lstr3=str3.length;
  lstr4=str4.length;
  if(lstr1>=lstr2 && lstr1>=lstr3 && lstr1>=lstr4 )
  return str1;
else if(lstr2>=lstr1 && lstr2>=lstr3 && lstr2>=lstr4 )
return str2;
else if(lstr3>=lstr1 && lstr3>=lstr2 && lstr3>=lstr4 )
return str3;
return str5;
}
const longerString=(str1,str2,str3,str4)=>{
    lstr1=str1.length;
    lstr2=str2.length;
    lstr3=str3.length;
    lstr4=str4.length;
    if(lstr1>=lstr2 && lstr1>=lstr3 && lstr1>=lstr4 )
    return str1;
  else if(lstr2>=lstr1 && lstr2>=lstr3 && lstr2>=lstr4 )
  return str2;
  else if(lstr3>=lstr1 && lstr3>=lstr2 && lstr3>=lstr4 )
  return str3;
  return str5;
}

/*
15
Write a function called isEven
that accept 1 argument as a number,
and return true if this number is even
and false if this number is odd

Ex: isEven(1)
=> false
Ex: isEven(2)
=> true

*/
function isEven(x){
if(x%2==0 && x!=0) return true;
return false;
}

const isEven=(x)=>{
    if(x%2==0 && x!=0) return true;
return false;
}

/*
16
Write a function called isOdd
that accept 1 argument as a number,
and return true if this number is Odd
and false if this number is Even

Ex: isOdd(4)
=> false
Ex: isOdd(5)
=> true

*/
function isOdd(x){
if(x%2!=0 && x!=0) return true;
return false;
}
    const isOdd=(x)=>{
        if(x%2!=0 && x!=0) return true;
        return false;
    }

/*
17
Write a function called positive
that accept 1 argument as a number,
and return the positive version of the number passed

Ex: positive(4)
=> 4
Ex: positive(-5)
=> 5

*/
function positive(x){
if(x>0) return x;
return x*-1;
}

const positive=(x)=>{
    if(x>0) return x;
    return x*-1;
}

/*
18
Write a function called fullName
that accept two parameters, firstName and lastName,
and returns the firstName and lastName concatenated
together with a space in between.

Ex: fullName("Adam","McCallen")
=> "Adam McCallen"
Ex: fullName("Alex", "Mercer")
=> "Alex Mercer"
*/
function fullName(fName,sName){
 return (fName+' '+sName);
}
const fullName=(fName,sName)=>{
    return (fName+' '+sName);
}

/*
19
Write a function called average
that takes five numbers as inputs
and returns the average of those numbers.

Ex: average(1,2,3,4,5)
=> 3

Ex: average(5,7,9,3,5)
=> 5.8

*/

function average(n1,n2,n3,n4,n5){
  return ((n1+n2+n3+n4+n5)/5);
}
    const average=(n1,n2,n3,n4,n5)=>{
        return ((n1+n2+n3+n4+n5)/5);
    }
/*
20
Write a function called randomNumber
that didnt takes any parameter
and returns a random number between 0-1
** hint: you can seacrh using MDN

Ex: randomNumber()
=> 0.2278

Ex: randomNumber()
=> 0.475

*/
function randomNumber(){
  return Math.random();
}
const randomNumber=()=>{
    return Math.random();
}

/*
21
Write a function called randomBetweenNumbers
that takes 2 parameters
and returns a random number between them
** hint: you can seacrh using MDN

Ex: randomBetweenNumbers(1,8)
=> 7.5412

Ex: randomBetweenNumbers(3,100)
=> 23

*/
function randomBetweenNumbers(min,max) {
  if (min > max) {
      let z=min;
      min=max;
      max=z;
  }
  let random=Math.random()*(max-min)+min;
  return random;
}
const randomBetweenNumbers=(min,max)=>{
    if (min > max) {
        let z=min;
        min=max;
        max=z;
    }
    let random=Math.random()*(max-min)+min;
    return random;
}

/*
22
Write a function called scoreInUniversty
that takes 1 parameters
and returns the alpabet in the unevirsty
A => 95-100
B => 85-94
C => 70-84
D=> 50-69
F=> 0-49

Ex: scoreInUniversty(96)
=> "A"

Ex: scoreInUniversty(3)
=> "F"

Ex: scoreInUniversty(71)
=> "C"
*/
function scoreInUniversity(score){
  if (score>=95 && score<=100){
      return "A";
  } 
  else if (score>=85 && score<95) {
      return "B";
  } 
  else if (score>=70 && score<85) {
      return "C";
  } 
  else if (score>= 50 && score<70) {
      return "D";
  } 
  else if (score>=0 && score<50) {
      return "F";
  } 
  else {
      return "Invalid score";
  }
}
const scoreInUniversity=(score)=>{
    if (score>=95 && score<=100){
        return "A";
    } 
    else if (score>=85 && score<95) {
        return "B";
    } 
    else if (score>=70 && score<85) {
        return "C";
    } 
    else if (score>= 50 && score<70) {
        return "D";
    } 
    else if (score>=0 && score<50) {
        return "F";
    } 
    else {
        return "Invalid score";
    }
}

/*
23
Write a function called counter
that will returns a number bigger
than the one that returnd before
and start from 0

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: counter()
=> 3

*/
let count=0;
function counter() {
    count++;
    return count;
}

//let count=0;
const counter=()=>{
    count++;
    return count;
}

/*
24
Write a function called resetCounter
that will reset the previuos function
and return the number before reset and
a string say that the counter reset

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: counter()
=> 3

Ex: resetCounter()
=> 3 and the counter reset now

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: resetCounter()
=> 2 and the counter reset now

Ex: counter()
=> 1
*/
function resetCounter() {
  let preCount=count;
  count=0;
  return `${preCount} and the counter reset now`;
}

const resetCounter=()=>{
    let preCount=count;
    count=0;
    return `${preCount} and the counter reset now`;
}

