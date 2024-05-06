<!DOCTYPE html>
<html>

<head>
    <title>
        Update Profile
    </title>

    <link rel="stylesheet" href="styles/userprofile.css">

</head>

<body style="background-color:#ccc">
    <?php
    session_start();
    require 'send.php';

    // Check if user ID is provided
    if (isset($_POST['userID'])) {
        $userID = $_POST['userID'];

        $result = mysqli_query($con, "SELECT * FROM users WHERE userID = $userID");
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container" style="margin:50px 50px 50px 50px;line-height:3;">

                <div class="column">
                    <div>
                        <h2>Update Profile</h2>
                        <form method="POST" action="update_account.php">

                            <table width="100%">
                                <tr>
                                    <td>
                                        <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
                                        <label for="fname"> Full Name</label><br>
                                        <input type="text" id="fname" name="Fname" value="<?php echo $row['Fname']; ?>"><br>
                                    </td>
                                    <td>
                                        <input type="hidden" id="fname" name="username" value="<?php echo $row['username']; ?>"><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="number">Email</label><br>
                                        <input type="text" id="lname" name="email"
                                            value="<?php echo $row['email']; ?>"><br>
                                    </td>
                                    <td>
                                        <label for="mail"> Phone No </label><br>
                                        <input type="text" id="mail" name="phone" value="<?php echo $row['phone']; ?>"> <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="nic"> NIC </label><br>
                                        <input type="text" id="mail" name="NIC" value="<?php echo $row['NIC']; ?>">
                                        <br>
                                    </td>
                                    <td>
                                    </td>

                                <tr>
                                    <td>
                                        <label for="pw"> Password </label><br>
                                        <input type="password" id="mail" name="pw" value="<?php echo $row['pw'];?>">
                                        <br>
                                    </td>
                                    <td>
                                        <label for="Rpw">Re-enter Password </label><br>
                                        <input type="password" id="mail" name="Rpw" value="<?php echo $row['Rpw'];?>">
                                        <br>
                                    </td>
                                </tr>
                                
                                <td><br>
                                    <input type="submit" style="font-size: medium;font-weight: bold;background-color:black;color:white;cursor:pointer;" value="Update Profile">
                                </td><td></td>
                            </table>
                    </div>
                </div>
            </div>

            </form>
            <?php
        } else {
            echo "Account not found.";
        }
    } else {
        echo "User ID not provided.";
    }
    ?>
</body>

</html>