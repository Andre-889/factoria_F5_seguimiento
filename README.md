
# FACTORÍA F5 -Tracking API-

This API is an integral component of the **[FACTORÍA F5 - CRM](https://github.com/RocioAlonsoDev/factoria-f5-crm)** project, designed to manage and track student data and progress as they participate in Factoría F5's bootcamps and complete their courses. This README will help you understand how to use the API effectively and get started with it.


## Features
- Students Personal and Professional information Management: Easily manage student information, including personal details, course and professional information.
- Progress Tracking: Keep track of student progress, such as assignments completed, grades and feedback.
- Bootcamp Stacks and Skills Management: Create categories, stacks and skills and assign it to bootcamps.


## Installation

### Prerequisites
- Laravel 10 (PHP) 
- PHPUnit
- XAMPP
- MySql
- Composer

Follow these instructions to get the FACTORÍA F5 - Tracking API up and running on your local machine.


```bash
  composer install
```
    
Copy and set the `.env` file with your database information. 

```bash
  php artisan migrate:fresh --seed
```
## Running Tests

To run tests, run the following command

```bash
  php artisan test
```


## Documentation

This API provides access to data related to bootcamp, category, coderFeedback, evaluation, evaluationStack, personalInformation, personSkill, professionalInformations, projectsWorkshop, skill, and stack for consumption from the shared central repository "factory-f5-crm".

### Main Endpoints

#### Categories:


 - '/categories' - Get the list of categories
- '/categories/{id}' - Get specific details of a category by its Id

#### Stacks:
- '/stacks' - Get the list of stacks
- '/stacks/{id}' - Get details of a specific stack by its Id
- ...
#### Evaluations:
- '/evaluations' - Get the list of evaluations
- '/evaluations/{id}' - Get details of a specific evaluation by its Id
- ...
#### EvaluationStack:
- '/evaluationStack' - Get the list of stacks for each evaluation
- '/evaluationStack/{id}' - Get stacks of a specific evaluation by its Id
- ...
#### PersonalInformation:
- '/personalInformation' - Get the list of personal information for coders
- '/personalInformation/{id}' - Get specific information for a coder by their Id
- ...
#### ProjectsWorkshops:
- '/projectsWorkshops' - Get the list of projects for each coder
- '/projectsWorkshops/{id}' - Get information on projects for a specific coder by their Id
- ...

#### Skills:
- '/skills' - Get the list of skills
- '/skills/{id}' - Get each skill by its Id
- ...

CoderFeedbacks:
- '/coderFeedbacks' - Get the list of feedbacks for each coder
- '/coderFeedbacks/{id}' - Get feedbacks for a specific coder by their Id
- ...

ProfessionalInformations:

- '/professionalInformations' - Get the list of professional information for each coder
- '/professionalInformations/{id}' - Get professional information for a specific coder by their id
- ...
#### PersonSkills:
- '/personSkills' - Get the list of skills for each coder
- '/personSkills/{id}' - Get the skills of a specific coder by their Id
- ...
#### BootcampStacks:
- '/bootcampStacks' - Get the list of stacks for each bootcamp
- '/bootcampStacks/{id}' - Get stacks for a specific bootcamp by its Id
- ...

### Authentication
The API currently does NOT require authentication to access the data. However, if authentication is implemented in the future, additional details will be provided here.

### Usage Examples
Get evaluations for a coder:
```bash
  GET /api/evaluations/{id}
```
Get personal information for a coder:
```bash
  GET /api/personalInformations/{id}
```
Create a new stack:
```bash
  POST /api/stacks
```
Request Body

{
    
    "id": 1,
    "date": "2022-01-10",
    "type": "SELF-EVALUATION",
    "mean": 29.01,
    "user_id": 2,
    "person_id": 4,
    "created_at": "2023-10-23T09:44:12.000000Z",
    "updated_at": "2023-10-23T09:44:12.000000Z"    
},


## Desarrollado por

- [@Ninetthe](https://github.com/Ninetthe)
- [@BeatrizCano](https://github.com/BeatrizCano)
- [@Andre-889 ](https://github.com/Andre-889)
- [@RocioAlonsoDev](https://github.com/RocioAlonsoDev)
- [@mireiavh](https://github.com/mireiavh)


