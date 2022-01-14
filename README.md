Hi, my name is Devanshu Kumar. A Final Year Student at Chandigarh Group of Colleges, Landran. Punjab. This is the Email Github timeline updates Assignemnt Solution .

-----Description----- As per the assignement , it is a simple PHP Application which send users ( who are registered in the database) update about the Github Timeline at every 5 minutes.

In the email they are receving the information related to Github Timeline Updates.

----- Operating environment ------ Front end - PHP,Js,HTML,SQL Back end -Php Database- MySQL

----- Links ----- 1)Github assignment repository:- https://github.com/rtlearn/php-2020devanshu

2)Live demo:- https://drive.google.com/file/d/1CgfX5PAtGw6O-ACs0WmFtsoRYy9J093D/view?usp=sharing  (Not Hosted as per Assignment updated Rules)

3)Github account:- https://github.com/2020devanshu

----- Table ----- In this application , i have stored the Api Script in a txt file and im using the php script for checking any change in the live api(Github Timeline) , if any change is detected, i'm updating the txt file content with the latest and sending the updated chnage in the txt file to the registered user from database. This is happening every 5 min in Cron Job (server side). It runns Script.php AND checks if there is any change or not

Table Name:- `users` ( `id` - userid , `email`- email of user, `token` - for checking validation , `active` - to check whether the user has subscribed or unsubscribed, `created_at` timestamp when user enters the email, `inactive_at` - Unsubscribe time  )

----- Email service ----- For sending emails i have used my shared hosting of MRCloudHosting Provider and Used Php Mailer Library for sending emails through the pathway.

----- How to run ----- Note: You need to install xampp for run this project. 1.Download this file and paste it into [C:\xampp\htdocs]. 2.Create database or import [rtcamp.sql] file into your localhost. 3.Update [database.php] with your credentials. 4.Start your xampp. 5.Goto browser and navigate your php script.

----- Cron job ----- Cron job means run your script auto in spacefic time. No need to run it manually.

----- How to set it for specific time ----- Go to Start >> Control Panel >> Scheduled Tasks >> Add Scheduled Task>> Add [script.php] file as schedular>>Set time in that.

----- Bibliography ----- 1.https://www.youtube.com/ 2.https://www.google.com/ 

----- Youtube channels refers ----- 1.CodeWithHarry 

----- Content Help and Error Help ---- stackoverflow

----- Contact Details ----- Name: Devanshu Kumar Mobile: +919472003529 email: 1914263.cse.coe@cgc.edu.in