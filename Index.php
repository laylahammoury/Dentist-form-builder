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
            Licence Number: <input type="number" name="licenseNo">
            Years is practice: <input type="number" name="yearsInPractice">
            Gender: <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female

        </form>

    </div>
    <div style="border: thin black">
        <h4>Education </h4>
        <form action="FormBuilder.php" method="post">
           Degree: <input type="text " name="degree">
            year: <input type="number" name="year">
             major: <input type="text " name="major">
            school: <input type="text" name="school" > e
            <input type="button" name="addMore" value="ADD MORE!">
        </form>

    </div>
    <div style="border: thin black">
        <form action="FormBuilder.php" method="post">
            Country: <input type="text" name="country">
            City: <input type="text" name="city">
            State: <input type="text" name="state">
            Postal Code: <input type="text" name="postalCode">

        </form>

    </div>
</div>

</body>
</html>


