Pre-requisite
--------------

	-> Node JS
	-> Npm

Project setup (for development and production mode)
---------------------------------------------------
	-> Clone the Git repository
	-> Navigate to the project directory
	-> Run `npm install`

Development mode
-----------------
	-> Open the project in desired editor tool. (Netbeans, Sublime text, etc...)
	-> Rename the particular module as ‘src’ which has to be worked in development mode
	-> Open index.html file from src folder in the editor.
		a. Provide room number, user id, menu reference in the respective div tags
		b. The above configuration values will be available in the database
	-> Open index.js file from src folder in the editor.
		a. Uncomment the last two lines in the file
			`const event = new Event('initCCRC');
			 document.dispatchEvent(event);`
	-> Open api/*api.js file from src folder in the editor.
		a. Append the server url in all the fetch method
			Example: https://10.10.1.41
			return fetch('https://10.10.1.41/catie/api/…..’)
	-> Open command prompt and navigate to the project folder
	-> Run command ‘npm start –s’ into the project directory
	-> On successful execution, the module will be executed and opened in the browser

	Note: Follow same procedure for all other modules

Production mode
---------------
	-> Open the project in desired editor tool. (Netbeans, Sublime text, etc...) 
	-> Open index.html file from src folder in the editor.
		a. Remove room number, user id, menu reference values in the respective div tags
	-> Open index.js file from src folder in the editor.
		a. Comment the last two lines in the file
			“//const event = new Event('initCCRC');
			 //document.dispatchEvent(event);”
	-> Open api/*api.js file from src folder in the editor.
		a. Remove the server url in all the fetch method
			Example: https://10.10.1.41
			return fetch(‘/catie/api/…..’)
	-> Open command prompt and navigate to the project folder
	-> For building specific module 
		a. run command `npm run build-single < Module Directory Name>`
			Example :
				C:\Users\administrator\Desktop\React- Project > `run build-single < Module Directory Name>`
		b. On successful execution, the production build will be generated and placed inside the dist folder.
			Example :
				C:\Users\administrator\Desktop\React- Project \dist
	-> For Building all Modules 
		a. run command command `npm run build-all`
			Example :
				C:\Users\administrator\Desktop\React- Project > `npm run build-all`
		b. On successful execution, the production build will be generated and placed inside the build folder.
			Example :
				C:\Users\administrator\Desktop\React- Project \build\
