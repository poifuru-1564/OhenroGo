# OHENRO GO!

### Project Member: Mei Hiraoka, Ayaka Nakajima, Sumire Iwaki, Mashiro Yamada

## Project Description

**Project Abstruct**  
In this project, we will develop the web application called “Ohenro Go!”. “Ohenro” refers to the Japanese Buddhist pilgrimage that involves visiting 88 Buddhist temples on Shikoku Island. This application will provide the blogging features for English-speaking pilgrims.

**Aims of the Application**  
While the number of Japanese pilgrims has dramatically decreased in the past decades, the number of foreign pilgrims has been increasing. In 2023, foreign pilgrims accounted for between 16.6% and 44.0% of the total. As the demand for English-language information grows, there is still no dedicated web or mobile application that offers blogging or posting features for them. A few Facebook communities have been organized by foreign pilgrims, but Facebook does not provide the feature that allows users to categorize the blogs with organized structure (e.g categorize by location, user role, topics of the blog, or the pilgrims status). Creating web application for foreign pilgrims enables to accumulate essential information that supports a safe and meaningful journey. This application aims to provide a solution to this demand.

In this project, we are going to use HTML, CSS, Java Script, PHP, and Laravel which are fundamental web application languages and framework. Implementing blog features requires an understanding of how the database and the web front/back will be related each other, and how the front will be constructed. So that it requires basic PHP knowledge to make the backend, and HTML, CSS, JS for frontend, and all features will be combined by laravel framework. Through this project, we aim to gain practical experience in applying this knowledge.

**Similar Web-based Project**  
There are some services for Ohenro; “Henro no Akari + Plus” and “Dojyo-ninin” are the mobile applications that provide album and comment features. However, users cannot share their posts with other users in those applications. So, we would like to add the feature to make some differentiation with the competitors.

**Target Audience**  
The target audience is foreign pilgrims. The application benefits English-speaking pilgrims with the pilgrims’ community that aims to share information of Ohenro. The structured categorization of blogs allow user to access the information easily.

## ER Diagram (draw.io)

### Initial Version

<img width="533" height="658" alt="image" src="https://github.com/user-attachments/assets/174f9e44-b49e-4def-96a6-6df9ecc9942f" />

https://drive.google.com/file/d/1Ii0g0MHEgcG1RKQVOaHIhHK3JjyYO3Uw/view?usp=sharing

### Latest Version

<img width="836" height="660" alt="image" src="https://github.com/user-attachments/assets/f9e3b502-4acb-4524-8fc0-e16e8bd7354d" />

https://drive.google.com/file/d/1UqKImyVAX0d4i_Ma1GkB55HYdo1nt3Hl/view?usp=sharing

## Initial Design (Figma)

<img width="1831" height="1563" alt="image" src="https://github.com/user-attachments/assets/426447c5-fb4d-49ac-b29a-00079635d547" />

https://www.figma.com/design/YPTE7VIw6KqzvjQmYUsQyL/Ohenro-GO-?node-id=131-1689&t=pMLZ63SqllwnajAl-1

## Core Features and Functionality

### Blogging Fucntionality

**Features:**

-   **Edit blog feature:** Users can create and edit their blogs
-   **Uploading image fetuare:** Users can upload a image per one post
-   **Delete blog feature:** Users can delete their blogs
-   **Categorization feature:** Categorize the blog by "Prefectures", "Location" (temples), "Status", "Topic", and "user role". Users can decide categories of the blog when posting it and search with specific categories.
-   **Listing blog feature:** Users can list the blogs (Blogs can be filtered with multiple categories)
-   **Time stamp:** The uploaded time is showed with the post

### Account Management Functionality

**Features:**

-   **Create account feature:** Users can create account
-   **Log in feature:** Users can log in their account
-   **Log out feature:** Users can log out their account
-   **Reset password feature:** Users can reset their password
-   **Profile feature:** Users can create and edit the profile

## Cautions and Areas for Improvement

**Security Issue: Login Function**  
There is sign-up function that allows users to create accounts. However, there is no email verification process, so we cannot confirm whether the provided email address actually exists.
Additionally, when resetting a password, anyone who knows a matching username and email address can reset the user's password. This could be a potential security risk.

**CSS Structure**  
The CSS is not organized in an object-oriented way. It can be improved by using a more structured approach, such as separating componenets or organizing styles by function.
This would become especially helpful as the number of files increases.

**Database Structure**  
There are many columns in the users table that contain null values. This is because many fields are optional for users to fill out, which leads to imcomplete rows. This may unnecessarily increase the database size.
To address this issue, the table could be normalized.
For example, creating separate tables for each user role could be a possible improvement.

**image uploading**
This application only accepts jpg and png images, so that we will be able to put function that allowed the other image files later.

**time zone**
When this application stores the record for posts, the date info is not JST sometimes. It needs to be updated in future.

## Getting Started

### Prerequisites

1. Git
2. VS Code
3. laravel herd
4. mysql
5. mysql workbench
6. Composer
7. Google Chrome (required for running the local development URL)
8. Account Required: GitHub account

### Instruction

Those instructions are for Windows

**Installing Git:**

1. Go to: https://git-scm.com/install/
2. Download the installer that corresponds to your OS
3. Run the installer
4. Default settings should work for this project
5. (Optional) To confirm that Git was installed successfully, run the command: git --version

**Installing VS Code:**

1. Go to: https://code.visualstudio.com/download
2. Download the installer that corresponds to your OS (user installer file is recommended for Windows)
3. Run the installer

**Installing Laravel Herd:**

1. Download the Herd installer from: https://herd.laravel.com/windows
2. Run the installer

**Installing MySQL (Community Server):**

1. Download MySQL Community Server from: https://dev.mysql.com/downloads/mysql/
2. You can choose any version you like (recommended version 8.4.7 LTS, recommended file type for Windows is MSI Installer)
3. You do not have to sign up or log in, just download
4. Set the root password
5. Start MySQL

**Installing MySQL Workbench:**

1. Download MySQL Workbench from: https://dev.mysql.com/downloads/workbench/
2. Recommended: version 8.0.44, MSI installer
3. Open Workbench and connect to MySQL using the root account

**Installing Composer:**

1. Go to: https://getcomposer.org/download/
2. Download the installer
3. Run the installer

**Installing Google Chrome**

1. Go to: https://www.google.com/chrome/
2. Download the installer
3. Run the installer

**Creating a GitHub Account**

1. If you do not have a GitHub account, go to: https://github.com/
2. Sign up

**Setting up the project with Laravel Herd**

1. Go to the GitHub OhenroGo! repository: https://github.com/poifuru-1564/OhenroGo
2. Click **Fork** to copy the project to your Github account
3. Open a terminal and navigate to the directory where you want to place the project  
   You can open this folder in VS Code to view the source files and make edits
4. Clone your forked repository: **"git clone [URL of your forked repository]"**
5. In the terminal, move into the project folder
6. Install this project's Composer dependencies: **"composer install"**
7. Create your own '.env' file based on the '.env.example' file: **"copy .env.example .env"**
8. In your .env file, make sure the following settings are configured:  
   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306  
   **DB_DATABASE=[your database name]**  
   **DB_USERNAME=[your MySQL username]**  
   **DB_PASSWORD=[your MySQL password]**
   **APP_DEBUG=false**
   Please make sure that all fields are filled out correctly
10. You can use MySQL Workbench to check the database tables through the GUI.
11. Generate the application key: **"php artisan key:generate"**
12. After running **"php artisan migrate:fresh --seed"**, you will be prompted to create the database. Enter **"yes"** to continue
13. Start Laravel Herd
14. Open Laravel Herd and go to the **Sites** section
15. Click **Add** and select the folder of the cloned OhenroGo! project
16. Herd will automatically generate a local development URL (example: http://ohenrogo.test)
17. Please make sure to open the link in **Google Chrome**

## Resources:

**Design:** Figma  
**Frontend:** HTML, CSS, JavaScript  
**Backend:** PHP  
**Framework:** laravel  
**Database:** MySQL  
**Environment:** VS Code, laravel herd, mysql workbench  
**Version Control:** Git (GitHub)  
**Tools:** Composer  
**Additional Resources:** Laravel documentation: https://laravel.com/docs/12.x/installation,
ChatGPT
