# Modular Blog System

## Overview

The Modular Blog System is a PHP-based application designed to demonstrate the use of traits, interfaces, and object-oriented principles in a modular fashion. The system includes functionality for logging, timestamp management, serialization, tagging, and publishing, all encapsulated within a set of traits and classes.

## Features

- **Traits**:
  - `Loggable`: Provides logging functionality with timestamping.
  - `Timestampable`: Manages creation and update timestamps.
  - `Serializable`: Supports serialization and unserialization.
  - `Taggable`: Allows tagging of objects.
  - `Categorizable` (Challenge): Adds categorization capabilities.

- **Interface**:
  - `Publishable`: Defines methods for publishing and unpublishing content.

- **Classes**:
  - `BlogPost`: Implements multiple traits and the `Publishable` interface.
  - `User`: Demonstrates basic logging and serialization.
  - `Comment`: Shows timestamp management and logging.

- **Main Script**: Provides examples of how to use the classes and traits in a real-world context.

## Folder Structure

    blog_system/
    │
    ├── src/
    │ ├── traits/
    │ │ ├── Loggable.php
    │ │ ├── Timestampable.php
    │ │ ├── Serializable.php
    │ │ ├── Taggable.php
    │ │ └── Categorizable.php
    │ │
    │ ├── classes/
    │ │ ├── BlogPost.php
    │ │ ├── User.php
    │ │ └── Comment.php
    │ │
    │ └── interfaces/
    │ └── Publishable.php
    │
    └── index.php

## Getting Started

### Prerequisites

- PHP 7.4 or higher

### Installation

1. Clone the repository:

   ## git clone https://github.com/yourusername/modular-blog-system.git
   
2. Navigate to the project directory:

   ## cd modular-blog-system

3. composer install

   ## composer install

4. Running the Application
  Open the index.php file in your web server or run it via CLI:
    ## php index.php
Observe the output demonstrating the use of various traits and classes.

### Usage
  ## BlogPost Class:

    * Add and remove tags
    * Set and get timestamps
    * Publish and unpublish posts
    * Serialize and unserialize
    
  ## User Class:

    * Log messages
    * Serialize and unserialize

  ## Comment Class:

    * Manage timestamps
    * Log messages
    
### Challenges
## Overriding Methods: 
  -Modify BlogPost to override methods from traits.
## New Trait: 
  -Integrate Categorizable into BlogPost.
## Reflection: 
  -Use PHP's ReflectionClass to inspect traits used in BlogPost.
## Magic Method: 
  -Implement and utilize __toString() in BlogPost.
## Static Methods: 
  -Add and use static methods in traits.

### Contributing
  -Feel free to open issues or submit pull requests. Contributions are welcome!
