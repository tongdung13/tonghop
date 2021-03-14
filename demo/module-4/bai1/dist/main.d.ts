declare let x: string;
declare let errorFunction: () => void;
declare class Student {
    private _id;
    private _name;
    constructor(id: number, name: string);
    getId(): number;
    set id(id: number);
}
declare let student: Student;
declare let promise: Promise<unknown>;
declare let money: number;
declare const buyACar: (car: any) => Promise<unknown>;
declare const promise1: Promise<void>;
