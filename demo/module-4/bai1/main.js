var x = "codegym";
console.log(x);
var errorFunction = function () {
    console.log('Codegym');
};
errorFunction();
var Student = /** @class */ (function () {
    function Student(id, name) {
        this._id = id;
        this._name = name;
    }
    Student.prototype.getId = function () {
        return this._id;
    };
    Object.defineProperty(Student.prototype, "id", {
        set: function (id) {
            this._id = id;
        },
        enumerable: false,
        configurable: true
    });
    return Student;
}());
var student = new Student(1, 'dung');
console.log(student);
student.id = 2;
console.log(student);
