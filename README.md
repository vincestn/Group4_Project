## BSCS 3A GROUP: 4 - All about COVID-19 Pandemic


### Contributors: 
	Sta Ana, John Vincent - LogIn and Register ( including db )
                            Implementation of Authentication
				Overall UI / Design Layouts and JS
                            Navigations
                
	      Feca, John Neil - postSymp.blade.php ( code and article )
                            CSS, Concept and Color Palettes
                            Adjustments on UI / Layouts
                            DB / Migration and Models for Articles
                
	       Jamora, Joshua - CRUD for Articles
                            Controllers ( route controller and articles controller )
                
	         Calayo, Aumi - Update Articles
                            Include Files ( footer and header )
                            postLN1.blade.php ( code and article )
				postLN2.blade.php ( code and article )
                            Video and Edit
                
	Caandoy, Anna Loraine -	Create Articles
                            Include Files ( footer and header )
                            postIN1.blade.php ( code and article )
				postIN2.blade.php ( code and article )
                            Video and Edit
				
### DESCRIPTION/CONCEPT: 
	QuaraNtimes an informative news website that brings update about COVID-19 around the globe.
	

### DO THIS FIRST FOR YOU TO ACCESS THE WEBSITE!!
1. Clone the repository on your local computer
2. Open the repository on Visual Studio Codes
3. Create an .env file and copy the codes inside .env.example file
4. On the terminal run the following in order:
        -> php artisan key:generate
        -> php artisan cache:clear
        -> php artisan config:clear
5. Create a database named "quarantimesdb", and on the terminal run: "php artisan migrate" to create tables
6. On the terminal run: "php artisan storage:link" for you to be able to upload images       
7. After that run "php artisan serve" on the terminal
8. Click "GO" in the bottom and you're good to go


## INSTRUCTION HOW TO USE:
Note that all the navigations are functional.

- Type "http://127.0.0.1:8000/index" at the browser, this will lead you to the Overview Page
- Register an account for you to access the Admin Home and once Login you can Create, Update and Delete an Article
- When Logged-In you won't be able to access the Login and Register Page, on the other hand you won't access the Admin Home when not Logged-In
- The Main Page will show all the articles saved on the Database but won't be able to manipulate it
