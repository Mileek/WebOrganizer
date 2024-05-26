# WebOrganizer

**WebOrganizer** is a TODO App written in PHP using the Amelia framework. The project primarily uses PHP for coding and includes Bootstrap 5 and Font Awesome icons.

## Features

The web application contains the following views:

### LoginView
![LoginView](https://github.com/Mileek/WebOrganizer/assets/95537833/7efd0db7-9b6c-4341-a42b-28b42b80ad01)

### RegisterView
![RegisterView](https://github.com/Mileek/WebOrganizer/assets/95537833/8eb48ae6-36e8-49e6-a94b-2b6becf2e8d8)

### ToDoView
![ToDoView](https://github.com/Mileek/WebOrganizer/assets/95537833/72cd1541-4bde-4ad0-8046-839dc882ecca)

### ImagesView
![ImagesView](https://github.com/Mileek/WebOrganizer/assets/95537833/93fc3712-1ce1-404a-aadf-e191206af7b3)

## Description

The web application comprises four main views, as shown above. Additionally, a Bootstrap modal is used to display errors, warnings, and information messages at the center of the screen.

### RegisterView
This view allows you to add a new user to the app. The new user can log in using their email address or name, which will be stored in the `users` table in the database. All users have access to the entire web app; no admin permissions are required for any functionalities.

### LoginView
Upon successful login, users are redirected to the main ToDoView.

### ToDoView
The main view allows you to create tasks that will be stored in the `tasks` table. To add a task, simply write your task description and press enter. You can mark a task as finished by pressing the gray tick next to the description. The date and time when the task was added are displayed, and a red cross allows you to delete the selected task. A simple navbar on the left side allows you to switch between app views or log out.

### ImagesView
This view has a similar layout to the ToDoView. It allows you to add image URLs, which are stored in the `images` table and displayed in the center. The `images` table contains columns such as `url` and `date`. Just like the ToDoView, users can delete selected images.

### Logout
The last option in the navbar allows users to log out of the app, completing the user session.
