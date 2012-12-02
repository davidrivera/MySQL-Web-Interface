<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>
    <body>
        <header style="text-align:center;">
            <h1>CNT 4714 - Suppliers, Parts, Jobs, Shipments Database CLient</h1>
        </header>
        <div id="middle" style="width: auto;height: 1000px; ">
        <div id="center" style="width: 1000px;margin-left: auto;margin-right: auto;">
        <hr />
            <div id="l-middle" style="float: left;">
                <form method="post" action="validator.php">
                    <table>
                        <tr>
                            <td><label for="username">Username: </label></td>
                            <td><input type="textbox" id="username" name="username" style="width: 150px;"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password: </label></td>
                            <td><input type="password" id="password" name="password" style="width: 150px;"/></td>
                    </table>
                    <input type="submit" />
                </form>
            </div><!--END OF L-MIDDLE-->
            <div id="r-middle" style="float: right;">
                <h2>Welcome to the Database Client</h2>
                <p>This will allow you to run SQL queries and update statements on the Jobs, Suppliers, Parts, and Shipments Databases.</p>
                <h2>Database</h2>
                <p>Connecting to MySQL Database</p>
                <h2>Features</h2>
                <ul>
                    <li>User Authentication</li>
                    <li>Select Query</li>
                    <li>Update Query</li>
                    <li>Business Logic Implementation</li>
                    <li>Result Page</li>
                    <li>Error Checking</li>
                </ul>
                <h2>User Login</h2>
                <p>Use the following on the left</p>
                <ul>
                    <li><b>Username:</b>root</li>
                    <li><b>Password:</b></li>
                    <li><b>Username:</b>client1</li>
                    <li><b>Password:</b>client1</li>
                    <li><b>Username:</b>client2</li>
                    <li><b>Password:</b>client2</li>

                </ul>
            </div> <!--END OF R-MIDDLE-->
            <div id='footer' style='clear:both;'>
                <hr />
            </div><!--END OF FOOTER-->
            </div> <!--END OF CENTER-->
        </div> <!--END OF MIDDLE-->


    </body>
</html>
