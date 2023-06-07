<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIQIUZ-2</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        div.main{
            display: flex;
            width: 80%;
            flex-direction: column;
        }
        div.header{
            display: flex;
            flex-direction: row;
            width: 100%;
            background-color: rgb(252,252,253);
            margin-top: 5px;
            padding: 10px;
        }
        div.header>div.id{
            width: 5%;
        }
        div.header>div{
            width: 20%;
        }
        div.header>div.sub{
            width: 50%;
        }
        header{
            width: 100%;
            background-color: black;
            height: 65px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        img{
            width: 100px;
            height: auto;
        }
        span{
            color: white;
            font-size: 18px;
            padding: 10px;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h1{
            padding: 20px;
        }
        div.wrapper{
            border-bottom: solid 1px grey ;
            background: rgb(230,230,230);
        }
        form{
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="pyinc-logo.png">
        <span>pyinc develeopers</span>
    </header>
    <h1>Search User</h1>
    <form action="" method='post'>
    <label for="username">username</label>
    <input type="text" name='username' placeholder='useername' required=''></br></br>
    <label for="password">password</label>
    <input type='password' name='password'placeholder='******' required=''></br></br>
    <input type='submit' value="Login" name="submit">
    </form>

    <div class="main">
        <div class="header wrapper">
            <div class="id">id</div>
            <div class="reg">regno</div>
            <div class="sub">subject</div>
            <div>markss</div>
        </div>
    
    <?php
    if(isset($_POST['submit'])){
        $urs = $_POST['username'];
        $pwd = $_POST['password'];
 
        // HTTPS URL to retrieve the token from
        $endpoint1 = 'https://isms.iaa.ac.tz/ismsapi/hakiki.php'; // Replace with your desired URL

        // Username and password
        $username = 'bcsClass';
        $password = 'jaribuKuingia@bcs$$+++!XZty';

        // Prepare the POST data
        $data1 = [
            'username' => $username,
            'password' => $password,
        ];

        // Encode the data as JSON
        $jsonData1 = json_encode($data1);

        // Create cURL resource
        $curl = curl_init($endpoint1);

        // Set cURL options
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Disable SSL certificate verification
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        // Execute the cURL request
        $response = curl_exec($curl);

        // Check for errors
        if (curl_errno($curl)) {
            die('Error: ' . curl_error($curl));
        }

        // Close cURL resource
        curl_close($curl);

        // Parse the response
        $data = json_decode($response, true);

        // Retrieve the token from the response
        $token = $data['token'] ?? null;

        // Validate the token
        if ($token === null) {
            die('Failed to retrieve token');
        }

        // SECOND ENDPOINT
        include_once('conn.php');
        // Second endpoint URL
        $endpoint2 = "https://isms.iaa.ac.tz/ismsapi/ca.php";

        // Username and password from login form
        $login_username = $urs;
        $login_password = $pwd; 

        // Create a cURL resource
        $curl = curl_init($endpoint2);

        // Set the authentication headers
        $headers = array(
            "Authorization: Bearer " . $token,
            "Content-Type: application/json"
        );

        $data2 = [
            'username' => $login_username,
            'password' => $login_password,
        ];

        $jsonData2 = json_encode($data2);

        // Set the request options
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Disable SSL certificate verification
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        // Send the request
        $response = curl_exec($curl);

        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
        // Handle the error
        } else {
            // echo(json_decode($response)->error);
        if (isset(json_decode($response)['error'])){
                die('Invalid User');
        }else{
    
        $records = json_decode(base64_decode(base64_decode($response)), true);
// Get the total number of records
        $totalRecords = count($records);
// Initialize the counter variable
$i = 0;
        }
// Loop through the records using a while loop
while ($i < $totalRecords) {
    $regno = base64_encode( $records[$i]['regno']);
    $somo = base64_encode( $records[$i]['somo']);
    $alama =  base64_encode($records[$i]['alama']);

//     // Do something with the record
    // echo "Reg No: $regno, Subject: $somo, Marks: $alama\n";

    $sql = "INSERT INTO studentinfo(`username`, `password`, `regno`, `subject`, `marks`) VALUES('TEST', '1234', '$regno', '$somo', '$alama')";
    mysqli_query($connection, $sql);


//     // Increment the counter
    $i++;
}
        }
        // Close cURL resource
        curl_close($curl); 
        $counter=1;
        $sql="select * from studentinfo where regno ='$regno' ";
        $result=mysqli_query($connection, $sql);
        while($res=mysqli_fetch_assoc($result)){
            
            ?>
        <div class="header">
            <div class="id"><?php echo($counter++);?></div>
            <div><?php echo(base64_decode($res['regno'])); ?></div>
            <div class="sub"><?php echo(base64_decode($res['subject'])); ?></div>
            <div><?php echo(base64_decode($res['marks'])); ?></div>
        </div>
        <?php
            
        }
       
    }
         ?>
    </div>
</body>
</html>