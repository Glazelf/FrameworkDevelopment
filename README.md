# FrameworkDevelopment
Project can be accessed at: https://github.com/Glazelf/FrameworkDevelopment  
Tests logs can be accessed at: https://github.com/Glazelf/FrameworkDevelopment/actions/workflows/laravel.yml  
## Testplan
### User Story 1
Definition of Done: User can create an account with a valid name, email address and password.  
Tasks:  
- URLs that require visiting need to be checked.  
- Input validation using valid input needs to be tested.  
- Valid registration data can be pushed to an empty database.  

User Persona: Any user that wants to register an account.  

Steps (Happy Path):  
1. User visits the landing page.  
2. User clicks **Register** to go to the registration page.  
3. User inputs valid registration data.  
4. User clicks **Sign Up** to submit said data.  
5. Register successfully.

Steps (Unhappy Path):  
1. User visits the landing page.  
2. User clicks **Register** to go to the registration page.  
3. User inputs invalid registration data.  
4. User clicks **Sign Up** to submit said data.  
5. Registration fails.  

Unit Tests:
- Page responses: Test if the required pages can be accessed.

Feature Tests:
- registerHappyPathTest: Test if a registration with valid information is validated and pushed to database as expected.
- registerUnhappyPathTest: Test if a registration with invalid information is validated and cancelled as expected.
### User Story 2
Definition of Done: User can log into their account if it is present in the database
Tasks:  
- URLs that require visiting need to be checked.  
- Database needs to be prefilled with testing data.
- Login page requests needs to be made to check database and log into a valid account.

User Persona: Any user that wants to log into their account

Steps (Happy Path):  
1. User visits the landing page.  
2. User clicks **Login** to go to the login page.  
3. User inputs their login data.
4. User clicks **Sign In** to submit said data.  
5. Logged in successfully.

Steps (Unhappy Path):  
1. User visits the landing page.  
2. User clicks **Login** to go to the registration page.  
3. User inputs invalid login data.  
4. User clicks **Sign In** to submit said data.  
5. Login fails.  

Unit Tests:
- Page responses: Test if the required pages can be accessed.

Feature Tests:
- loginHappyPathTest: Test if a login with valid information is checked against the database and accepted as correct.
- loginUnhappyPathTest: Test if a login with invalid information is checked against the database and cancelled.

### Evaluation
Mistakes these tests can show:
- Invalid registration data validating.
- Incorrect database parsing.
- Incorrect database reading.
- All pages are accessible.
Mistakes these tests can not show:
- Pages loading properly: They could be accessible (giving a 200 error) but still be broken and unusable.
- Inputs fields responding to user input: Actual typing instead of computer-generated input through the back-end.  

### Can you conclude "Everything works correctly"?:  
No. You can only really test the back-end and if various systems within your website work properly and interact as expected. This does not test the front-end whatsoever and I imagine it would be near impossible to do so using automated scripts instead of real users.  
Real front-end testing could be done through scraping a screen but this would be a very specific solution only fitting one specific resolution.  
Everything works correctly and as expected, given that the user can interact with your systems as expected.
