# web-application-project
The aim of this project is to implement a web application to handle appointments of a generalist 
doctor's office. it s a simple academic Crud app made with poo,pdo and mvc model!! 
## How to run the app
1. clone the project 
2. open the project in any editor 
3. run easyphp or xamp and open the http and data base server
4. export the file called gestiondecabinet.sql into your data base
5. go to http://localhost:8080/ in your browser and start the web app
## How to Start
1.first of all u need to login into the admin UI (admin,admin,1) by going to authentification.php page
2. or u can login into the doctor UI (doctor,doctor,0) by going to authentification.php page
3.fill the login form and click connexion
## Admin Stories
- An Admin can add,update,delete and search a patient
## Doctor Stories
- A Doctor can add a consultation 
## Features
- Add Patient
  -a button will redirect u to the new appointment UI so all u have to do is to fill the form and click submit 
   and it will redirect u to the admin page where u will
   find your ligne added on the table
  - A patient should not have two appointments per date, i.e., an admin should not be able to 
    create two appointments for the same patient in the same day. If it is the case, the 
    application should display the following notification: a patient may not have two 
    appointments per day
  - read the contribution for more details 
- Update
  -a button will redirect u to the Update UI so all u have to do is to fill the form and click submit and it will redirect u to the admin page where u will
   find your ligne Updated on the table
  - u can t update a patient that not found
  - read the contribution for more details
- Delete
  - u need to type the id of appointment to delete the ligne that u want 
  - An admin may not delete an appointment whose date is inferior to the current day.
- Search
  - u can type the username and click search it will redirect u to a page where u will find all the patients with the name that u typed in a table
- disconnect
  -  destroy the session and comeback to the authentifiaction UI




