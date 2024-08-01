interface Student {
  name: string;
  age: number;
  grade: number;
}

// サンプルデータ
const students: Student[] = [
  { name: "Alice", age: 20, grade: 85 },
  { name: "Bob", age: 22, grade: 90 },
  { name: "Charlie", age: 23, grade: 70 },
  { name: "Dave", age: 21, grade: 80 },
];

// getAverageGrade: 学生の平均成績を計算して返す。
function getAverageGrade(students: Student[]) {
  const totalGrade = students.reduce((sum, student) => sum + student.grade, 0);
  return totalGrade / students.length;
}

// getTopStudent: 成績が最も高い学生の名前を返す。
function getTopStudent(students: Student[]) {
  const topStudent = students.reduce((prev, curr) =>
    prev.grade > curr.grade ? prev : curr
  );
  return topStudent.name;
}

// filterStudentsByAge: 指定された年齢以上の学生をフィルタリングして返す。
function filterStudentsByAge(students: Student[], minAge: number) {
  return students.filter((student) => student.age >= minAge);
}

// 関数のテスト
console.log(getAverageGrade(students));
console.log(getTopStudent(students));
console.log(filterStudentsByAge(students, 21));
