# Blog Application with Admin Panel and Mailchimp Integration

## Overview

Developed a sophisticated blog application leveraging Laravel, Alpine.js, HTML, CSS, and Tailwind CSS, showcasing a comprehensive set of features and best practices in web development. The project focuses on seamless CRUD operations, search and filtering, pagination, user authentication, image storage, and integration with the Mailchimp API.

## Key Features

### Database Management

- Implemented database migrations for structured tables (posts, users, comments).
- Utilized seeders and factories for effective testing and development.

### CRUD Operations

- Intuitive admin panel for seamless CRUD operations on blog posts.
- Utilized Laravel's Eloquent ORM for efficient database interaction.

### Blade Components and Views

- Modular and reusable UI elements with Blade components.
- Responsive views using HTML, CSS, and Tailwind CSS.

### Dependency Injection

- Utilized dependency injection in the AppServiceProvider.
- Improved code maintainability and scalability.

### Validation

- Robust form validation for data integrity and security.
- Validated user inputs for various actions.

### Advanced Search and Filtering

- Search functionality for blog posts based on titles and content.
- Filtering options for categories and authors.

### Pagination

- Enhanced browsing experience with efficient pagination.

### Admin Gate

- Custom gate in the AppServiceProvider to control admin panel access.
- Only users with the username 'darkmickey' have admin privileges.

### Image Storage

- Functionality for users to upload and store images for blog posts.
- Secure storage and retrieval of images.

### Mailchimp API Integration

- Integrated Mailchimp API using a custom MailchimpNewsletter service class.
- Seamless newsletter subscription process through the /newsletter route.

## Routes

### Public Routes

- `/`: Home page displaying a paginated list of blog posts.
- `/posts/{post:slug}`: Detailed view of a specific blog post.
- `/register`: User registration page.
- `/login`: User login page.
- `/newsletter`: Endpoint for handling newsletter subscriptions.

### Authenticated Routes

- `/logout`: Allows authenticated users to log out.
- `/posts/{post:slug}/comments`: Enables authenticated users to add comments to blog posts.

### Admin Routes

- `/admin/posts/create`: Admin route for creating new blog posts.
- `/admin/posts`: Admin route to view all blog posts.
- `/admin/posts/{post}/edit`: Admin route to edit existing blog posts.
- `/admin/posts/{post}`: Admin routes for updating and deleting blog posts.

## Tech Stack

- **Laravel**: PHP web framework for backend development.
- **Alpine.js**: JavaScript framework for enhancing frontend interactivity.
- **HTML & CSS**: Standard markup and styling languages for web development.
- **Tailwind CSS**: Utility-first CSS framework for streamlined styling.
- **Mailchimp API**: Integrated Mailchimp for seamless newsletter subscription management.
