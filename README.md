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
  - the doctor will get  all the appointment adedd on the current date only and he will add a consultation for each one 
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
- Add Consultation
  - -a button will redirect u to the Consultation UI so all u have to do is to fill the form and click submit and it will redirect u to a page where u will
      find the Consultation on the table (it s a session)
- disconnect
  -  destroy the session and comeback to the authentifiaction UI
## Future Features
- a dashboard for admin and doctor
- more controls on the Crud bottons
-  About the Consultation : Once the introduced data is saved, the 
   application should redirect the user to the appointment interface. Attended appointments, i.e., 
   which have already assigned to a consultation, should be displayed in green color.
- adding a registre UI where the patient can make an account and add an appointment where it will be accepted or denied on admin UI 
- adding an index page where u can find some advice on how we protecte ourself from different Diseases this page will be redirected to the patient who have 
   an account 
- u can post a question to the doctor and he can answer u 
- a Calender of when the office is open and the doctor is available will be displayed to the patient
- the app will be available with french and english language 
- improving the security of the app (the app made with Get method so it will be repliced with Post method)
## Dependencies
- 100% php
- poo
- pdo
## For the Contribution details
1. if u want to work with a framework u can only work with laravel
2. the app is missing some frontend designe and a dashboard for admin and docotr 
3. we accept only an optimised code (dont complicate things)
4. u can Contribute on everything written on the Future Features (scroll up )
5. the app missing some controls like :
    -   A patient should not have two appointments per date, i.e., an admin should not be able to 
           create two appointments for the same patient in the same day. If it is the case, the 
             application should display the following notification: a patient may not have two 
               appointments per day
    - search and delete the appointment on the same page (if the appointment not found alert will be displayed patient not found)
6. the app is designed with bootstrap
7. u can suggest something new on the app 
8. if u write any code make sure to put comments so we can understand u 
9. fix the birthdate only 18+ who can make an account and fill an appointment

## What's the app looks like 

![Capture d’écran 2022-05-02 181242](https://user-images.githubusercontent.com/81488144/166294059-e15d867b-fe75-4fcc-9caf-a4b9c8ed6250.png)

![Capture d’écran 2022-05-02 180451](https://user-images.githubusercontent.com/81488144/166294062-0b205122-eb3d-461c-a633-3fc04d94ded3.png)

![Capture d’écran 2022-05-02 181324](https://user-images.githubusercontent.com/81488144/166294066-c997ce43-d24b-4c38-ac06-369712589dd6.png)


                            This is an Academic Project looking to be a big one
                       If there is any gramma mistakes do not hesitate to correct for me 
                                            Thanks For Reading 
                                                      
                                                                         
