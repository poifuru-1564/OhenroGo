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

## ER diagram(draw.io)

https://drive.google.com/file/d/1Ii0g0MHEgcG1RKQVOaHIhHK3JjyYO3Uw/view?usp=sharing

## Initial Design (Figma)

https://www.figma.com/design/YPTE7VIw6KqzvjQmYUsQyL/Ohenro-GO-?node-id=131-1689&t=pMLZ63SqllwnajAl-1

## Core Features and Functionality

### Blogging Fucntionality

**Features:**

-   **Edit blog feature:** Users can create and edit their blogs
-   **Uploading image fetuare:** Users can upload a image per one post
-   **Delete blog feature:** Users can delete their blogs
-   **Categorization feature:** Categorize the blog by "Prefectures", "Location" (temples), "Status", "Topic", and "user role". Users can decide categories of the blog when posting it and search with specific categories.
-   **Time stamp:** The uploaded time is showed with the post

### Account Management Functionality

**Features:**

-   **Create account feature:** Users can create account
-   **Log-in feature:** Users can log-in their account
-   **Log-out feature:** Users can log-out their account

## Getting Started

### Prerequisites

1. Git
2. VS Code
3. laravel herd
4. mysql
5. mysql workbench
6. Composer

### Instruction

Those instructions are for Windows

**Installing Git:**

1. Go to website: https://git-scm.com/install/
2. Download the installer that corresponds to your OS.
3. Run the installer.
4. Default settings should work for this project.
5. (Optional) To confirm that Git was installed successfully, run the following command in terminal: git --version

**Installing VS Code:**

1. Go to website: https://code.visualstudio.com/download
2. Download the installer that corresponds to your OS (user installer file is recommended for Windows)
3. Install

**Installing laravel herd:**

1. Download Herd from here: https://herd.laravel.com/windows
2. Run intsaller

**Installing MySQL (Community Server):**

1. Download MySQL Community Server from here: https://dev.mysql.com/downloads/mysql/
2. You can choose any version you like (Recommended: 8.4.7 LTS). Recommended file type for Windows is MSI installer.
3. do not have to sign up or Sign-up or Log-in, just download
4. Set root password
5. Start MySQL

**Installing MySQL workbench:**

1. Download Workbench from here: https://dev.mysql.com/downloads/workbench/
2. Recommended: version 8.0.44, msi file
3. Open and connect to MySQL using the root account

**Installing Composer:**

1. Open VS code terminal (or git terminal)
2. Open folder and select the project
3. input command "install composer" in terminal

**Setting up the project with laravel herd**

After setting site in laravel, open the link with Google Chrome.

## Resources:

**Design:** Figma  
**Frontend:** HTML, CSS, JavaScript  
**Backend:** PHP  
**Framework:** laravel  
**Database:** MySQL
**Environment:** VS Code, laravel herd, mysql workbench  
**Version Control:** Git(Github)  
**Tools:** Composer
