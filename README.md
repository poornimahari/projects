Laravel Custom command programming
Installation
git clone https://github.com/poornimahari/projects.git projectname
cd projectname
composer install
Create a database and inform .env
php artisan migrate to create and populate tables
Data Commands
SET empdata  [ip_address] [emp_name] [emp_id]
Insert the employee details to employee table  with data, ip_address, emp_name ,emp_id.
GET empdata [ip_address]: Get the employee details having the ip_address
UNSET empdata [ip_address]: Soft delete the data  having the passed ip_address
SET empwebhistory [ip_address] [url]: It will first check if the ip address is assigned to any             employee or not if the ip address is there then it will insert the url  variable [url] to the mapped  ip_address [ip_address], other with it will throw error.
GET empwebhistory [ip_address] : Print out the employee details with his web search history  stored under the variable [ip_address]. 
UNSET empwebhistory [ip_address] :Delete all the web search history data mapped with ip_address.
