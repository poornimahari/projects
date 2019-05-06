<h2>Laravel Custom command programming</h2>
<h3>Prerequisites</h3>

<br>Laravel 5.7
<br>PHP 7.2
<br>MySQL
<h3>Installation</h3>
git clone https://github.com/poornimahari/projects.git projectname
<br>cd projectname
<br>composer install
<br>Create a database and inform .env
<br>php artisan migrate to create and populate tables
<h3>Data Commands</h3>
<br>SET empdata  [ip_address] [emp_name] [emp_id] (Order should be same)
<br>Insert the employee details to employee table  with data, ip_address, emp_name ,emp_id.
<br>GET empdata [ip_address]: Get the employee details having the ip_address
<br>UNSET empdata [ip_address]: Soft delete the data  having the passed ip_address
<br>SET empwebhistory [ip_address] [url]: It will first check if the ip address is assigned to any             employee or not if the ip address is there then it will insert the url  variable [url] to the mapped  ip_address [ip_address], other with it will throw error.
<br>GET empwebhistory [ip_address] : Print out the employee details with his web search history  stored under the variable [ip_address]. 
<br>UNSET empwebhistory [ip_address] :Delete all the web search history data mapped with ip_address.




