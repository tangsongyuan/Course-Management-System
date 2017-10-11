# Course-Management-System

## GET STARTED

1. Click on the Heroku link, since the entire application is deployed on Heroku.
    https://course-manager-system.herokuapp.com/index.php

2. Run the application with PHP code. Since the database is set up on ClearDB, just run the index.php in localhost.

## PROJECT DESCRIPTION

Database Management System (DBMS) shows a great importance in the big data era. The main purpose of this project is to implement a Course Management System to help students in Computer Science and Engineering (CSE) Department and Electrical and Computer Engineering (ECE) Department manage with their personal information and course selection.

Since there is quite large amount of undergraduate and graduate students in CSE Department and ECEN Department, it will be overwhelmed to deal with every student’s information and every student’s course selection without a reasonable database. In this DBMS, we can access to a web application and search for a person's information and review one's course selection records. And this system also allows user to make some modification of personal information and course selection records. In general, the project provides a user-friendly interface to retrieve and change information from database system. 

## DATA COLLECTION

### Data Generation

In this project, we have created three tables initially to store our data. The first table stores personal contact information. The second table has attributes of course selection records. And the last table is about course information. We set primary key of Student ID in the first table, Record Number in the second table and Course Number in the third table, which is unique to its according table.

All data were generated to .CSV by Java at first, and then .CSV format files were converted into .SQL format file. 

```
Java code of generating data is in the folder of "generateData"
```

### Data Schema

The table of personal contact information has over five hundred tuples which represents number of person and their personal records, including Student ID, Name, Gender, Age and Email. 

Since each person may or may not have courses, and each person could have more than one course records, thus, we created one thousand and two hundred tuples in second table which record every piece of information that someone takes some courses. The specific attributes in the table are Record Number, Student ID(user_id), Department, Course Number and Course Name. And to avoid data duplication, in the process of generating course records, I applied some data structure – hashmap and hashset to make sure the courses someone takes are all different. And the attribute of user_id in second table can be NULL value, which allows the user to insert only course selection information and claim any unclaimed record in the future. 

Besides, in the third table, it shows detailed information of every course, including Department, Course Number, Course Name, Credit and Prerequisite Course. We can query detailed information from the third table related to the second table. 


## USER INTERFACE

This web application is implemented in PHP, MySQL for DBMS, Bootstrap for front-end design and Git for version control. And the whole application is deployed in Heroku, which uses ClearDB as add-ons.

Home page consists of the main four functions – SELECT, UPDATE, INSERT and DELETE. And to make home page more user-friendly and responsive, I implemented with Bootstrap front-end framework, which contains a Nav Bar and Jumbotron.

And four web pages are corresponding to four functions

```
Home page: index.php
SELECT page: select.php
UPDATE page: update.php
INSERT page: insert.php
DELETE page: delete.php
```

