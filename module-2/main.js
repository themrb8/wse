console.log('hello world')
var Mohammad = "roman"
var mrb = 88945894.332
var isCompleted = true

//switch statement
var day  = 'thuresday'
switch (day) {
    case 'saturday':
    console.log('this is saturday');
    break;

    case 'sunday':
    console.log('this is sunday');
    break;

    case 'monday':
    console.log('this is monday');
    break;

    case 'thuesday':
    console.log('this is thuesday');
    break;

    case 'wednesday':
    console.log('this is wednesday');
    break;

    case 'thursday':
    console.log('this is thursday');
    break;

    case 'friday':
    console.log('this is friday');
    break;

    default:
        console.log('This is ' + day + ' day not exist in the world');
        break;
}
//for loop
let number = 1;
for (number; number < 10; number++) {
    console.log(number)
}

//do while loop
do {
    console.log(number)
    number++;
}while (number <= 5);


//while loop
while(number < 7) {
    console.log(number)
    number++;
}

//array
let names = [
    'mohammad',
    'r',
    'b',
    'friday',
    'Hulsink'
]
names.push('loep');
for(i = 0; i < names.length; i++) {
    console.log(names[i])
}
names.splice(2)
console.log(names)

//objects
let info = {
    fullName: 'Mohammad Roman Biswas',
    age: 24,
    city: 'pabna',
    religion: 'islam',
    country: 'bd'
}

console.log(info.country)

//function
function sum(a, b) {
    let sum = a + b
    return sum
}

console.log(sum(5, 5))