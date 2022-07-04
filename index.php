<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATA </title>
</head>

<body>

    <form  action="user.php" action="#"  method="post">
        <p><label> Full Name<br />
                <input required type="text" name="fullname" value="" size="40" /> </label></p>
        <p><label> Gender<br />
                <select required name="gender">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select> </label></p>
        <p><label> Valid Email<br />
                <input required type="email" name="email" value="" size="40" /> </label></p>
        <p><label> Phone Number<br />
                <input type="tel" name="PhoneNumber" value="" size="15" /> </label></p>
        <p><label> Zone<br />
                <select required name="ZONE">
                    <option value=""></option>
                    <option value="East Zone 1">East Zone 1</option>
                    <option value="East Zone 2">East Zone 2</option>
                    <option value="East Zone 3">East Zone 3</option>
                    <option value="West Zone">West Zone</option>
                    <option value="Mid-West Zone">Mid-West Zone</option>
                    <option value="North Zone 1">North Zone 1</option>
                    <option value="North Zone 2">North Zone 2</option>
                    <option value="North Zone 3">North Zone 3</option>
                </select> </label></p>
        <p><label> Diocese/Region<br />
                <select required name="diocese">
                    <option value=""></option>
                    <option value="ABA">ABA</option>
                    <option value="ABAKALIKI">ABAKALIKI</option>
                    <option value="ABUJA">ABUJA</option>
                    <option value="AHIARA">AHIARA</option>
                    <option value="AWKA">AWKA</option>
                    <option value="BENIN">BENIN</option>
                    <option value="CALABAR">CALABAR</option>
                    <option value="ENUGU">ENUGU</option>
                    <option value="IBADAN">IBADAN</option>
                    <option value="ILORIN">ILORIN</option>
                    <option value="ISSELLEUKU">ISSELLEUKU</option>
                    <option value="JOS">JOS</option>
                    <option value="KADUNA">KADUNA</option>
                    <option value="LAGOS">LAGOS</option>
                    <option value="LOGISS">LOGISS</option>
                    <option value="LOKOJA">LOKOJA</option>
                    <option value="MAKURDI">MAKURDI</option>
                    <option value="MINNA">MINNA</option>
                    <option value="NSUKKA">NSUKKA</option>
                    <option value="OGOJA">OGOJA</option>
                    <option value="OKIGWE">OKIGWE</option>
                    <option value="ONITSHA">ONITSHA</option>
                    <option value="ORLU">ORLU</option>
                    <option value="OWERRI">OWERRI</option>
                    <option value="PORT HARCOURT">PORT HARCOURT</option>
                    <option value="UMUAHIA">UMUAHIA</option>
                    <option value="UYO">UYO</option>
                    <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                    <option value="USA">USA</option>
                    <option value="EUROPE">EUROPE</option>
                    <option value="CANADA">CANADA</option>
                    <option value="GHANA">GHANA</option>
                    <option value="ANGOLA">ANGOLA</option>
                    <option value="CHINA">CHINA</option>
                    <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                    <option value="SIERRA LEONE">SIERRA LEONE</option>
                    <option value="CAMEROON">CAMEROON</option>
                    <option value="CÔTE D&#039;IVOIRE">CÔTE D&#039;IVOIRE</option>
                    <option value="LIBERIA">LIBERIA</option>
                </select> </label></p>
        <p><label> Ministry/Department<br />
                <select required name="Ministry">
                    <option value=""></option>
                    <option value="GCC">GCC</option>
                    <option value="WGC">WGC</option>
                    <option value="ZCC">ZCC</option>
                    <option value="NCC">NCC</option>
                    <option value="DCC">DCC</option>
                    <option value="DCSC">DCSC</option>
                    <option value="Visiting Pastor">Visiting Pastor</option>
                    <option value="Campus Coordinator">Campus Coordinator</option>
                    <option value="Level Coordinator">Level Coordinator</option>
                    <option value="Campus Sister Coordinator">Campus Sister Coordinator</option>
                    <option value="Prayer">Prayer</option>
                    <option value="Deliverance">Deliverance</option>
                    <option value="Evangelism">Evangelism</option>
                    <option value="Drama">Drama</option>
                    <option value="Media">Media</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Chorister">Chorister</option>
                    <option value="Usher">Usher</option>
                    <option value="Decoration">Decoration</option>
                    <option value="Others">Others</option>
                </select> </label></p>
        <p><label> School/Campus<br />
                <input required type="text" name="School" value="" size="40"> </label></p>
        <p><input name="submit" type="submit" value="Submit" /></p>
    </form>
</body>

</html>