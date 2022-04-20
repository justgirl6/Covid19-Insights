
US Covid-19 Infection Insights:

This is an interactive applications that allows Lab Technologist, Lab Technicians, Covid-19 Infections Reseachers etc. to infer and predict next wave of Covid
leveraging John Hopkins Covid-19 infection Cases Dataset.


This application was written with Tigergraph Database 100%, PHP, Ajax, JQUERY, Bootstraps, Css etc via Tigergraph Curl Restful API Calls.
All Database Transactions are done with Tigergraph Database Analytics 100% via Tigergraph Restful API Curl Calls using PHP Programming Language.



How To Test the Application:

Step 1.) Download John Hopkins US Covid19 Infections Cases Dataset
Dataset Source:    https://github.com/CSSEGISandData/COVID-19/blob/master/csse_covid_19_data/csse_covid_19_daily_reports_us/01-01-2021.csv

Step 2.)  Create a  Vertex  Eg.  Covid19_reports within your Tigergraph Cloud Database Instance along with the vertex data types/attributes.

please Open Tigergraphdb_table_vertex.txt file so that you will see  the Tigergraph vertex for (Covid19_reports) and their respective data types/attributes that I 
created.  use the sample to create your own vertex in your graph within your Tigergraph Database Instance.


Finally load the covid19 dataset into Covid19_reports vertex that you just created. Also ensure that each column in John Hopkins Covid19 Datasets csv files

matches and points to corresponding data_type/attributes in the  Covid19_reports vertex you created. 




Step 3.) Install Xampp Server on your Laptop/Desktop and ensure that PHP is installed and running.

Step 4.) You will need to First generate your Tigergraph Access token.  To this effect, edit tigergraph_token_generator.php file.
then enter your Tigergraph Cloud Database Credentials where appropriates.

A.) Tigergraph Cloud Database username
B.) Tigergraph Cloud Database Password
C.) Tigergraph Cloud Database Graph Name
D.) Tigergraph Cloud Database URL Instance  Eg: https://example.i.tgcloud.io

Once your are done, save it and run the Script at browser eg http://localhost/us_covid19_insights/tigergraph_token_generator.php

 it will generate your Tigerghrap Access token by making Restful API Curl Request via PHP to your Tigergraph Cloud Database instance.
 Sample Screenshot:   https://fredjarsoft.com/screenshot_tigergraph_token.png




Step 5.) Edit settings.php files and enter all the necessary  Tigergraph Acess tokens, Tigergraph Credentials, Google API Keys etc. where appropriates.

In settings.php file you will only need to edit and enter where appropriates.

A.) Tigergraph AccessToken obtained in Step 4 above.
B.) Tigergraph Cloud Database Graph Name
C.) Tigergraph Cloud Database URL Instance  Eg: https://example.i.tgcloud.io
D.) Google Map Keys. (Note that Just 1 Google API key is needed) This api key will serve for both Google Javascript Map API Key, 
Google Address Geolocation API, Google Address Reverse Geo-location API. Google directional Map etc.

To obtain this api key please visit https://console.developers.google.com
and create a project and then generate the Google API Key. you can also ensure that 
Google Javascript Map API Key, 
Google Address Geolocation API,
Google Address Reverse Geo-location API, 
Google directional Map etc. are enabled in the google dashboard console within your Google Project Application.


Just Hint, You can send us a Message at devpost.com if you will like me to send you my own Google Map API Key asap for faster testing.  Thanks



Step 6.)It is time to run the application

Ensure that Php is still running in the xampp Server once again. Then Call up your browser and the application will be running at 
http://localhost/us_covid19_insights/index.php


In case of further help, send me an email or better send me a message from devpost.com.   Enjoy.





