let x: string = "codegym";
console.log(x);

let errorFunction = () => {
    console.log('Codegym');
}

errorFunction();

class Student {
    private _id: number;
    private _name: string;

    constructor(id: number, name: string) {
        this._id = id;
        this._name = name;
    }

    getId()
    {   
        return this._id;
    }

    set id(id: number)
    {
        this._id = id;
    }


}

let student = new Student(1, 'dung'); 
console.log(student);
student.id = 2;
console.log(student);

let promise = new Promise((resoleve, reject) => {
    return resoleve(25);
})

promise.then(value => {
    console.log(value);
})

let money = 10000;
const buyACar = (car: any) => {
    return new Promise(((resolve, reject) => {
        setTimeout(() => {
            if (money >= 10000) {
                resolve("buy anew car");
            } else {
                reject("Do not enoung money")
            }
        }, 1)
    }))
}

money = 1001;
const promise1 = buyACar("ford").then(value => {
    console.log(value);
}).catch(error => {
    console.log(error);
})