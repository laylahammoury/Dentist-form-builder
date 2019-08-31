<html>
<body>
<div>
    <h3>Portal Form</h3>
    <div style="border: thin black">
        <h4>New Dentist </h4>
        <form action="FormBuilder.php" method="post">
            First name: <input type="text " name="firstName">
            Last name: <input type="text " name="lastName">
            Email Address : <input type="text" name="email">
            Phone: <input type="number" name = "phone">
            WebSite: <input type="url" name="website">

        </form>

    </div>

    <div style="border: thin black">
        <h4>Biography </h4>
        <form action="FormBuilder.php" method="post">
            Licence Country: <input type="text " name="licenseCountry">
            Licence Number: <input type="text " name="licenseNo">
            Years is practice: <input type="text " name="yearsInPractice">
            Gender: <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female

        </form>

    </div>
</div>

</body>
</html>

<?php
