Models

Video - playing with models, the basics

link to next video

steps taken in the video:

1) Have a few tables created, show their schema in visio
Student
id
name

Course
id
name
teacher_id

Enrollment
id
student_id
course_id

Teacher
id
name

2) Show how to get all of the Teachers
3) show pretty print then show it on the page in a nicer format
4) When you click on a teacher, you get a page showing the courses that they teach
5) when you click on a course, you get a list of the students enrolled in that course

Next example: forms building off of this

1) Explain no ajax yet
2) create / edit teachers.  Delete will be shown later
3) create / edit courses
4) create / edit students.
5) change enrollment in courses

New Video: N+1 query problem

Show the old solution, custom SQL that pulls back rows, not database objects
given a student with ID X, show the courses in which the student is enrolled, and the teachers with that student