<h3>Installation.</h3>
<h4>(for simple start you should have virtual host "napaeduhub" and mysql-DB "napaeduhub")</h4>
<br>type <b>cd www</b>
<br>type <b>git clone https://github.com/25one/napaeduhub.git</b> 
<br>type <b>cd napaeduhub</b>
<br>for setting connect to <b>mysql</b> in <b>.env</b> file :
<br>    set <b>DB_DATABASE</b> (napaeduhub)
<br>    set <b>DB_USERNAME</b> (root)
<br>    set <b>DB_PASSWORD</b> (your password)
<br>type <b>php artisan config:cache</b>   
<br>type <b>php artisan migrate --seed</b> to create and populate tables
<br>
<br>type <b>sudo chmod -R 777 storage</b>
<br>type <b>sudo chmod -R 777 bootstrap/cache</b>
<br>
<br>To start the application in the browser <b>napaeduhub/</b>